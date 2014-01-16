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
	    $data = array('show' => 'success');
	    return View::make('index', $data);
	}

}