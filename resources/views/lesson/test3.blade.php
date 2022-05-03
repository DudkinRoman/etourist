@extends('lesson.urok')
@section('content')
	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<h1>{{$name}} 
					type 3
				</h1>
				 
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h1 id="t"></h1>
				<h1 id="m" class="bg-danger"></h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				{{Form::text('answer'.md5(rand(1,9999999)),'',['id'=>'answer'])}} 
			</div>
		</div>

			<div class="row" id="next_btn" style="visibility:hidden">
		 	<div class="col">
		 		<a href="/urok/{{$next['type_lesson']}}/{{$next['less']}}/{{$next['id']}}" class="btn btn-success btn-block" id="next">Next</a>
		 	</div>
		</div> 
		<div class="row" id="answ_btn" style="visibility:visible">
		 	<div class="col">
		 		<a id="asw" onclick="Rtest3()" class="btn btn-success btn-block">Проверить</a>
		 	</div>
		</div> 	
</div> 
<script src="/js/lessons.js?{{md5(rand(1,9999999))}}"></script>
<script>
	let answ={!!json_encode($task[0])!!};
	let resp={!!json_encode($task[1])!!};

	document.getElementById("t").innerHTML = resp[0];
	document.getElementById("answer").focus();
	var input = document.getElementById("answer");
	input.addEventListener("keyup", function(event) {
	  if (event.keyCode === 13) { //При нажатии ентер срабатывает кнопка asw
	   event.preventDefault();
	  // if(answ.length!==0)
	   document.getElementById("asw").click();
		//else
		//document.getElementById("next").click();	
	  }
	});
</script>

@endsection