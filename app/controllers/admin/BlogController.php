<?php namespace Admin;

use View;
use Post;
use Redirect;
class BlogController extends \BaseController {

	protected $layout = 'layouts.main';
	
	public function index(){
		
	}

	public function create()
	{
		$posts = Post::all();
		$this->layout->content = View::make('admin.blog.create', compact('posts'));
	}

	public function edit($id)
	{
		$post = Post::find($id);
		$this->layout->content = View::make('admin.blog.edit');
	}

	public function destroy($id)
	{
		return Redirect::to('/admin/blog');
	}
}