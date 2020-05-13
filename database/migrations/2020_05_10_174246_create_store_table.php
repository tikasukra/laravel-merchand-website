<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store', function (Blueprint $table) {
            $table->increments('id_store');
            $table->integer('owner_id')->unsigned();
            $table->string('store_name');
            $table->string('store_description');
            $table->timestamps();
        });
        Schema::table('store', function ($table) {
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
               });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store');
    }
}
