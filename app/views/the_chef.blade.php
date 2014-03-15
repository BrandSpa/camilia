@section('head')
<title>Camilia / El chef</title>
@stop

@section('header')
@include('sections._slider_header')
@stop

@section('content')
<div class="row section-msc">
	<div class="col-lg-6 section-left intro intro-chef">
	<h3>CHEF</h3>
		<p style="border-bottom:1px solid #000; padding-bottom:15px">
			La Chef María Camila Baquero, ha recorrido el mundo buscando que cada bocado sea toda una experiencia. Sabores y texturas de diferentes culturas harán que los sentidos nos lleven a lugares inimaginables a través de su pastelería.
		</p>
		<ul>
			<li>2012. Le Cordon Bleu Paris, Grand Diplôme</li>
			<li>2011. Ingeniera Industrial Universidad de los Andes Bogotá</li>
		</ul>
	</div>

	<div class="col-lg-6 section-right">
		<img src="[[ asset('img/chef.jpg') ]]" class="img-responsive">
	</div>
	<div class="col-lg-12 no-padding">
		<div class="contact-section">
			<span>CELULAR (+57) 320 875 8452 ·</span>
			<span>MAIL avilla@camilia.co ·</span>
			<span>DIRECCIÓN Carrera 22 A # 87 - 72 / BOGOTÁ - COLOMBIA</span>
		</div>
		<ul class="social-section">
			<li><a href="http://twitter.com" class="btn-tw" target="new"></a></li>
			<li><a href="http://facebook.com" class="btn-fb" target="new"></a></li>
		</ul>
	</div>
</div>

@include('sections._btn_boutique')
@include('sections._btn_petit')
<div class="more-space"></div>
@include('sections._btns_mcs')
@stop