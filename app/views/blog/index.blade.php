@section('head')
	<title>Camilia / Blog</title>
@stop

@section('header')
	@include('sections._slider_header')
@stop

@section('content')

<div class="row" id="posts">
<h3 style=" font-family: 'Archer-Medium'; text-align:center; font-size: 30px;color:#B39C64">BLOG</h3>
<hr>
@foreach($posts as $post)
		<div class="col-lg-12">
			<a href="/post/[[ str_replace(' ', '-', $post->title) ]]" class="title">
				<img src="[[ asset('img/posts/'.$post->image) ]]" alt="[[ $post->title ]]" class="img-responsive">
				<h1>[[ $post->title ]]</h1>
				<span class="date">[[ date_format($post->created_at, 'd/m/Y - H:i:s') ]] </span>
			</a>
		
		<p>[[ str_limit($post->description, $limit = 300, $end = '...') ]]</p>
		<hr>
		</div>
@endforeach
</div>

	[[$posts->links()]]
@stop