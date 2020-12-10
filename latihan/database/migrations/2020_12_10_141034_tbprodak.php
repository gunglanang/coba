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
        schema::create ('prodaks', function (Blueprint $tb){ 
        $tb->increments ('ID'); 
        $tb->string('NAMA',20);
        $tb->integer('QTY'); 
        $tb->double ('HARGA_BELI'); 
        $tb->double ('HARGA_JUAL'); 
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
        schema::dropIfExists ('prodaks');
    }
}