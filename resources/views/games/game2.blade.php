@extends('layouts.app')
@section('title', 'Игры со словами')
@section('meta_keyword', 'игра слова')
@section('meta_description', 'Select games')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Игра третьего уровня</h1>
        </div>
    </div>
    <div class="container" id="task">
        <div class="row">
            <img src="" id="img0" width="200">
        </div>
        <div class="row">
            <audio src="" id="audio0" controls  autoplay preload="auto"></audio>
        </div>
        <div class="row" id="rusvisor" style="visibility:hidden">
            <h3 id="rus0"></h3>
        </div>
        <div class="row" id="engv" style="visibility:hidden">
            <h1 id="eng0"></h1>
        </div>
        <div class="row">
            <input type="hidden" name="etalon" id="etalon" value="" />
            <input type="text" name="answ" value="" id="answ" maxlength="30"/>
            <input type="button" name="btn" id="btn" value="go" onclick="game2()"/>
        </div>
    </div>
    <div class="container" id="finish" style="visibility:hidden">
      <div class="row">
        <div class="col">
            <a href="" class="btn btn-info btn-block" onclick="document.location.reload()">Повторить</a>
            <a href="/topic" class="btn btn-success btn-block">Выбрать тему</a>
        </div>
      </div>
    </div>
</div>
<script src="/js/lessons.js?{{md5(rand(1,9999999))}}"></script>
<script type="text/javascript">
@include('games.array')
document.getElementById("img0").setAttribute("src", img[0].src);
document.getElementById("audio0").setAttribute("src", audio[0].src);
document.getElementById("eng0").innerHTML = eng[0];
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
