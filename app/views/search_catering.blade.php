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
						<h2>Busco Catering</h2>
						<p>HOTELES - EMPRESAS</p>
						<div class="divider-sm"></div>
						<h3>EL SELLO DULCE Y EXCLUSIVO DE UN SERVICIO EXCEPCIONAL</h3>

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
		<p>PUEDES CONTACTARNOS Y VISITAR NUESTRO SALÓN DE TÉ, ALLÍ TE INVITAREMOS UNA DEGUSTACIÓN DE NUESTROS PRODUCTOS PARA MATRIMONIO,
O SIMPLEMENTE LLÁMANOS Y CUÉNTANOS TU HISTORIA, TUS GUSTOS Y LOS DE TU PAREJA, PARA ASÍ CREAR JUNTOS ALGO INCREÍBLE PARA TU BODA.</p>
	</div>
</div>
<div class="row">
	<div class="col-lg-6 section-left">
		<h4 class="title-contact">Envíanos un Mensaje</h4>
		<form action="#" class="form-contact">
			<div class="form-group">
				<input type="text" name="name" class="form-control" placeholder="Nombre">
			</div>
			<div class="form-group">
				<input type="text" name="mail" class="form-control" placeholder="Mail">
			</div>
			<div class="form-group">
				<textarea name="message" class="form-control" rows="3" placeholder="Mensaje"></textarea>
			</div>
			<a href="#" class="btn-contact">Enviar</a>
		</form>
	</div>
	<div class="col-lg-6 section-right">
		<div class="contact">
			<span>CELULAR<br> (+57) 320 875 8452</span>
			<span>MAIL<br> avilla@camilia.co</span>
			<span>DIRECCIÓN<br> Carrera 22 A # 87 - 72 / BOGOTÁ - COLOMBIA</span>
		</div>
		<ul class="social">
			<li><a href="http://twitter.co" class="btn-tw"></a></li>
			<li><a href="http://facebook.com" class="btn-fb"></a></li>
		</ul>
	</div>
</div>


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

<div class="row more-space">
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
<div class="row">
	<div class="col-lg-6 section-left">
		<a href="#" class="btn-chef"><span>Camilia · El Chef</span></a>
	</div>
	<div class="col-lg-6 section-right">
		<a href="#" class="btn-te"><span>El Salón de Té</span></a>

	</div>
</div>


<img src="[[ asset('img/logo-footer.png') ]]" alt="camilia logo" class="footer-logo">
@stop