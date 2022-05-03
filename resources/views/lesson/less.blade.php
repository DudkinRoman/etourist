@extends('layouts.app')

@section('title', ' - ' . $name)
@section('meta_keyword', $meta_keyword)
@section('meta_description', $meta_description)

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>
					@if($type_lesson==0)
						{{$name}} Урок {{$less}}
					@elseif($type_lesson==1)	
						 {{$name}} 
					@else
						Другое	
					@endif 
					
				</h1>
                @foreach($nums as $num=>$val)
				<a href="/urok/{{$type_lesson}}/{{$less}}/{{$num}}" target="_parent" class="btn btn-@if($data[$num]==0)light
                	@elseif($data[$num]==1)success
                	@elseif($data[$num]==2)info
                	@elseif($data[$num]==3)warning
                	@elseif($data[$num]==4)danger
                	@else dark 
                	@endif">{{$val}}</a>
				@endforeach

			</div>
		</div>
	</div>
@endsection