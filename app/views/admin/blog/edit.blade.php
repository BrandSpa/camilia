@section('stylesheet')
    @parent
	<link rel="stylesheet" type="text/css" href="[[ asset('bower_components/bootstrap3-wysihtml5/dist/bootstrap-wysihtml5-0.0.2.css') ]]" />
@stop

@section('content')
	<textarea class="wysi" placeholder="Enter text ..."></textarea>
@stop

@section('scripts')
    @parent
    <script src="[[ asset('bower_components/bootstrap3-wysihtml5/lib/js/wysihtml5-0.3.0.min.js') ]]"></script>
	<script src="[[ asset('bower_components/bootstrap3-wysihtml5/dist/bootstrap-wysihtml5-0.0.2.min.js') ]]"></script>
	
	<script type="text/javascript">
    $('.wysi').wysihtml5();
</script>
@stop