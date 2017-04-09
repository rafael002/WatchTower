<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    public function funct(){
		return $this->hasOne('App\Models\Funct');
	}
}
