<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_product');
            $table->integer('kategori_id')->unsigned();
            $table->integer('harga');
            $table->integer('keterangan_id')->unsigned();
            $table->integer('stok')->nullable();
            $table->string('date')->nullable();
            $table->string('color')->nullable();
            $table->string('image');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('product', function($table){
            $table->foreign('keterangan_id')->references('id_keterangan')->on('keterangan')
            ->onDelete('cascade');
        });
        Schema::table('product', function($table){
            $table->foreign('kategori_id')->references('id_kategori')->on('kategori')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
