@extends('lesson.urok')
@section('content')
	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<h1>{{$name}} 
					type 5
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
				{{Form::text('answer'.md5(rand(1,9999999)),'',['id'=>'answer','size'=>'100'])}} 
			</div>
		</div>
		<div class="row">
			<div class="col" id="btn-section">
			</div>
		</div>
		<button class="btn-lg btn-success" id="clearBtn" onclick="clear_text()">Очистить</button>
			<div class="row" id="next_btn" style="visibility:hidden">
		 	<div class="col">
		 		<a href="/urok/{{$next['type_lesson']}}/{{$next['less']}}/{{$next['id']}}" class="btn btn-success btn-block" id="next">Next</a>
		 	</div>
		</div> 
		<div class="row" id="answ_btn" style="visibility:visible">
		 	<div class="col">
		 		<a id="asw" onclick="Rtest5()" class="btn btn-success btn-block">Проверить</a>
		 	</div>
		</div> 	
</div> 
<script src="/js/lessons.js?{{md5(rand(1,9999999))}}"></script>
<script>
	let answ={!!json_encode($task[0])!!};
	let resp={!!json_encode($task[1])!!};
	let answ2w={!!json_encode($task[0])!!};
	let resp2w={!!json_encode($task[1])!!};
	
	document.getElementById("t").innerHTML = resp[0];
	let wResp0=separate(answ[0]);
	let btn0='';
	//document.getElementById("m").innerHTML = wResp0.join("*");
	for (var i = wResp0.length - 1; i >= 0; i--) {
        btn0+="<button class=\"btn-lg btn-info\" id=\"wb"+i+"\" onclick=\"add_text('"+wResp0[i]+"','wb"+i+"')\">"+wResp0[i]+"</button>";
    }
    document.getElementById("btn-section").innerHTML = btn0;
	
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
	document.getElementById('answer').focus();

	$('.btn-info').click(function(){
	  $(this).removeClass("btn-info"); //удаляем класс
	  $(this).addClass("btn-danger"); //добавляем класс текущей (нажатой)
	});
</script>

@endsection