<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Congregation;

class CongregationController extends Controller
{
    public function register(){
		return view('');
	}
	
	public function create( Request $request, Congregation $Congregation ){
		
		$Congregation->name = $request->get('name');

		$meeting->save();
	}
	
	public function delete( Request $request ){
		 $Congregation = Meeting::where('id', '=', $request->get('id'))
		->first();
		
		if( $Congregation != null ){			
			$Congregation->delete();
		}
		
		//colocar o retorno
		
	}
	
	
	// retrives a 
	public function update( Request $request ){
		return view();
		
		$Congregation = Meeting::where('id', '=', $request->get('id'))
		->first();
		
		if( $Congregation != null ){
			$Congregation->name = $request->get('name');
			
			$Congregation->save();
		}
		//colocar o retorno
	}
}
