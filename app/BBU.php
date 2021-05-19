<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BBU extends Model
{
    protected $table = 'bbu';

    protected $guarded = [];

    protected $fillable = ['umur', 'min3sd', 'min2sd', 'min1sd', 'median', 'plus1sd', 'plus2sd', 'plus3sd'];
}
