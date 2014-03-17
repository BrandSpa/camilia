@section('head')
<title>Camilia / [[ $post->title ]]</title>
@stop

@section('header')
<img src="[[ $post->image ]]" alt="[[ $post->title ]]" class="img-responsive" style="width:100%">
@stop

@section('content')

<div class="row" id="posts">
	
		<div class="col-lg-12">
			<h1>[[ $post->title ]]</h1>
		<p> [[ str_limit($post->description, $limit = 150, $end = '...') ]]</p>
		<div class="fb-like" data-href="http://camilia.co/blog/[[ str_replace(' ', '-', $post->title) ]]" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
		<hr>
		</div>
		
	</div>

@stop