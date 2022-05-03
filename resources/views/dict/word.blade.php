@extends('dict.show')
@section('first-content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{$data->eng}}</h1>
            </div>
            <div class="col">
                <h1>{{$data->rus}}</h1>
            </div>
            <div class="col">
                <img src="{{ asset('pict/'.$data->id.'.jpg')}}" width="400" alt="">
            </div>

        </div>
    </div>

@endsection
