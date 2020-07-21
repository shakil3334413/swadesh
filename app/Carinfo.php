<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carinfo extends Model
{
    protected $table = 'carinfos';

    protected $fillable = [
        'model', 'number'
    ];
}
