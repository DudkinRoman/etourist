@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron text-center">
                    <h4><span class="badge badge-primary">Категорий: <a class="dashboard_link" href="{{ route('admin.category.index') }}">{{ $count_categories }}</a></span></h4>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron text-center">
                    <h4><span class="badge badge-primary">Материалов: <a class="dashboard_link" href="{{ route('admin.article.index') }}">{{ $count_articles }}</a></span></h4>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron text-center">
                    <h4><span class="badge badge-primary">Пользователей: <a class="dashboard_link" href="{{ route('admin.user_managment.user.index') }}">{{ $count_users }}</a></span></h4>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron text-center">
                    <h4><span class="badge badge-primary">Сегодня: {{ $today }}</span></h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-primary" href="{{route('admin.category.create')}}">Создать категорию</a>
                @foreach ($categories as $category)
                    <a class="list-group-item" href="{{route('admin.category.edit', $category)}}">
                        <h4 class="list-group-item-heading">{{$category->title}}</h4>
                        <p class="list-group-item-text">
                            {{$category->articles()->count()}}
                        </p>
                    </a>
                @endforeach
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-primary" href="{{route('admin.article.create')}}">Создать материал</a>
                @foreach ($articles as $article)
                    <a class="list-group-item" href="{{route('admin.article.edit', $article)}}">
                        <h4 class="list-group-item-heading">{{$article->title}}</h4>
                        <p class="list-group-item-text">
                            {{$article->categories()->pluck('title')->implode(', ')}}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
