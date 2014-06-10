@section('head')
<title>Camilia Blog / [[ $post->title ]]</title>
@stop
@section('header')
<div class="title">
		<img src="[[ asset('img/posts/'.$post->image) ]]" alt="[[ $post->title ]]" class="img-responsive">
		<h1>[[ $post->title ]]</h1>
</div>
@stop

@section('content')
<div class="row">
		<div class="col-lg-12 post">
			[[$post->description ]]
			<div class="fb-like" data-href="http://camilia.co/blog/[[ str_replace(' ', '-', $post->title) ]]" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
			<hr>
		</div>
</div>

@stop