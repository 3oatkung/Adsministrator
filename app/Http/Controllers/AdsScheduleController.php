<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AdsSchedule;
use Illuminate\Http\Request;
use App\User;
use App;

//use Request;

class AdsScheduleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct()
	{
		$this->middleware('auth');
		//parent::__construct();
	}

	public function index()
	{
		$adsArray = AdsSchedule::where('user_id', '=', \Auth::user()->getID())->get();
		// Filled for content_removed != 0
		//$notices = $this->user->notices()->where('content_removed',0)->get();
		return view('showAdsSchedule',compact('adsArray'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('createAdsinSchedule');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{	
	//	$notice = Notice::open($data);
		
	//	$notice->useTemplate($request->input('template'));
		//$ads = AdsSchedule::open($request);

		//$notice = $this->user->adsSchedule()->save($request);
		$ads = new App\AdsSchedule;
		$ads['ads_id'] = $request['ads_id'];
		$ads['user_id'] = \Auth::user()->getID();
		$ads['T01'] = $request['T01'];
		$ads['T02'] = $request['T02'];
		$ads['T03'] = $request['T03'];
		$ads['T04'] = $request['T04'];
		$ads['T05'] = $request['T05'];
		$ads['T06'] = $request['T06'];
		$ads['T07'] = $request['T07'];
		$ads['T08'] = $request['T08'];
		$ads['T09'] = $request['T09'];
		$ads['T10'] = $request['T10'];
		$ads['T11'] = $request['T11'];
		$ads['T12'] = $request['T12'];
		$ads['T13'] = $request['T13'];
		$ads['T14'] = $request['T14'];
		$ads['T15'] = $request['T15'];
		$ads['T16'] = $request['T16'];
		$ads['T17'] = $request['T17'];
		$ads['T18'] = $request['T18'];
		$ads['T19'] = $request['T19'];
		$ads['T20'] = $request['T20'];
		$ads['T21'] = $request['T21'];
		$ads['T22'] = $request['T22'];
		$ads['T23'] = $request['T23'];
		$ads->save();

		return redirect('/adsschedule/index');;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
