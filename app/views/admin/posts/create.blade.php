@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default" style="margin-top:30px">
			<div class="panel-heading">
				<span style="font-family:'Archer-Medium'"></span>Nuevo post
			</div>
			<div class="panel-body">
				<form action="/admin/posts" method="POST" class="form-post" enctype="multipart/form-data">	
					<div class="form-group">
						<input type="text" name="title" class="form-control" placeholder="Titulo">
					</div>
					<div class="form-group">

						<textarea name="description" rows="20"  class="form-control summernote"></textarea>
					</div>
					<div class="form-group">

						<input type="file" name="image" class="form-control">
					</div>
					<a href="/admin/posts" class="btn btn-danger">Cancelar</a>
					<input type="submit" value="Publicar" class="btn btn-default pull-right">
				</form>
			</div>
		</div>
	</div>
</div>
@stop

@section('scripts')
<script>
	form = document.querySelector('.form-post');

	form.addEventListener('submit', function(e){
		e.preventDefault();
		formData = new FormData(form);

		$.ajax({
			type: 'POST',
			url: '/admin/posts', 
			data: formData,
			contentType: false,
			processData: false,
		}).then(function(object){
			if (object.id) {
				window.location.href = "/admin/posts";
			} else {
				$.each(object, function(key, val){
					alertify.error(val);
				});
			};
			
		});	
	});
</script>
@stop