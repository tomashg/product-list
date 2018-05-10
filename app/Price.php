<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    //
    protected $fillable = [
        'net_price','total_price',
    ];

}
