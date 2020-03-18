<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

use App\DataProduct;

use App\Kategori;

use App\Keterangan;

use App\Http\Controllers\Controller;

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
        //
        $product = DataProduct::when($request->search, function($query)
            use($request){
                $query->where('nama_product', 'LIKE', '%'.$request->search.'%')
                ->orWhere('kategori', 'LIKE', '%'.$request->search.'%')
                ->orWhere('keterangan', 'LIKE', '%'.$request->search.'%')
                ->orWhere('harga', 'LIKE', '%'.$request->search.'%');
            })->paginate(6);

        $kategori = Kategori::all();

        $keterangan = Keterangan::all();

        return view("product.index", ["product" => $product], compact("product", "kategori", "keterangan"));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $filePath = $request->file("image")->store("public");

        DB::table('product')->insert([
            'nama_product' => $request->nama_product,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
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
        $product = DataProduct::find($id);
        $kategori = Kategori::all();
        $keterangan = Keterangan::all();
        return view('product.edit', compact('product', 'kategori', 'keterangan'));
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
        //
        DataProduct::where("id", $id)->update($request->except("_token")); //ambil semua data kecuali token
        return redirect()->route("product.index");
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
}
