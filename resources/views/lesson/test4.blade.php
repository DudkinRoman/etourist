@extends('lesson.urok')
@section('content')
	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<h1>{{$name}} 
					type 4
				</h1>
<h2>
	Заполните пробелы в предложениях:
</h2>				 
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
				<h3 id="a" class="bg-info"></h3>
			</div>
		</div>
		<button class="btn-lg btn-success" tabindex="1" id="clearBtn" onclick="clear_text()">Очистить</button>
			<div class="row" id="next_btn" style="visibility:hidden">
		 	<div class="col">
		 		<a href="/urok/{{$next['type_lesson']}}/{{$next['less']}}/{{$next['id']}}" class="btn btn-success btn-block" id="next">Next</a>
		 	</div>
		</div> 
		<div class="row" id="answ_btn" style="visibility:visible">
		 	<div class="col">
		 		<a id="asw" onclick="Rtest4()" href="#" tabindex="0" class="btn btn-success btn-block">Проверить</a>
		 	</div>
		</div> 	
</div> 

<script src="/js/lessons.js?{{md5(rand(1,9999999))}}"></script>
<script>
	let answ={!!json_encode($task[0])!!};
	let resp={!!json_encode($task[1])!!};
	document.getElementById("t").innerHTML = resp[0];
	let task=separateT4(answ[0]);
    document.getElementById("a").innerHTML = task;
    document.getElementById("asw0").focus();
</script>

@endsection