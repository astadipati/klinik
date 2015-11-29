<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableHobi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


    Schema::create('hobi', function (Blueprint $table)
    {
        $table -> increments ('id');
        $table -> string ('hobi');
        $table -> integer ('anggota_id');
        $table -> timestamps ();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hobi');
    }
}
