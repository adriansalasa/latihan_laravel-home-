<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('Nic');
                $table->string('nama_lengkap');
                $table->string('nama_panggilan');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('alamat');
                $table->string('createUser');
                $table->string('updateUser');
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
        Schema::dropIfExists('customers');
    }
}
