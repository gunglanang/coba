<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelangganTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbpelanggan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tarif_id')->unsigned();
            $table->integer('meter_no');
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->timestamps();
            $table->foreign('tarif_id')->references('id')->on('tbtarif')->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbpelanggan');
    }
}
