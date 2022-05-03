@extends('lesson.urok')
@section('content')
	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<h1>{{$name}}
					type 6
				</h1>
<h2>
	Напишите три формы глагола:
</h2>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h1 id="t" class="bg-warning"></h1>
				<h1 id="m" class="bg-danger"></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<h3>Simple</h3>
			</div>
			<div class="col-3">
				<h3>2</h3>
			</div>
			<div class="col-3">
				<h3>3</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<input type="text" id="en1" size="10">
				<h3 id="tr1"></h3>
				<input type="hidden" id="rsp1">
			</div>
			<div class="col-3">
				<input type="text" id="en2"  size="10">
				<h3 id="tr2"></h3>
				<input type="hidden" id="rsp2">
			</div>
			<div class="col-3">
				<input type="text" id="en3"  size="10">
				<h3 id="tr3"></h3>
				<input type="hidden" id="rsp3">
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
		 		<a id="asw" onclick="Rtest6()" href="#" tabindex="0" class="btn btn-success btn-block">Проверить</a>
		 	</div>
		</div>
</div>

<script src="/js/lessons.js?{{md5(rand(1,9999999))}}"></script>
<script>
	let en1={!!json_encode($task[0])!!};
	let en2={!!json_encode($task[1])!!};
	let en3={!!json_encode($task[2])!!};
	let resp={!!json_encode($task[3])!!};
	let tr1={!!json_encode($task[4])!!};
	let tr2={!!json_encode($task[5])!!};
	let tr3={!!json_encode($task[6])!!};
	document.getElementById("t").innerHTML = resp[0];
	document.getElementById("en1").value = "to ";
	document.getElementById("rsp1").value = en1[0];
	document.getElementById("rsp2").value = en2[0];
	document.getElementById("rsp3").value = en3[0];
	document.getElementById("tr1").innerHTML = tr1[0];
	document.getElementById("tr2").innerHTML = tr2[0];
	document.getElementById("tr3").innerHTML = tr3[0];
    document.getElementById("en1").focus();
</script>

@endsection
