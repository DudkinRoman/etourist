@extends('lesson.urok')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>{{$name}} 
				</h1>
				{!!$task!!} 
				
			</div>
		</div>
		<div class="row">
		 	<div class="col">
		 		<a href="/urok/{{$next['type_lesson']}}/{{$next['less']}}/{{$next['id']}}" class="btn btn-success btn-block" id="next">Next</a>
		 	</div>
		 </div> 
	</div>
	<script>
		document.getElementById("next").focus();
	</script>
@endsection