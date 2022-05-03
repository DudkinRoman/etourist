<?php
/*@foreach ($categories as $category)

  @if ($category->children->where('published', 1)->count())
    <li class="nav-item dropdown">
      <a href="{{url("/blog/category/$category->slug")}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        {{$category->title}} <span class="caret"></span>
      </a>
      <ul class="nav-item dropdown-menu" role="menu">
        @include('layouts.top_menu')
      </ul>
  @else
    <li class="nav-item dropdown" style="margin-left: 10px;">
      <a href="{{url("/blog/category/$category->slug")}}">{{$category->title}}</a>
  @endif
    </li>
@endforeach
*/
?>
