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

<div class="row">
	<div class="col-lg-4 img-container">
		<img src="[[ asset('img/img-title-lb.svg') ]]" class="img-responsive">
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
		<p>Conoce nuestra Línea Boutique para poner el broche de oro a esos momentos
 <br class="hidden-xs hidden-sm">que ameritan el mejor y más exclusivo sabor.</p>
	</div>
</div>

<div id="line-boutique-gallery">
	<div class="row">
		<div class="col-lg-4  section-left" >
			<img src="[[ asset('img/img-lb-1.png') ]]">
			<span class="arrow-bottom"></span>
		</div>

		<div class="col-lg-4 col-md-8 gallery-text" >
			<h3>SAINT HONORE</h3>
			<p>
				El dulce es uno de los cinco sabores básicos y de los únicos que es aceptado de manera global por todas las culturas
			</p>
		</div>

		<div class="col-lg-4  section-right" >
			<img src="[[ asset('img/img-lb-2.png') ]]" alt="">
			<span class="arrow-left hidden-sm hidden-xs"></span>
				<span class="arrow-bottom hidden-lg"></span>
		</div>



		<div class="col-lg-4  section-left gallery-text" >
			<h3>SAINT HONORE</h3>
			<p>
				El dulce es uno de los cinco sabores básicos y de los únicos que es aceptado de manera global por todas las culturas
			</p>
		</div>
		<div class="col-lg-4 hidden-md hidden-sm hidden-xs">
			<img src="[[ asset('img/img-lb-3.png') ]]" alt="">
		</div>
		<div class="col-lg-4 section-right gallery-text" >
			<h3>SAINT HONORE</h3>
			<p>
				El dulce es uno de los cinco sabores básicos y de los únicos que es aceptado de manera global por todas las culturas
			</p>
		</div>


		<div class="col-lg-4" >
			<img src="[[ asset('img/img-lb-4.png') ]]" alt="">
			<span class="arrow-right hidden-sm hidden-xs"></span>
			<span class="arrow-top hidden-lg"></span>
		</div>

		<div class="col-lg-4 gallery-text">
			<h3>SAINT HONORE</h3>
			<p>
				El dulce es uno de los cinco sabores básicos y de los únicos que es aceptado de manera global por todas las culturas
			</p>
		</div>

		<div class="col-lg-4" >
			<img src="[[ asset('img/img-lb-5.png') ]]" alt="">
			<span class="arrow-top"></span>
		</div>
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