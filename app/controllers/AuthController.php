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
		$creds = array(
			       'username' => Input::get('username'),
			       'password' => Input::get('password')
			       );
		if( Auth::attempt($creds) ) {
		    // login!
		    return View::make('login', ['show'=>'success']);
		} else {
		    Session::flash('msg', 'Bad Login: Invalid username or password');
		    return View::make('login', ['show'=>'fail']);
		}
	    } else {
		// bad/no input
		Session::flash('msg', 'Bad Login Attempt');
		return View::make('login', ['show'=>'form']);
	    }
	}

	public function getLogout() {
	    if( Auth::check() ) {
		Auth::logout();
		Session::flash('msg', 'You are logged out of the system');
		return View::make('login', ['show'=>'form']);
	    } else {
		Session::flash('msg', 'You are already logged out');
		return View::make('login', ['show'=>'form']);
	    }
	}

}