@section('head')
	<title>Camilia / Admin</title>
@stop
@section('header')
<p></p>
@stop
@section('content')
<a href="/admin/posts/create" class="btn btn-success">Nuevo post</a>
	@foreach($posts as $post)
		<div class="row" id="posts">	
			<div class="col-lg-12">
				<a href="/post/[[ str_replace(' ', '-', $post->title) ]]" class="title">
					<img src="[[ asset('img/posts/'.$post->image) ]]" alt="[[ $post->title ]]" class="img-responsive">
					<h1>[[ $post->title ]]</h1>
				</a>
			<p>[[ str_limit($post->description, $limit = 350, $end = '...') ]]</p>
			<a href="/admin/posts/[[ $post->id ]]/edit" class="btn btn-warning">Editar</a>
			<div class="pull-right">
				[[ Form::open(array('url' => '/admin/posts/'.$post->id, 'method' => 'delete')) ]]
					<input type="submit" value="Eliminar" class="btn btn-danger">
				</form>
			</div>
			<div class="separator"></div>
			</div>
		</div>
	@endforeach

	[[$posts->links()]]
@stop