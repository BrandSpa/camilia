@section('content')
	@foreach($posts as $post)
<div class="row" id="posts">
	
		<div class="col-lg-12">
			<h1><a href="/blog/[[ str_replace(' ', '-', $post->title) ]]">[[ $post->title ]]</a></h1>
			<a href="/admin/blog/[[ $post->id ]]/edit" class="btn btn-warning btn-xs">Editar</a>

			<form action="/admin/blog/[[ $post->id ]]" method="POST">
				<input type="hidden" name="_method" value="DELETE">
				<button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
			</form>

		<p>[[ str_limit($post->description, $limit = 300, $end = '...') ]]</p>
		<hr>
		</div>
		
	</div>
	@endforeach
@stop