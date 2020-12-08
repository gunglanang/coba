<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbprodak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //bagian restore data 
		schema::create ('produks', function (Blueprint $tb){ 
		$tb->increments ('ID'); 
		$tb->string('NAMA',20);
        $tb->string('KATEGORI',100);
		$tb->integer ('ID_KATEGORI');
        $tb->integer('QTY'); 
		$tb->float ('HARGA_BELI'); 
		$tb->float ('HARGA_JUAL'); 
		$tb->timestamps(); 
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //bagian drop data 
		schema::dropIfExists ('produksi');
    }
}
