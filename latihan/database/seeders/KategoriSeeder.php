<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\kategoris;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        kategoris::create(
            ['ID'=>'01',
            'KATEGORI'=>'KEYBOARD',
            'KETERANGAN'=>'setandar, untuk gemer, untk pekerja, untuk desain'
        ]);
        kategoris::create(
            [
                'ID'=>'02',
                'KATEGORI'=>'MOUSE',
                'KETERANGAN'=>'standar sdgemer, , desain'
            ]
        );
        kategoris::create(
            [
                'ID'=>'03',
                'KATEGORI'=>'FLASHDISK',
                'KETERANGAN'=>'KINGSTONE 32GB, KINGSTONE 4GB, SANDISK 8GB, HP 16GB'          
            ]
        );
    }
}