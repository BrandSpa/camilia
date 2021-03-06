@section('head')
	<title>Camilia / Busco catering</title>
@stop

@section('header')
	@include('sections._slider_header')
@stop

@section('content')
<div class="space"></div>

<div class="row ">
	<div class="col-lg-12 no-padding">
		<span class="intro-icon icon-catering"></span>
		<div class="intro-border-outside">
			<div class="intro-border-inside">
				<div class="row">
					<div class="col-lg-4 intro-text">
						<h1>Busco Catering</h1>
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
<div class="row section-msc">
	<div class="col-lg-12 intro intro-contact">
		<div class="col-lg-6 no-padding">
			<p>
				Nuestra planta de producción tiene los más altos estándares de calidad, los productos corporativos son un reflejo de las mejores marcas, contáctenos y hablaremos de negocios.
			</p>
		</div>

		<div class="col-lg-6 no-padding ">
			<form action="#" class="form-contact">
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Nombre">
				</div>
				<div class="form-group">
					<input type="text" name="mail" class="form-control" placeholder="Correo o Télefono">
				</div>
				<div class="form-group">
					<textarea name="message" class="form-control" rows="3" placeholder="Mensaje"></textarea>
				</div>
				<a href="#" class="btn-contact">Enviar</a>
			</form>
		</div>
	</div>
@include('sections._contact_section')
</div>



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
		<a href="/quiero-compartir">
			<span class="section-icon icon-share"></span>
			<div class="section section-last">
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
@include('sections._btns_ct')

@stop