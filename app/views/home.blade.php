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
					<img src="[[ asset('img/header-slider/1.jpg') ]]" />
				</li>
			</ul>
		</div>
	</div>
@stop

@section('content')
	<!-- intro home -->
	<div class="row">
		<div class="col-lg-12 intro">
			<p>Aquí trabajamos con mucho cariño para poner el broche de oro a esos momentos que ameritan <br class="hidden-xs hidden-sm">el mejor y más exclusivo sabor.</p>
		</div>
	</div>
	<!-- end intro home -->
	@include('sections._btns_mcs')
	@include('sections._btn_boutique')
	@include('sections._btn_petit')
	@include('sections._btns_ct')
	@include('sections._contact')
@stop