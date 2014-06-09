<?php namespace Admin;

use Post;
use View;
use Input;

class PostsController extends \BaseController {
	protected $layout = 'layouts.main';
	/**
	 * Display a listing of the resource.
	 * GET /admin/posts
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::orderBy('created_at', 'desc')->paginate(5);
		$this->layout->content = View::make('admin.posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admin/posts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('admin.posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admin/posts
	 *
	 * @return Response
	 */
	public function store()
	{
		$destinationPath = public_path().'/img/posts/';
		$image = Input::file('image');
		$fileName =  str_random(40).'.'.$image->getClientOriginalExtension();
		$upload = $image->move($destinationPath,  $fileName);
		$data = [
			'image' => $fileName,
			'title' => Input::get('title'),
			'description' => Input::get('description')
		];

		Post::create($data);
	}

	/**
	 * Display the specified resource.
	 * GET /admin/posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /admin/posts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		$this->layout->content = View::make('admin.posts.edit' , compact('post'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /admin/posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$post = Post::find($id);
		$fileName = $post->image;

		if (Input::hasFile('image')) {
			$destinationPath = public_path().'/img/posts/';
			$image = Input::file('image');
			$fileName =  str_random(40).'.'.$image->getClientOriginalExtension();
			$upload = $image->move($destinationPath,  $fileName);
		}

		$post->image = $fileName;
		$post->title = Input::get('title');
		$post->description = Input::get('description');
		$post->save();

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /admin/posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
	}

}