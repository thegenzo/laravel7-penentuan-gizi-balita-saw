<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orangtua extends Model
{
    protected $table = 'orangtua';

    protected $fillable = ['id_user', 'nama_ibu', 'nama_balita', 'jenis_kelamin', 'no_hp', 'no_darurat', 'alamat'];

    // membuat relasi dengan tabel user
    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    // membuat relasi dengan tabel balita
    public function balita()
    {
        return $this->hasOne('App\Balita', 'id_balita');
    }
}
