<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use Carbon\Traits\Timestamp;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Builder $builder)
    {
        if(request()->ajax()){
            return DataTables::of(Kategori::query())           
            ->addColumn("action", function ($data) {
                 return "
                    <a id='delete-form' href='" . route("kategori.destroy", ["id_kategori" => $data->id_kategori]) . "' class='btn btn-danger'><i class='fas fa-trash'></i></a>
                 ";
            })->addIndexColumn()->toJson();
        }

        $html = $builder->columns([
            ["data" => "DT_RowIndex", "name" => "#", "title" => "NO", "defaultContent" => "", "orderable" => false ],
            ["data" => "kategori_product", "name" => "kategori_product", "title" => "KATEGORI PRODUCT"],
            [
                'defaultContent' => '',
                'data'           => 'action',
                'name'           => 'action',
                'title'          => 'Action',
                'render'         => null,
                'orderable'      => false,
                'searchable'     => false,
                'exportable'     => false,
                'printable'      => true,
            ],
        ]);

        return view('category.index', compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            "kategori_product" => "string|required"
        ]);

        if($validation->fails()) {
        // dd($validation->errors());
        return redirect()->back()->withErrors($validation)->withInput();
        }
        
        DB::table('kategori')->insert([
            'kategori_product' => $request->kategori_product]);
        return redirect()->route("kategori.index");
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
        Kategori::where("id_kategori", $id)->delete();
        return redirect()->route("kategori.index");
    }
}
