<?php

class BlogController extends BaseController{
	
	protected $layout = 'layouts.main';

	public function index()
	{
		$posts = Post::all();
		$this->layout->content = View::make('blog.index', compact('posts'));
	}

	public function show($title)
	{
		$_title = str_replace('-', ' ', $title);

		if ($_title) {
			$post = Post::where('title', $_title)->first();
			$this->layout->content = View::make('blog.show', compact('post'));
		}
	}
}