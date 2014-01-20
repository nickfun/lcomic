<?php

class AuthController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		//
	    return View::make('login', ['show' => 'form']);
	}

	public function postLogin() {
	    if( Input::has('username','password') ) {
		$user = Input::get('username');
		$pass = Input::get('password');
		$oUser = User::where('username','=',$user);
		Session::flash('message', 'Login Success');
		print_r($oUser);
		return View::make('login', ['show'=>'success']);
	    } else {
		Session::flash('message','Login Failed');
		return View::make('login', ['show'=>'fail']);
	    }
	}

}