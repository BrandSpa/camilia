@section('head')
<title>Camilia / Busco catering</title>
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
<div class="space"></div>
<div class="row">
	<div class="col-lg-12">
		<span class="intro-icon"></span>
		<div class="intro-border-outside">
			<div class="intro-border-inside">
				<div class="row">
					<div class="col-lg-4">
						<h2>Quiero Compartir</h2>
						<p>CUMPLEAÑOS - FAMILIAS</p>
						<div class="divider-sm"></div>
						<h3>EL SELLO DULCE Y EXCLUSIVO DE TUS MEJORES MOMENTOS</h3>
					</div>
					<div class="col-lg-8 section-right">
						<img src="[[ asset('img/section-mqc.png') ]]" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 text-section">
		<p>
		Haz de esa celebración un momento realmente inolvidable, un cumpleaños, un festejo, un grado, cualquier motivo es bueno para acercarnos a la gente que queremos y viajar juntos por los mejores sabores, contáctanos y te daremos ideas sorprendentes.
		</p>
	</div>
	</div>

	@include('sections._contact')
	@include('sections._btn_boutique')
	@include('sections._btn_petit')

<div class="more-space"></div>
	<div class="row">
		<div class="col-lg-6 section-left">
			<a href="/me-quiero-casar">
				<span class="section-icon icon-catering"></span>
				<div class="section">
					<div class="btn-section">
						<h2>Me Quiero Casar</h2>
						<p>COMPROMISOS - BODAS</p>
						<div class="divider-sm"></div>
						<h3>EL SELLO DULCE Y EXCLUSIVO DE TU HISTORIA DE AMOR</h3>
					</div>
				</div>
			</a>
		</div>

		<div class="col-lg-6 section-right">
			<a href="/busco-catering">
				<span class="section-icon icon-share"></span>
				<div class="section">
					<div class="btn-section">
						<h2>Busco Catering</h2>
						<p>HOTELES - EMPRESAS</p>
						<div class="divider-sm"></div>
						<h3>EL SELLO DULCE Y EXCLUSIVO DE UN SERVICIO EXCEPCIONAL</h3>
					</div>
				</div>
			</a>
		</div>
	</div>

	@include('sections._btns_ct')

	@stop