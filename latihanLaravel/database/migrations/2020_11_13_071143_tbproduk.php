<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbproduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //bagian restore data 
        schema::create ('tbKategori', function (Blueprint $tb){ 
            $tb->increments ('ID'); 
            $tb->string('KATEGOI',100); 
            $tb->string ('KETERANGAN',255); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('produks');
    }
}
