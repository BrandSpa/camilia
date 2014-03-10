<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
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
			<li><a href="/me-quiero-casar">Matrimonios</a></li>
			<li><a href="/busco-catering">Empresas</a></li>
			<li><a href="/quiero-compartir">Celebraciones</a></li>
			<li><a href="/linea-boutique">Línea Boutique</a></li>
			<li><a href="/linea-petit">Línea Petit</a></li>
			<li><a href="/contacto">Contacto</a></li>
		</ul>
		<a href="#" class="visible-xs visible-sm open-menu pull-left">
			<svg version="1.1" id="Layer_1"  x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
				<g>
					<path opacity="0.5" fill="#FFFFFF" d="M48.909,43.342c0,1.553-1.26,2.813-2.813,2.813H3.904c-1.553,0-2.813-1.26-2.813-2.813V4.667
					c0-1.554,1.26-2.813,2.813-2.813h42.192c1.553,0,2.813,1.26,2.813,2.813V43.342z"/>
					<g>
						<path fill="#FFFFFF" d="M40.642,15.866c0,0.76-0.583,1.376-1.302,1.376H10.218c-0.718,0-1.301-0.616-1.301-1.376v-2.412
						c0-0.761,0.583-1.377,1.301-1.377H39.34c0.719,0,1.302,0.616,1.302,1.377V15.866z"/>
						<path fill="#FFFFFF" d="M40.642,25.209c0,0.761-0.583,1.376-1.302,1.376H10.218c-0.718,0-1.301-0.616-1.301-1.376v-2.411
						c0-0.761,0.583-1.377,1.301-1.377H39.34c0.719,0,1.302,0.616,1.302,1.377V25.209z"/>
						<path fill="#FFFFFF" d="M40.642,34.555c0,0.76-0.583,1.377-1.302,1.377H10.218c-0.718,0-1.301-0.617-1.301-1.377v-2.412
						c0-0.76,0.583-1.377,1.301-1.377H39.34c0.719,0,1.302,0.617,1.302,1.377V34.555z"/>
					</g>
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
			<li><a href="/me-quiero-casar">Matrimonios</a></li>
			<li><a href="/busco-catering">Empresas</a></li>
			<li><a href="/quiero-compartir">Celebraciones</a></li>
			<li><a href="/linea-boutique">Línea Boutique</a></li>
			<li><a href="/linea-petit">Línea Petit</a></li>
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