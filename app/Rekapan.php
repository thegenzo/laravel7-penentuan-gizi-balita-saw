<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekapan extends Model
{
    protected $table = 'rekapan';

    public function balita()
    {
        return $this->belongsTo('App\Balita', 'id_balita');
    }
}
