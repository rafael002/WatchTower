<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
	
	// this model belongs to a congregation
    public function congregations(){
		return $this->belongsToMany('App\Models\Congregation');
	}
	
	// And has ONE date
    public function (){
		return $this->hasOne('App\Models\Day');
	}

}
