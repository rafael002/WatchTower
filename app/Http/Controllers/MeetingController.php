<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Meeting;

class MeetingController extends Controller
{
    public function register(){
		return view('');
	}
	
	public function create( Request $request, Meeting $meeting ){
		//return view();
		
		$meeting->name = $request->get('name');
		$meeting->name = $request->get('congregation_id');
		$meeting->name = $request->get('days_id');

		$meeting->save();
	}
	
	public function delete( Request $request ){
		//colocar o retorno
		
		 $meeting = Meeting::where('id', '=', $request->get('id'))
		->first();
		
		if( $meeting != null ){			
			$meeting->delete();
		}
		
	}
	
	// retrives a 
	public function update( Request $request ){
		return view();
		
		$meeting = Meeting::where('id', '=', $request->get('id'))
		->first();
		
		if( $meeting != null ){
			$meeting->name = $request->get('name');
			$meeting->name = $request->get('congregation_id');
			$meeting->name = $request->get('days_id');
			
			$meeting->save();
		}
		//colocar o retorno
	}
}
