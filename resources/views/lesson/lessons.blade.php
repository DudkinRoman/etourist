@extends('layouts.app')

@section('title', ' - ' . $name)
@section('meta_keyword', $meta_keyword)
@section('meta_description', $meta_description)

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>{{$name}}
					@if($type_lesson==0)
						Основного курса
					@elseif($type_lesson==1)
						Факультатива
					@else
						Другое
					@endif
				</h1>
		<div class="row">
            @foreach($data as $less)
            <div class="col-3 " >
            		@if($type_lesson==0)
						<a href="{{$type_lesson}}/{{$less['id']}}" target="_parent" class="btn btn-info mr-md-3">{{$less['name']}}</a>
					@elseif($type_lesson==1)
						<a href="{{$type_lesson}}/{{$less['id']}}" target="_parent" class="btn btn-info mr-md-3">
							<img src="/pict_fack/{{$less['pict']}}" alt="" width="200">
						{{$less['name_e']}} <br>
						{{$less['name_r']}}
					</a>
					@endif

			</div>
			@endforeach
		</div>
			</div>
		</div>
	</div>
@endsection
