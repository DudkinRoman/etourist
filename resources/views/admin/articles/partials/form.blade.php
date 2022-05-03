<label for="">Статус:</label>
<select class="form-control" name="published">
  @if (isset($article->id))
    <option value="0" @if ($article->published == 0) selected="" @endif>Не опубликовано</option>
    <option value="1" @if ($article->published == 1) selected="" @endif>Опубликовано</option>
  @else
    <option value="0">Не опубликовано</option>
    <option value="1">Опубликовано</option>
  @endif
</select>

<label for="">Заголовок:</label>

@isset($article -> title)
<input type="text" id="article_title" class="form-control" name="title" placeholder="Заголовок материала" value="{{ $article->title }}"  required="required">
@else
<input type="text" id="article_title" class="form-control" name="title" placeholder="Заголовок материала" value="" required="required">
@endisset

<label for="">Slug (Уникальное значение):</label>
@isset($article -> slug)
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{ $article->slug }}" readonly="">
@else
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="" readonly="">
@endisset

<label for="">Родительская категория:</label>
<select class="form-control" name="categories[]" multiple="">
  @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<br>
<label for="">Иллюстрация:</label><br>
@isset($article->image)
    @if($article->image != '')
    <img src="{{ $article -> image }}" class="article_image">
    <div class="form-group">
        <input type="file" class="form-control-file" name="article_image" id="article_image" value="{{ $article->image }}">
    </div>
    <a href="/admin/article/{{ $article->id }}/delete_image" class="btn btn-danger">Удалить иллюстрацию</a>
    <br><br>
    @else
        <i>Иллюстрация на загружена</i><br>
        <div class="form-group">
            <input type="file" class="form-control-file" name="article_image" id="article_image" value="{{ $article->image }}">
        </div>
    @endif
@else
    <div class="form-group">
        <input type="file" class="form-control-file" name="article_image" id="article_image" value="">
</div>
@endisset

<label for="">Краткое описание:</label>
@isset($article->description_short)
<textarea class="form-control" id="article_description_short" name="description_short" required="required">{{$article->description_short}}</textarea>
@else
<textarea class="form-control" id="article_description_short" name="description_short" required="required"></textarea>
@endisset

<label for="">Полное описание:</label>
@isset($article->description)
<textarea class="form-control" id="article_description" name="description" required="required">{{ $article->description }}</textarea>
@else
<textarea class="form-control" id="article_description" name="description" required="required"></textarea>
@endisset

<hr />

<label for="">Мета заголовок:</label>
@isset($article->meta_title)
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$article->meta_title}}">
@else
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="">
@endisset

<label for="">Мета описание:</label>
@isset($article->meta_description)
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$article->meta_description}}">
@else
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="">
@endisset

<label for="">Ключевые слова:</label>
@isset($article->meta_keyword)
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова, через запятую" value="{{$article->meta_keyword}}">
@else
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова, через запятую" value="">
@endisset

<hr />


<button class="btn btn-danger" type="button" onclick="SaveArticle()"><i class="fas fa-save"></i> Сохранить</button>
{{--<button class="btn btn-danger" type="submit"><i class="fas fa-save"></i> Сохранить</button>--}}
<a href="{{ route('admin.article.index') }}" class="btn btn-primary"><i class="fa fa-ban" aria-hidden="true"></i> Отменить</a>
<br>
<br>
