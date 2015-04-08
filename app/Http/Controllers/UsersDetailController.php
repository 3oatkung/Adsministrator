<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UsersDetail;
use Illuminate\Http\Request;



class UsersDetailController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		return view('addDetail');
	}

	public function save()
	{
		/*$usersdetail = new App\UsersDetail;
		$usersdetail->id = \Auth::user()->getId();
		$usersdetail->role = 'Admin';
		$usersdetail->facebook_token = 'facebook token abcd';
		$usersdetail->save();
		return 'hippo';*/
		$usersdetail = [];
		$usersdetail['facebook_token'] = 'facebook token abcd';
		$usersdetail['role'] = 'admin';
		\Auth::user()->usersDetail()->save(UsersDetail::open($usersdetail));
		return 'success';
	 
	}

}
