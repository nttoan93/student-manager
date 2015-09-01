<?php namespace App\Http\Controllers;

use App\Http\Requests\DantocRequest;

class AdminController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.homead');
	}
	public function themgiaovien()
	{
		return view('admin.adthemgiaovien');
	}
	public function quanlidantoc()
	{
		return view('admin.adqldt');
	}

public function quanlidantocpost()
	{
		
	}

	public function quanlitongiao()
	{
		return view('admin.adqltg');
	}
	public function capnhatgiaovien()
	{
		return view('admin.adcngiaovien');
	}

}
