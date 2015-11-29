<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    //
    protected $table = 'hobi';
    protected $fillable = ['hobi','anggota_id'];

    public function anggota()
    {
    	return $this -> belongsTo ('App\Anggota');
    }
}
