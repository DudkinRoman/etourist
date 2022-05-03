@extends('lesson.urok')
@section('content')
{{ Form::open(array('url' => '', 'method' => 'post')) }}
	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<h1>{{$name}} 
					type 2
				</h1>
			</div>

		</div>
			<div class="row bg-info">
			<div class="col"><h1>English</h1></div>
			<div class="col"><h1>Russian</h1></div>
		</div>
		<?php $kl=count($task[0]); $string="";?>
		@for ($i=0; $i<$kl ; $i++) 
		<div class="row">
			<div class="col-6 border" id="ans{{$i}}">
			   <div class="input-group input-group-lg">
			        {{Form::text('answer_'.$i,'',['id'=>'answer_'.$i,'size'=>15])}} 
			        {{Form::hidden('right_'.$i, $task[0][$i],['id'=>'right_'.$i])}}    
			   </div>
			</div>
			<div class="col-6 border"><h1>{{$task[1][$i]}}</h1></div>
			
		</div>
		<?php $string.=$task[0][$i]."  ";?>
		@endfor
		 {{Form::hidden('nnn', $kl,['id'=>'nnn'])}} 
		 <div class="row">
		 	<div class="col bg-warning">
		 		<h3>
			 		{{$string}}			 	
				</h3>
			</div>
		 </div>
		<div class="row" id="next_btn" style="visibility:hidden">
		 	<div class="col">
		 		<a href="/urok/{{$next['type_lesson']}}/{{$next['less']}}/{{$next['id']}}" class="btn btn-success btn-block">Next</a>
		 	</div>
		</div> 
		<div class="row" id="answ_btn" style="visibility:visible">
		 	<div class="col">
		 		<a id="asw" onclick="response()" class="btn btn-success btn-block">Проверить</a>
		 	</div>
		</div> 		
	</div>
{{ Form::close() }}

@endsection