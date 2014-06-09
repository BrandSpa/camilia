@section('content')
<div class="row">
	<form action="/admin/posts/" method="POST" class="form-post">
	<h3>Nuevo post</h3>
	<div class="form-group">
			<input type="text" name="title" class="form-control" placeholder="Titulo">
		</div>
		<div class="form-group">

			<textarea name="description" rows="20"  class="form-control summernote"></textarea>
		</div>
		<div class="form-group">

			<input type="file" name="image" class="form-control">
		</div>

		<input type="submit" value="Publicar" class="btn">
	</form>
</div>
@stop

@section('scripts')
<script>
	form = document.querySelector('.form-post');
	request = new XMLHttpRequest();

	form.addEventListener('submit', function(e){
		e.preventDefault();
		formData = new FormData(form);
		request.open('post', '/admin/posts');
		request.send(formData);
		window.location.href = '/blog';
	});
</script>
@stop