@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Создание материала @endslot
    @slot('parent') Главная @endslot
    @slot('active') Материалы @endslot
  @endcomponent

  <hr />

  <form id='article-form' class="form-horizontal" action="{{route('admin.article.store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('admin.articles.partials.form')

    <input type="hidden" name="created_by" value="{{Auth::id()}}">
  </form>
</div>

@endsection
