<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbtagihan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->unsigned();
            $table->string('bill_year');
            $table->string('bill_month');
            $table->string('bill_kwhusage');
            $table->double('bill_total');
            $table->string('bill_status');
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('tbpelanggan')->onUpdate('cascade')
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
        Schema::dropIfExists('tagihan');
    }
}
