@section('head')
	<title>Camilia / El chef</title>
@stop

@section('header')
	@include('sections._slider_header')
@stop

@section('content')
	<div class="row">
	<div class="col-lg-6 intro">
		<p style="text-align:left">
			La Chef María Camila Baquero, ha recorrido el mundo buscando que cada bocado sea toda una experiencia. Sabores y texturas de diferentes culturas harán que los sentidos nos lleven a lugares inimaginables a través de su pasteleria.
		</p>
		<ul>
			<li>2013. Le Cordon Bleu · Chef</li>
			<li>2010. Universidad de los andes · Ingeneria Industrial</li>
		</ul>
	</div>

		<div class="col-lg-6">
			<img src="[[ asset('img/chef.jpg') ]]" class="img-responsive">
		</div>
		
	</div>
	
	@include('sections._btn_boutique')
	@include('sections._btn_petit')
	<div class="more-space"></div>
	@include('sections._btns_mcs')
@stop