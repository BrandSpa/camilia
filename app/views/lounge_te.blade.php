@section('head')
	<title>Camilia / El salón del té</title>
@stop

@section('header')
	@include('sections._slider_header')
@stop

@section('content')
	<div class="row">
	<div class="col-lg-12 intro">
		<p>
			Ven y conoce nuestro salón de té, un lugar único en el que podrás pasar un rato especial con amigos y familiares, degustando sabores de todo el mundo.
		</p>
	</div>
		
	</div>
	
	@include('sections._btn_boutique')
	@include('sections._btn_petit')
	<div class="more-space"></div>
	@include('sections._btns_mcs')
@stop