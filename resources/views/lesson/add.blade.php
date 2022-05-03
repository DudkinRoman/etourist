@extends('layouts.app')

@section('title', ' - ' . 'Новый урок')
@section('meta_keyword', " факультатив курс")
@section('meta_description', '')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Add lessons</h1>
 {{ Form::open(array('url' => 'less/add', 'method' => 'post')) }}
    <div class="input-group">
        {{Form::label('name', 'Название урока', array('class' => 'awesome'))}}
        {{Form::text('name')}}  
        {{Form::hidden('ud',$ud)}}    
        {{Form::hidden('public',0)}}  
   </div>
      <div class="input-group">
        {{Form::label('type', 'Тип урока', array('class' => 'awesome'))}}
       {{ Form::select('type', ['0' => 'Main', '1' => 'Fack'],$type_lesson)}}   
   </div>
{{Form::submit('Сохранить!')}}

{{ Form::close() }}
			</div>
		</div>
	</div>
@endsection