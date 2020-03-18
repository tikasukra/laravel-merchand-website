<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataProduct extends Model
{
    //
    use SoftDeletes;

    protected $table = "product";

    protected $fillable = [
    	"nama_product",
    	"kategori",
    	"harga",
    	"keterangan",
    	"stok",
    	"date",
    	"color1",
    	"image1",
    	"color2",
    	"image2",
    	"color3",
    	"image3",
    	"description"
    	];

    	public function kategori(){
    		return $this->belongsTo(
    			"App\Kategori", "kategori_product", "id_kategori"
    		);
    	}

    	public function keterangan(){
    		return $this->belongsTo(
    			"App\Keterangan", "keterangan_product", "id_keterangan");
    	}
}
