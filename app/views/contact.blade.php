@section('head')
<title>Camilia / Contacto</title>
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
	@include('sections._contact')
@stop