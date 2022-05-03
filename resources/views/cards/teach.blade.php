@extends('layouts.app')
@section('title', 'Запоминаем слова')
@section('meta_keyword', 'игра слова')
@section('meta_description', 'Select games')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Cards memory</h1>
        </div>
    </div>
    <div class="container" id="task">
        <div class="row">
            <h3 id="rus0"></h3>
        </div>
        <div class="row" id="engv" style="visibility:hidden">
            <h1 id="eng0"></h1>
        </div>
        <div class="row">
            <input type="hidden" name="etalon" id="etalon" value="" />
            <input type="text" name="answ" value="" id="answ" maxlength="30"/>
            <input type="button" name="btn" id="btn" value="go" onclick="memory()"/>
        </div>
        <div class="row">
            <h3 id="my_answ"></h3>
        </div>
    </div>
    <div class="container" id="finish" style="visibility:hidden">
      <div class="row">
        <div class="col">
            <a href="" class="btn btn-info btn-block" onclick="document.location.reload()">Повторить</a>
        </div>
      </div>
    </div>
</div>
<script src="/js/lessons.js?{{md5(rand(1,9999999))}}"></script>
<script type="text/javascript">
@include('cards.array')
document.getElementById("rus0").innerHTML = rus[0];
document.getElementById("etalon").value = eng[0];
document.getElementById("answ").value = '';
var input = document.getElementById("answ");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) { //При нажатии ентер срабатывает кнопка asw
   event.preventDefault();
   document.getElementById("btn").click();
  }
});
document.getElementById('answ').focus();
</script>
@endsection
