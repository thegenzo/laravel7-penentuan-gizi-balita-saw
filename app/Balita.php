<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
    protected $table = 'balita';

    protected $fillable = ['id_balita', 'umur', 'berat_badan', 'tinggi_badan', 'imt', 'tbu', 'bbu', 'bbtb', 'imtu', 'status_tbu', 'bobot_tbu', 'status_bbu', 'bobot_bbu', 'status_bbtb', 'bobot_bbtb', 'status_imtu', 'bobot_imtu'];
    
    public function orangtua()
    {
        return $this->belongsTo('App\Orangtua', 'id_balita');
    }

    public function rekapan()
    {
        return $this->hasOne('App\Rekapan', 'id_balita');
    }
}
