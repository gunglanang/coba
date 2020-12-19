<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TarifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbtarif')->insert([
			[
				'daya'			=>	'500',
				'tarif_perkwh'	=>	'12000',
				'beban'			=>	'500'
			],
			[
				'daya'			=>	'1500',
				'tarif_perkwh'	=>	'40000',
				'beban'			=>	'1000'
			]
		]);
    }
}
