@section('content')

<div class="row">
	<div class="panel panel-default" style="margin-top:30px">
		<div class="panel-heading"><b>Editar post</b></div>
		<div class="panel-body">
			[[ Form::open(array('url' => '/admin/posts/'.$post->id, 'files' => true, 'method' => 'put')) ]]
			<div class="form-group">
				<input type="text" name="title" class="form-control" placeholder="Titulo" value="[[ $post->title ]]">
			</div>
			<div class="form-group">

				<textarea name="description" rows="20"  class="form-control summernote">
					[[ $post->description ]]
				</textarea>
			</div>

			<div class="form-group">
				<input type="file" name="image" class="form-control">
			</div>
			<a href="/admin/posts" class="btn btn-danger">Cancelar</a>
			<input type="submit" value="actualizar" class="btn btn-default pull-right">
		</form>
	</div>
	</div>

</div>

@stop
@section('scripts')



@stop


