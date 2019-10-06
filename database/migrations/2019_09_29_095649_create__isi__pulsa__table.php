<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIsiPulsaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_isi__pulsa_', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('No_Telp');
            $table->string('Nm_Rek');
            $table->string('Nm_Pemilik');
            $table->string('Nm_Paket');
            $table->string('Hrg_Paket');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_isi__pulsa_');
    }
}
