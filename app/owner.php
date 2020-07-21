<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'owners';

    protected $fillable = [
        'name', 'phone','bank_number','national_id','address','image'
    ];

    public function ownerbus(){
    	return $this->hasMany('App\OwnerBus');
    }
}
