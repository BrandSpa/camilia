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
		$posts = Post::orderBy('created_at', 'desc')->paginate(5);
		$this->layout->content = View::make('home', compact('posts'));
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

	public function linePetit()
	{
		$this->layout->content = View::make('line_petit');
	}

	public function contact()
	{
		$this->layout->content = View::make('contact');
	}

	public function chef()
	{
		$this->layout->content = View::make('the_chef');
	}

	public function te()
	{
		$this->layout->content = View::make('lounge_te');
	}


}