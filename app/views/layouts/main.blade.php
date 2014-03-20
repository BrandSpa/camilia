<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="google-site-verification" content="lYSHlii2K0OTnU5TYF6Kjhs_PmcqdleCPQbocUkA_bc" />
	@section('head')
	@show
	<link rel="shortcut icon" href="favicon.png" type="image/png" />
	

	@section('styles')
		<link rel="stylesheet" href="[[ asset('bower_components/bootstrap/dist/css/bootstrap.css') ]]">
	<link rel="stylesheet" href="[[ asset('css/theme-camilia.css') ]]">
	<link rel="stylesheet" href="[[ asset('bower_components/summernote/summernote-dist/summernote.css') ]]">
	@section('stylesheet')
	@show

</head>
<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KPN434"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KPN434');</script>
<!-- End Google Tag Manager -->

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


<script src="[[ asset('js/jquery.min.js') ]]"></script>
<script src="[[ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') ]]"></script>
<script src="[[ asset('js/jquery.flexslider-min.js') ]]"></script>
<script src="[[ asset('js/hammer.min.js') ]]"></script>
<script src="[[ asset('js/jquery.sidr.js') ]]"></script>
<script src="[[ asset('js/alertify.min.js') ]]"></script>
<script src="[[ asset('js/app.js') ]]"></script>
<script src="[[ asset('bower_components/summernote/summernote-dist/summernote.min.js') ]]"></script>
@section('scripts')
@show
<script>
	$('.summernote').summernote({
  toolbar: [
    //['style', ['style']], // no style button
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    //['insert', ['picture', 'link']], // no insert buttons
    //['table', ['table']], // no table button
    //['help', ['help']] //no help button
  ]
});
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=1478858265659068";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@show
<img src="[[ asset('img/phone.png') ]]" alt="camilia phone" class="phone">
</body>
</html>