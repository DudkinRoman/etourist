@extends('layouts.app')
@section('title', 'Игры со словами')
@section('meta_keyword', 'игра слова')
@section('meta_description', 'Select games')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Игра пятого уровня</h1>
        </div>
    </div>
    <div class="container" id="task">
        <div class="row" id="pict0" style="visibility:hidden">
            <img src="" id="img0" width="200">
        </div>
        <div class="row">
            <audio src="" id="audio0" controls  autoplay preload="auto"></audio>
        </div>
        <div class="row" id="rusvisor" style="visibility:hidden">
            <h3 id="rus0"></h3>
        </div>
        <div class="row" id="engv" >
            <h1 id="eng0"></h1>
        </div>
        <div class="row">
           <div class="col answ" id="answ0" onclick="game4(this.id)">
           </div>
           <div class="col answ" id="answ1" onclick="game4(this.id)">
           </div>
           <div class="col answ" id="answ2" onclick="game4(this.id)">
           </div>
        </div>
        <div class="row">
           <div class="col answ" id="answ3" onclick="game4(this.id)">
           </div>
           <div class="col answ" id="answ4" onclick="game4(this.id)">
           </div>
           <div class="col answ" id="answ5" onclick="game4(this.id)">
           </div>
        </div>
        <div class="row">
           <div class="col answ" id="answ6" onclick="game4(this.id)">
           </div>
           <div class="col answ" id="answ7" onclick="game4(this.id)">
           </div>
           <div class="col answ" id="answ8"  onclick="game4(this.id)">
           </div>
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
    let text='';
    let rg=rnd(0,8);
    let mass=gen_mass(9,eng0);
    console.log(mass);
    document.getElementById("rus0").innerHTML = rus[0];
    document.getElementById("img0").setAttribute("src", img[0].src);
    document.getElementById("audio0").setAttribute("src", audio[0].src);
    document.getElementById("eng0").innerHTML = eng[0];
    for(let i=0;i<=mass.length-1;i++){
        document.getElementById('answ'+i).classList.remove("right");
     if(rg==i||eng[0]==eng0[mass[i]])
     {
         text="<img src=\""+img[0].src+"\" width=\"150\">";
         document.getElementById('answ'+i).classList.add("right");
     }
     else {
         text="<img src=\""+img0[mass[i]].src+"\" width=\"150\">";
     }
     document.getElementById('answ'+i).innerHTML = text;
    }
</script>
@endsection
