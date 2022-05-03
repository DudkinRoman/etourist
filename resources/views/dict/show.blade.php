@extends('layouts.app')
@section('title', ' - ' .$name )
@section('meta_keyword', " Dictinary")
@section('meta_description', 'Dictinary')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Словарь</h1>
			 {{ Form::open(array('url' => '/slovar', 'name' =>'data' ,'id' =>'data' , 'method' => 'post')) }}
			    <div class="input-group">
			        {{Form::label('word', 'Поиск слова', array('class' => 'awesome'))}}
							&nbsp;&nbsp;&nbsp;
			        {{Form::text('word','',array('id'=>'word'))}}
			   </div> <br>

			{{ Form::close() }}
			</div>
		</div>
        <div class="row">
            <div class="col-sm-12" id="result">
            </div>
        </div>
	</div>
    <script type="text/javascript">
    var input = document.getElementById("word");
    input.addEventListener("keyup", function(event) {
        //console.log(event);
        seachWord();
	});
        function seachWord(){
            let formData = $( "#data" ).serialize();
            $.ajax({
                type: 'POST',
                url: '/slovar',
                data: formData,
                dataType: "json",
                encode: true,
                success: function(res){
                    $('#result').html(ShowWords(res));
                }
            });
        }
        function ShowWords(data){
            var text;
            let dat=JSON.parse(JSON.stringify(data));
            function MyString(value,index, array){
                text += '<div class="row"><div class="col-3"><a href="/word/'+value.id+'">'+ value.rus +'</a></div><div class="col-3">'+ value.eng + '</div></div>';
            }
            dat.forEach(MyString);
            return text;
        }

    </script>


@endsection
