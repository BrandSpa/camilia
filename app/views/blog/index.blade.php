@section('header')
	@include('sections._slider_header')
@stop

@section('content')
@foreach($posts as $post)
<div class="row" id="posts">
	
		<div class="col-lg-12">
			<a href="/blog/[[ str_replace(' ', '-', $post->title) ]]"><img src="[[ $post->image ]]" alt="[[ $post->title ]]" class="img-responsive"></a>
			<h1><a href="/blog/[[ str_replace(' ', '-', $post->title) ]]">[[ $post->title ]]</a></h1>
		<p>[[ $post->description ]]</p>
		<hr>
		</div>
		
	</div>
	@endforeach
@stop