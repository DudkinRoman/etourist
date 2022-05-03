@extends('layouts.app')
@section('title', 'Игры со словами')
@section('meta_keyword', 'игра слова')
@section('meta_description', 'Select games')
@section('content')
<div class="container">
<div class="row">
    <div class="col-sm-12">
        <h1>Игры со словами	</h1>
        <h1>{{$data['en']}}</h1>
        <h1>{{$data['ru']}}</h1>
        <img src="{{asset('pict/'.$data['pict']->id.'.jpg')}}" alt="">

    </div>
</div>
<div class="row">
    <div class="col">
        <a href="/game/{{$data['id']}}/0" class="btn">
            <img src="{{asset('images/g0.png')}}" width="100"><hr>
            Напечатай по шаблону
        </a>
    </div>
    <div class="col">
        <a href="/game/{{$data['id']}}/1" class="btn">
            <img src="{{asset('images/g1.png')}}" width="100"><hr>
            Напечатай по памяти
        </a>
    </div>
    <div class="col">
        <a href="/game/{{$data['id']}}/2" class="btn">
            <img src="{{asset('images/g2.png')}}" width="100"><hr>
            Напечатай по звучанию
        </a>
    </div>
    <div class="col">
        <a href="/game/{{$data['id']}}/3" class="btn">
            <img src="{{asset('images/g3.png')}}" width="100"><hr>
            Выбор правильного варианта - слово
        </a>
    </div>
    <div class="col">
        <a href="/game/{{$data['id']}}/4" class="btn">
            <img src="{{asset('images/g4.png')}}" width="100"><hr>
            Выбор правильного варианта - звучание
        </a>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="/topic" class="btn btn-block btn-info">Back</a>
    </div>
</div>
</div>
@endsection
