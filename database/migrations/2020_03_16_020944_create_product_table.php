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
            $table->increments('id_product');
            $table->string('nama_product');
            $table->integer('kategori')->unsigned();
            $table->integer('harga');
            $table->integer('keterangan')->unsigned();
            $table->integer('stok')->nullable();
            $table->string('date')->nullable();
            $table->string('color')->nullable();
            $table->string('image');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('keterangan')->references('id_keterangan')->on('keterangan')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('kategori')->references('id_kategori')->on('kategori')
            ->onDelete('restrict')
            ->onUpdate('cascade');
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
