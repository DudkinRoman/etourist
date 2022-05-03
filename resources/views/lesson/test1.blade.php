@extends('lesson.urok')
@section('content')
	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<h1>{{$name}} 
				type 	1
				</h1>
				
			</div>
		</div>
		<div class="row bg-info">
			<div class="col"><h1>English</h1></div>
			<div class="col"><h1>Russian</h1></div>
		</div>
		<?php $kl=count($task[0]); ?>
		@for ($i=0; $i<$kl ; $i++) 
		<div class="row">
			<div class="col-6 border"><h1>{{$task[0][$i]}}</h1></div>
			<div class="col-6 border"><h1>{{$task[1][$i]}}</h1></div>
		</div>
		@endfor
		<div class="row">
		 	<div class="col">
		 		<a href="/urok/{{$next['type_lesson']}}/{{$next['less']}}/{{$next['id']}}" class="btn btn-success btn-block" id="next">Next</a>
		 	</div>
		 </div> 
	</div>
<script>
	document.getElementById("id="next"").focus();
</script>
@endsection