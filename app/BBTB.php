<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BBTB extends Model
{
    protected $table = 'bbtb';

    protected $guarded = [];

    protected $fillable = ['tinggi_badan', 'min3sd', 'min2sd', 'min1sd', 'median', 'plus1sd', 'plus2sd', 'plus3sd'];
}
