<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    //
  protected $table='counters';
  protected $fillable = [
        'counter_name','shift'
    ];
}
