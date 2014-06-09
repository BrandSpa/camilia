@section('head')
	<title>Camilia / Blog</title>
@stop

@section('header')
	@include('sections._slider_header')
@stop

@section('content')
<div class="row" id="posts">
@foreach($posts as $post)
		<div class="col-lg-12">
			<a href="/post/[[ str_replace(' ', '-', $post->title) ]]" class="title">
				<img src="[[ asset('img/posts/'.$post->image) ]]" alt="[[ $post->title ]]" class="img-responsive">
				<h1>[[ $post->title ]]</h1>
			</a>
		<p>[[[ str_limit($post->description, $limit = 300, $end = '...') ]]]</p>
		<hr>
		</div>
@endforeach
</div>

	[[$posts->links()]]
@stop