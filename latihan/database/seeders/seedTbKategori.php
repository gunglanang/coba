<?php

use Illuminate\Database\Seeder;

class seedTbKategori extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbkategori')->insert(array(
        	[
        		'KATEGOI' => "Keyboard", 
				'KETERANGAN' => "Segala Macam keyboard PC,Laptop, TV"
        	],[
        		'KATEGOI' => "Mouse", 
				'KETERANGAN' => "Segala Macam Wire maupun Wireless"
        	],[
        		'KATEGOI' => "Flashdisk", 
				'KETERANGAN' => "Segala Macam Merek,ukuran Flashdisk"
        	]
        ));
    }
}
