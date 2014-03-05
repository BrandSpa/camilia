<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	protected $layout = 'layouts.main';

	public function showHome()
	{
		$this->layout->content = View::make('home');
	}

	public function wantToMarry()
	{
		$this->layout->content = View::make('i_want_to_marry');
	}

	public function searchCatering()
	{
		$this->layout->content = View::make('search_catering');
	}

	public function wantToShare()
	{
		$this->layout->content = View::make('want_to_share');
	}

		public function lineBoutique()
	{
		$this->layout->content = View::make('line_boutique');
	}
}