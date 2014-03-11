<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="favicon.png" type="image/png" />
	@section('head')
	@show

	@section('styles')
	<link rel="stylesheet" href="[[ asset('css/bootstrap.min.css') ]]">
	<link rel="stylesheet" href="[[ asset('css/theme-camilia.css') ]]">
	@show
</head>
<body>
	<nav class="nav-top">
		<div class="container">
			<ul class="hidden-xs hidden-sm">
				<li><a href="/">Inicio</a></li>
				<li><a href="/linea-boutique">Línea Boutique</a></li>
				<li><a href="/linea-petit">Línea Petit</a></li>
				<li><a href="/me-quiero-casar">Matrimonios</a></li>
				<li><a href="/busco-catering">Empresas</a></li>
				<li><a href="/quiero-compartir">Celebraciones</a></li>
				<li><a href="/el-salon-de-te">Salón de té</a></li>
				<li><a href="/el-chef">Chef</a></li>
				<li><a href="/contacto">Contacto</a></li>
			</ul>
			<a href="#" class="visible-xs visible-sm open-menu pull-left">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
				<g>
					<line fill="none" stroke="#BDA664" stroke-miterlimit="10" x1="7" y1="12.5" x2="43" y2="12.5"/>
					<line fill="none" stroke="#BDA664" stroke-miterlimit="10" x1="7" y1="25.5" x2="43" y2="25.5"/>
					<line fill="none" stroke="#BDA664" stroke-miterlimit="10" x1="7" y1="37.5" x2="43" y2="37.5"/>
				</g>
			</svg>

		</a>
		<img src="[[ asset('img/logo-mobile.svg') ]]" class="visible-xs visible-sm logo-mobile">
	</div>
</nav>
@section('header')
@show
<div class="container">
	@yield('content')
	<img src="[[ asset('img/logo-footer.png') ]]" alt="camilia logo" class="footer-logo">
</div>

<div id="sidr">
	<ul>
		<li><a href="/">Inicio</a></li>
		<li><a href="/linea-boutique">Línea Boutique</a></li>
		<li><a href="/linea-petit">Línea Petit</a></li>
		<li><a href="/me-quiero-casar">Matrimonios</a></li>
		<li><a href="/busco-catering">Empresas</a></li>
		<li><a href="/quiero-compartir">Celebraciones</a></li>
		<li><a href="/el-salon-de-te">Salón de té</a></li>
		<li><a href="/el-chef">Chef</a></li>
		<li><a href="/contacto">Contacto</a></li>
	</ul>
</div>

@section('scripts')
<script src="[[ asset('js/jquery.min.js') ]]"></script>
<script src="[[ asset('js/bootstrap.min.js') ]]"></script>
<script src="[[ asset('js/jquery.flexslider-min.js') ]]"></script>
<script src="[[ asset('js/hammer.min.js') ]]"></script>
<script src="[[ asset('js/jquery.sidr.js') ]]"></script>
<script src="[[ asset('js/app.js') ]]"></script>
@show
</body>
</html>