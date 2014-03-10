@section('head')
<title>Camilia / línea Petit</title>
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

<div class="row">
	<div class="col-lg-4 img-container">
		<img src="[[ asset('img/img-title-lp.svg') ]]" class="img-responsive">
	</div>
	<div class="flexslider section-slider col-lg-8">
		<ul class="slides">
			<li>
				<img src="[[ asset('img/boutique/1.png') ]]" />
			</li>
			<li>
				<img src="[[ asset('img/boutique/1.png') ]]" />
			</li>
		</ul>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 intro">
		<p>
			Para eventos, reuniones corporativas o con los amigos, para un cumpleaños, primera comunión, bautizo, fechas especiales y matrimonios. 
Postres para deleitar a tus invitados. Pequeños bocados de los más exquisitos sabores, hechos a base de frutas, cremas y chocolates. El detalle que hará de tus eventos, los más recordados.
		</p>
	</div>
</div>

<div id="line-boutique-gallery">
	<div class="row">
		@include('products_petit')
	</div>
</div>

<div class="row">
	<div class="col-lg-4 section-left">
		<a href="/me-quiero-casar">
			<span class="section-icon"></span>
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

	<div class="col-lg-4">
		<a href="/busco-catering">
			<span class="section-icon icon-catering"></span>
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

	<div class="col-lg-4 section-right">
		<a href="/quiero-compartir">
			<span class="section-icon icon-share"></span>
			<div class="section">
				<div class="btn-section">
					<h2>Quiero Compartir</h2>
					<p>CUMPLEAÑOS - FAMILIAS</p>
					<div class="divider-sm"></div>
					<h3>EL SELLO DULCE Y EXCLUSIVO DE TUS MEJORES MOMENTOS</h3>
				</div>
			</div>
		</a>
	</div>
</div>

@stop