<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\prodaks;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        prodaks::create(
            ['ID'=>'01',
            'NAMA'=>'LOGITECH',
            'HARGA_JUAL'=>'1000000',
            'HARGA_BELI'=>'800000'
        ]);
        prodaks::create(
            [
                'ID'=>'02',
                'NAMA'=>'LOGITECH WIRELESS',
                'HARGA_JUAL'=>'100000',
                'HARGA_BELI'=>'70000'
            ]
        );
        prodaks::create(
            [
                'ID'=>'03',
                'NAMA'=>'KINGSTONE 32GB',
                'HARGA_JUAL'=>'60000',
                'HARGA_BELI'=>'40000'                
            ]
        );
    }
}