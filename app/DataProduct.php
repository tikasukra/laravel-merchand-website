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
    	"kategori_id",
    	"harga",
    	"keterangan_id",
    	"stok",
    	"date",
    	"color",
    	"image",
    	"description"
    	];

    	public function kategori(){
    		return $this->belongsTo(
    			"App\Kategori", "kategori_id", "id_kategori");
    	}

    	public function keterangan(){
    		return $this->belongsTo(
    			"App\Keterangan", "keterangan_id", "id_keterangan");
    	}
}
