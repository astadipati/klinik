<?php

use Illuminate\Database\Seeder;
class SeederTableAnggota extends Seeder{

    public function run (){

        //kosongkan db
        DB::table ('anggota') -> delete();

        //buat data berupa array
        $anggota = array ('id' => 1 , 'nama' => 'rama', 'alamat' => 'tuban');

        //masukkan ke db
        DB::table ('anggota') -> insert ($anggota);
    }
}
