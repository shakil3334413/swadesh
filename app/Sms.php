<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
    public function owners(){
    	return $this->belongsTo('App\Owner');
    }
    public function ownerbuses(){
    	return $this->belongsTo('App\OwnerBus');
    }
}
