<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//=======crud start=============//

Route::resource('anggota','AnggotaController');
Route::resource('anggota.hobi','HobiController');
//=======crud end=============//

Route::get('/', function () {
    return view('welcome');
});


Route::get ('/halamanku', function(){
return '<h1> Halo </h1>'.
		'Selamat Datang di aplikasi surat saya <br>'.
		'Baru Belajar nih Semangat';
});

Route::get('/cobamodel' , function(){
	$anggota = App\Anggota::all() -> first();
		echo $anggota -> nama;
		echo $anggota -> alamat;

});

//tampil pencarian
Route::get('/cobamodel2' , function(){
	$anggota = App\Anggota::where ('nama','=','astadinata') -> first();
		echo $anggota -> id.'';
		echo $anggota -> nama;

});

//tampil semua
Route::get('/cobamodel3' , function(){
	$anggota = App\Anggota::all();
	foreach ($anggota as $list) {
		echo $list -> nama;
		echo $list -> alamat;
	}
});

//tambah data
Route::get('/cobamodel4', function(){
	$anggota = new App\Anggota;
	$anggota -> nama = 'kenshin';
	$anggota -> alamat = 'tuban';
	$anggota -> save();
});
//update data
Route::get('/cobamodel5', function(){
	$anggota = App\Anggota::find (2); //cari berdasarkan id
	$anggota -> nama = 'edy';
	$anggota -> alamat = 'silicon valley';
	$anggota -> save();
});

//delete data
Route::get ('cobamodel6', function (){
	$anggota = App\Anggota::find (2);
	$anggota -> delete();
});

//=========================================sniff=============================//
//relasi
Route::get ('/relasi', function()
{
//temukan data anggota yang bernama
	$anggota = App\Anggota :: where ('nama','=','rama') -> first();
	echo $anggota -> nama .' '.'hobinya :' ;
	//tampilkan seluruh data hobinya
	foreach ($anggota -> hobi as $list) {
		echo '<li>'. $list -> hobi ;
	}
});