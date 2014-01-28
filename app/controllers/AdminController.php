<?php

class AdminController extends \BaseController {

    public function getIndex() {
	if( !Auth::check() ) {
	    // must be logged in
	    Session::flash('msg','You must be logged in to view /admin');
	    return Redirect::to('/auth');
	}
	return View::make('admin');
    }

}
