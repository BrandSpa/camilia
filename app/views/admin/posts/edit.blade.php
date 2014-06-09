@section('content')

<div class="row">

	<h3>Editar post</h3>
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

		<input type="submit" value="actualizar" class="btn">
	</form>
</div>

@stop
@section('scripts')



@stop


