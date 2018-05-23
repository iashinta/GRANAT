<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('genre');
            $table->string('leader');
            $table->string('asal');
            $table->string('no_id');
            $table->string('riwayat');
            $table->string('profil');
            $table->string('lagu');
            $table->string('link');
            $table->string('logo');
            $table->string('no_telp');
            $table->enum('status', ['Belum Lunas','Sudah Lunas']);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
