@section('head')
<title>Camilia / línea Boutique</title>
@stop

@section('header')
<div class="main-slider">

	<div class="flexslider main-slider">
		<img src="[[ asset('img/logo-section.svg') ]]" class="logo-section-slider">
		<ul class="slides">
			<li>
				<img src="[[ asset('img/header.png') ]]" />
			</li>
			<li>
				<img src="[[ asset('img/header.png') ]]" />
			</li>
		</ul>
	</div>
</div>
@stop
@section('content')

@include('sections._btn_boutique')

<div class="row">
	<div class="col-lg-12 intro">
		<p>Postres elaborados para sorprender y degustar. Ideales para compartir, <br class="hidden-xs hidden-sm">pueden ser un detalle especial o simplemente tuyo y de nadie más. <br class="hidden-xs hidden-sm">
Deliciosas combinaciones de sabores y texturas. <br class="hidden-xs hidden-sm">Tómate tu tiempo para disfrutar los mejores sabores del mundo. <br class="hidden-xs hidden-sm">Postres para varios o para uno, siempre encontrarás el adecuado para ese momento especial.
</p>
	</div>
</div>

<div id="line-boutique-gallery">
	<div class="row">
		@include('products_boutique')
	</div>
</div>

@include('sections._btns_mcs')

@stop