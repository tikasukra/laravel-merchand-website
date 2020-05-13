<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\DataProduct;
use App\Kategori;
use App\Keterangan;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\HTML\Builder;
use App\Http\Requests\ProductValidation;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductExport;

class ProductController extends Controller
{
    public function dashboard(){
        return view('dashboard.dashboard');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        $product = DataProduct::when($request->search, function($query) use($request){
            $query->where('nama_product', 'LIKE', '%'.$request->search.'%')
            ->orwhere('kategori_product', 'LIKE', '%'.$request->search.'%');
        })->join('kategori', 'kategori.id_kategori', '=', 'product.kategori_id')
        ->join('keterangan', 'keterangan.id_keterangan', '=', 'product.keterangan_id')
        ->paginate(5);

        $user = User::all();

        return view('product.index', compact('product','user'))->with('i', (request()->input('page', 1) - 1) * 10);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori = Kategori::all();
        $keterangan = Keterangan::all();
        return view('product.create', compact('kategori', 'keterangan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ProductValidation  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductValidation $request)
    {
        // $validation = Validator::make($request->all(),[
        //         "nama_product" => "string|min:3|required",
        //         "harga" => "integer|required",
        //         "stok" => "integer",
        //         "color" => "string|required",
        //         "image" => "required|image|mimes:jpeg,png,jpg|max:2048",
        //         "description" => "required",
        //     ]);

        // if($validation->fails()) {
        //     // dd($validation->errors());
        //     return redirect()->back()->withErrors($validation)->withInput();
        // }

        $filePath = $request->file("image")->store("public");

        DB::table('product')->insert([
            'nama_product' => $request->nama_product,
            'kategori_id' => $request->kategori_id,
            'harga' => $request->harga,
            'keterangan_id' => $request->keterangan_id,
            'stok' => $request->stok,
            'date' => $request->date,
            'color' => $request->color,
            'image' => $filePath,
            'description' => $request->description
        ]);

        return redirect()->route("product.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = DataProduct::find($id);
        $kategori = Kategori::find($id);
        $keterangan = Keterangan::find($id);
        return view('product.show', compact('product', 'kategori', 'keterangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kategori = Kategori::all();
        $keterangan = Keterangan::all();
        $product = DataProduct::findOrFail($id);

        return view('product.edit', compact('product','kategori','keterangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $nama_file = $request->hidden_image;
        $file = $request->file('image');

        if ($file !='') {
                $this->validate($request, [
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
                $nama_file = time()."_".$file->getClientOriginalName();
                $tujuan_upload = 'storage';
                $file->move($tujuan_upload,$nama_file);
        }else{
            $request->validate([
                "nama_product" => "string|min:3|required",
                "harga" => "integer|required",
                "stok" => "integer",
                "color" => "string|required",
                "image" => "image|mimes:jpeg,png,jpg|max:2048",
                "description" => "required",
            ]);
        }

        $form_data = array(
            'nama_product' => $request->nama_product,
            'kategori_id' => $request->kategori_id,
            'harga' => $request->harga,
            'keterangan_id' => $request->keterangan_id,
            'stok' => $request->stok,
            'date' => $request->date,
            'color' => $request->color,
            'image' => $nama_file,
            'description' => $request->description
        );



        DataProduct::where('id',$id)->update($form_data);

        return redirect()->route("product.index");

        // $filePath = $request->file("image")->store("public");

        // $form_data = array(
        //     'nama_product' => $request->nama_product,
        //     'kategori_id' => $request->kategori_id,
        //     'harga' => $request->harga,
        //     'keterangan_id' => $request->keterangan_id,
        //     'stok' => $request->stok,
        //     'date' => $request->date,
        //     'color' => $request->color,
        //     'description' => $request->description,
        //     'image' => $filePath
        // );



        // DataProduct::where("id", $id)->update($form_data->except("_token", "_method")->toArray()); //ambil semua data kecuali token
        // return redirect()->route("product.index");

        // DataProduct::where('id',$id)->update($form_data);

        // return redirect()->route("product.index");



        //
        // DataProduct::where("id", $id)->update($request->except("_token")); //ambil semua data kecuali token
        // return redirect()->route("product.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DataProduct::where("id", $id)->delete();
        return redirect()->route("product.index");
    }

    public function excel(){
        return Excel::download(new ProductExport, 'product.xlsx');
    }

}
