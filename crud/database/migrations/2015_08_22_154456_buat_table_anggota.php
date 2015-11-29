<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableAnggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table){
            $table -> increments('id');
            $table -> string ('nama');
            $table -> string ('alamat'); 
            $table -> timestamps();
        });
        return "tabel anggota telah dibuat";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop ('anggota');
    }
}
