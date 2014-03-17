@section('head')
	<title>Camilia</title>
@stop

@section('header')
	<div class="main-slider">
		<div class="flexslider ">
			<img src="[[  asset('img/logo.svg') ]]" class="logo-slider visible-lg visible-md">
			<ul class="slides">
				<li>
					<img src="[[ asset('img/header-slider/1.jpg') ]]" />
				</li>
				<li>
					<img src="[[ asset('img/header-slider/2.jpg') ]]" />
				</li>
				<li>
					<img src="[[ asset('img/header-slider/8.jpg') ]]" />
				</li>
			</ul>
		</div>
	</div>
@stop

@section('content')
	<!-- intro home -->
	<div class="row">
		<div class="col-lg-12 intro">
			<h1>¿Qué es Trip Trip Trip Patisserie?</h1>
			<p>Es viajar con cada bocado. Descubrir sabores de todo el mundo y de todas las épocas.<br class="hidden-xs hidden-sm"> Un recorrido nuevo en cada sabor, aroma y textura.</p>
		</div>
	</div>
	<!-- end intro home -->
	
	@include('sections._btns_mcs')
	@include('sections._btn_boutique')
	@include('sections._btn_petit')
	@include('sections._btns_ct')
	@include('sections._contact')
	<script>
		$('.summernote').summernote({
			toolbar: [
    //['style', ['style']], // no style button
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    //['insert', ['picture', 'link']], // no insert buttons
    //['table', ['table']], // no table button
    //['help', ['help']] //no help button
    ]
});
	</script>
@stop