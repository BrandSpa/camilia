<?php namespace Admin;

use View;

class BlogController extends \BaseController {

	protected $layout = 'layouts.main';
	
	public function index(){
		
	}

	public function create()
	{
		$this->layout->content = View::make('admin.blog.create');
	}	
}