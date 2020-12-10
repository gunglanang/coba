<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbkategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //bagian restore data
        schema::create('kategoris', function(Blueprint $tb){
            $tb->increments('ID');            
            $tb->string('KATEGORI',100);
            $tb->string('KETERANGAN');
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
        schema::dropIfExists('kategoris');
    }
}
