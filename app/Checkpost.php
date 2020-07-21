<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkpost extends Model
{
    //
    protected $table = 'checkposts';
    protected $fillable = [
        'name'
    ];
}
