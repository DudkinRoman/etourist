<?php
//dd($category);
?>

{{--Категория: {{ $category -> title }} ( {{ $category -> slug }})--}}
{{--<br><br>--}}

<label for="">Статус</label>
<select class="form-control" name="published">
    @if (isset($category->id))
        <option value="0" @if ($category->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($category->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">Наименование</label>
@isset($category -> title)
<input type="text" class="form-control" name="title" placeholder="Заголовок категории" value="{{ $category->title }}"  required="required">
@else
<input type="text" class="form-control" name="title" placeholder="Заголовок категории" value=""  required="required">
@endisset

<label for="">Slug</label>
@isset($category -> slug)
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{ $category->slug }}" readonly="">
@else
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="" readonly="">
@endisset

<label for="">Родительская категория</label>
<select class="form-control" name="parent_id">
    <option value="0">-- без родительской категории --</option>
    @include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<hr />

<button class="btn btn-danger" type="submit"><i class="fas fa-save"></i> Сохранить</button>

<a href="{{ route('admin.category.index') }}" class="btn btn-primary"><i class="fa fa-ban" aria-hidden="true"></i> Отменить</a>
<br>
<br>
