<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Activity;

class ActivityController extends Controller
{
	// retrieves data from request, create and save a new activity on database
	
    public function create( Request $request, Activity $activity ){
		
		$activity->name = $request->get('name');
		$activity->description = $request->get('description');
		$activity->save();
		
	}
	
	// receives an id and delete the activity on database
	public function delete( Request $request ){
		
		$activity = Activity::where('id', '=', $request->id )->first();
		
		$activity->delete();
		
	}
	
	// update data of an activity already regitered
	public function update( Request $request ){
		
		$activity = Activity::where( 'id', '=', $request->id )->first();
		
		$activity->name = $request->get('name');
		
		$activity->description = $request->get('description');
		
		$activity->save();
		
	}
	
}
