<?php

use Illuminate\Database\Seeder;

class KeteranganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('keterangan')->insert([
        	'keterangan_product'=>'Ready Stock'
        ]);
    }
}
