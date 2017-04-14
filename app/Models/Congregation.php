<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Congregation extends Model
{
	
	//gets all meetings of a congregation
	
    public function meetings(){
		
		return $this->hasMany('App\Models\Meeting');
	
	}
}
