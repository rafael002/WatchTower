<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Indicator;

class IndicatorController extends Controller
{
	// return register view
    public function register(){
		return view('cadastro');
	}
	
	
	//save
	//retrieves data from indicator form in register view and save in database
	
	public function save( Request $request, Indicator $indicator ){
		
		$indicator->givenName = $request->get('name');
		$indicator->lastName  = $request->get('lastName');
		$indicator->email     = $request->get('email');
		$indicator->telephone = $request->get('telephone');
		$indicator->cellphone = $request->get('cellphone');
		
		$indicator->funct_id = $request->get('function');
		
		$indicator->save();
		
	}
	
	//list
	//get data from database and list in blade listIndicator
	
	public function listIndicator(){
		
		$indicators = Indicator::orderBy('indicators.givenName','desc')->paginate(10);
		
		return view('listIndicator')->with( 'indicators',  $indicators );
		
	}
}
