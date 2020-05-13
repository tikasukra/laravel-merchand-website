<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         DB::table('kategori')->insert(
            //  ['kategori_product'=>'Drinkware']
            //  ['kategori_product'=>'T-Shirt']
             ['kategori_product'=>'Totebag']
    	);
    }
}
