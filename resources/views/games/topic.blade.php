@extends('layouts.app')
@section('title', 'Игры со словами')
@section('meta_keyword', 'игра слова')
@section('meta_description', 'Select games')
@section('content')
<div class="container">
<div class="row">
<div class="col-sm-12">
<h1>Игры со словами	</h1>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<a href="topic/0" class="btn btn-success btn-block mr-md-3">
    Играть со всеми словами
</a>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<h1>Выбор темы</h1>
</div>
</div>
<div class="row">
@foreach($data as $topics)
<div class="col-3 " >
<a href="topic/{{$topics['id']}}" target="_parent" class="btn btn-info mr-md-3">
    {{$topics['en']}}
    </a>
<a href="topic/{{$topics['id']}}" target="_parent" >
<img src="pict/{{$topics['pict']->id}}.jpg" alt="" width="200">
{{$topics['ru']}}
</a>
</div>
@endforeach
</div>


</div>
@endsection
