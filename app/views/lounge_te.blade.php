@section('head')
<title>Camilia / El salón del té</title>
@stop

@section('header')

	<img src="[[ asset('img/salon-te/header.jpg') ]]" class="img-responsive">

@stop

@section('content')
<div class="row"></div>
<div id="line-boutique-gallery">
	<div class="row">
		<!-- top columns -->
		<div class="col-lg-4 col-md-4  section-left" >
			<img src="[[ asset('img/salon-te/1.jpg') ]]" class="img-responsive">
		</div>

		<div class="col-lg-4 col-md-8 gallery-text" >

			<h3>Salón de té</h3>
			<p>
				Ven y conoce nuestro salón de té, un lugar único en el que podrás pasar un rato especial con amigos y familiares, degustando sabores de todo el mundo.
			</p>
		</div>

		<div class="col-lg-4 col-md-4  section-right" >
			<img src="[[ asset('img/salon-te/3.jpg') ]]" class="img-responsive">

		</div>
		<!-- end top columns -->

		<!-- center columns -->
		<div class="col-lg-4 col-md-8 section-left gallery-text" >

		</div>

		<div class="col-lg-4 col-md-4	">
			<img src="[[ asset('img/salon-te/5.jpg') ]]" class="img-responsive">

		</div>

		<div class="col-lg-4 col-md-8 section-right gallery-text" >

		</div>
		<!-- end center columns -->
	</div>
</div>
@include('sections._contact')
@include('sections._btn_boutique')
@include('sections._btn_petit')
<div class="more-space"></div>
@include('sections._btns_mcs')
@stop