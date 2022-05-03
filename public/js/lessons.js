function separate(text){

	let words=text.replaceAll('  ', ' ').split(' ');
	return shuffleArray(words);
}
function separateT4(text){
	let  tasks='';
	let words=text.split('[');
	let j=0;
	for (var i = 0; i <= words.length - 1; i++) {
		if(i%2==0){
			tasks+=" "+words[i]+" ";
		}
		else{
			let know=words[i].split(']');
			tasks+="<input type='text' size='"+know[0].length+"' id='asw"+j+"'> <input type='hidden' id='rsp"+j+"' value='"+know[0]+"'> "+know[1];
		j++;
		}

	}
	return tasks;
}

function shuffleArray(array) { // перемешать массив
	for (var i = array.length - 1; i > 0; i--) {
	        var j = Math.floor(Math.random() * (i + 1));
	        var temp = array[i];
	        array[i] = array[j];
	        array[j] = temp;
	    }
    return array;
}
function Rtest2(){
		let n=$('#nnn').val();
		let tr=0;
		for (var i = n - 1; i >= 0; i--) {
		if($('#answer_'+i).val().trim().toLowerCase()!==$('#right_'+i).val().trim().toLowerCase()){
				tr=1;
				$('#ans'+i).removeClass( "bg-success" );
				$('#ans'+i).addClass( "bg-danger" );
			}else{
				$('#ans'+i).removeClass( "bg-danger" );
				$('#ans'+i).addClass( "bg-success" );
			}
		}
		if(tr==0){
		$('#next_btn').css('visibility','visible');
		$('#answ_btn').css('visibility','hidden');
		}
	}
function Rtest3(){

		if($('#answer').val().trim().toLowerCase().replaceAll('  ', ' ')==answ[0].trim().toLowerCase().replaceAll('  ', ' ')){
			$('#m').html('');
			answ.splice(0, 1);
			resp.splice(0, 1);
			$('#answer').focus();
		}
		else{
			$('#m').html($('#answer').val()+' - '+answ[0] );
			answ.push(answ[0]);
			resp.push(resp[0]);
			$('#answer').focus();
		}
		if(answ.length!==0)
		{
			$('#t').html(resp[0]);
			$('#answer').val('');
			$('#answer').focus();
		}
		else{
			$('#next_btn').css('visibility','visible');
			$('#answ_btn').css('visibility','hidden');
			$('#answer').css('visibility','hidden');
			$('#t').html('Вы справились, переходим к следующему заданию!!!!');
			$('#next').focus();

		}
	}
function Rtest4(){
	let right=1;
	let mistake='';
	for (var i = 0; i <= $('#asw*').length-1; i++) {

			if($('#asw'+i).val().trim().toLowerCase().replaceAll('  ', ' ')==$('#rsp'+i).val().trim().toLowerCase().replaceAll('  ', ' ')){
			mistake+='';
			}
			else{
			right=0;
			mistake+=$('#rsp'+i).val().trim().toLowerCase().replaceAll('  ', ' ')+' - !!!! <br>'
			}
		}
		if(right==1){
			$('#m').html('');
			answ.splice(0, 1);
			resp.splice(0, 1);
			$('#asw0').focus();
		}
		else{
			$('#m').html(mistake);
			answ.push(answ[0]);
			resp.push(resp[0]);
			$('#asw0').focus();
		}
		if(answ.length!==0)
		{
			let task=separateT4(answ[0]);
    		$('#a').html(task);
			$('#t').html(resp[0]);
			$('#asw*').val('');
			$('#asw0').focus();
		}
		else{
			$('#next_btn').css('visibility','visible');
			$('#a').css('visibility','hidden');
			$('#answ_btn').css('visibility','hidden');
			$('#t').html('Вы справились, переходим к следующему заданию!!!!');
			$('#next').focus();

		}
	}
function Rtest5(){
	let way2=1;
	if(answ.length!==0&&$('#answer').val().trim().toLowerCase().replaceAll('  ', ' ')==answ[0].trim().toLowerCase().replaceAll('  ', ' ')){
		$('#m').html('');
		answ.splice(0, 1);
		resp.splice(0, 1);
		way2=0;

	}
	else if(answ.length!==0&&$('#answer').val().trim().toLowerCase().replaceAll('  ', ' ')!==answ[0].trim().toLowerCase().replaceAll('  ', ' ')){
		$('#m').html($('#answer').val()+' - '+answ[0] );
		answ.push(answ[0]);
		resp.push(resp[0]);
	}

	if(way2!==0&&answ.length==0&&answ2w.length!==0&&$('#answer').val().trim().toLowerCase().replaceAll('  ', ' ')==answ2w[0].trim().toLowerCase().replaceAll('  ', ' ')){
		$('#m').html('');
		answ2w.splice(0, 1);
		resp2w.splice(0, 1);

	}
	else if(way2!==0&&answ.length==0&&answ2w.length!==0&&$('#answer').val().trim().toLowerCase().replaceAll('  ', ' ')!==answ2w[0].trim().toLowerCase().replaceAll('  ', ' ')){
		$('#m').html($('#answer').val()+' - '+answ[0] );
		answ2w.push(answ[0]);
		resp2w.push(resp[0]);
	}

	if(answ.length!==0)
	{

		$('#t').html(resp[0]);
		$('#answer').val('');

		let wResp=separate(answ[0]);
		let btn='';
		for (var i = wResp.length - 1; i >= 0; i--) {
	        btn+=" <button class=\"btn-lg btn-info\" id=\"wb"+i+"\" onclick=\"add_text('"+wResp[i]+"','wb"+i+"')\">"+wResp[i]+"</button>";
	    }

	    $('#btn-section').html(btn);
	}
	else if(answ.length==0&&answ2w.length!==0)
	{
		$('#t').html(resp2w[0]);
		$('#answer').val('');
		let wResp=separate(answ2w[0]);
		let btn='';
	    $('#btn-section').html(btn);
	    $('#answer').focus();
	}
	else if(answ.length==0&&answ2w.length!==0)
	{
		$('#t').html(resp2w[0]);
		$('#answer').val('');
		let wResp=separate(answ2w[0]);
		let btn='';
	    $('#btn-section').html(btn);
	    $('#answer').focus();
	}
	else{
		$('#next_btn').css('visibility','visible');
		$('#answ_btn').css('visibility','hidden');
		$('#answer').css('visibility','hidden');
		$('#t').html('Вы справились, переходим к следующему заданию!!!!');
		$('#next').focus();

	}

}
function Rtest6(){
	let right=1;
	let massage='';
	for (var i = 1; i <= 3; i++) {
		if($('#en'+i).val().trim().toLowerCase().replaceAll('  ', ' ')==$('#rsp'+i).val().trim().toLowerCase().replaceAll('  ', ' ')){
			massage+=' ';
		}
		else{
			right=0;
			$('#en'+i).attr('color: red');
			massage+=' <i style=\"color:yellow\">'+$('#en'+i).val()+'</i> - '+ ' '+$('#rsp'+i).val()+'<br>';
		}
	}
	if(right==1){
		$('#m').html('');
		en1.splice(0, 1);
		en2.splice(0, 1);
		en3.splice(0, 1);
		resp.splice(0, 1);
		tr1.splice(0, 1);
		tr2.splice(0, 1);
		tr3.splice(0, 1);
		clear_text();
	}
	else{
		$('#m').html(massage);
		resp.push(resp[0]);
		en1.push(en1[0]);
		en2.push(en2[0]);
		en3.push(en3[0]);
		tr1.push(tr1[0]);
		tr2.push(tr2[0]);
		tr3.push(tr3[0]);
	}

	if(en1.length!==0)
	{

	$('#t').html(resp[0]);
	$('#en1').val('to ');
	$('#rsp1').val(en1[0]);
	$('#rsp2').val(en2[0]);
	$('#rsp3').val(en3[0]);
	$('#tr1').html(tr1[0]);
	$('#tr2').html(tr2[0]);
	$('#tr3').html(tr3[0]);
    $('#en1').focus();
	}
	else{
		$('#next_btn').css('visibility','visible');
		$('#answ_btn').css('visibility','hidden');
		$('#t').html('Вы справились, переходим к следующему заданию!!!!');
		$('#next').focus();

	}
}

function clear_text(){
	$('input:text').val('');
	 $(".btn-lg").removeClass("btn-danger"); //удаляем класс
	 $(".btn-lg").addClass("btn-info"); //добавляем класс
	}
function add_text(word,btn)
	{
	 document.getElementById('answer').value=document.getElementById('answer').value+" "+word;
	 $('#'.btn).attr('class','btn-danger btn-lg');
	 // document.getElementById('b').style.color='Red';
}
function game0(){
    if($('#etalon').val().trim().toLowerCase().replaceAll('  ', ' ')==$('#answ').val().trim().toLowerCase().replaceAll('  ', ' ')){
        eng.shift();
        rus.shift();
        img.shift();
        audio.shift();
    }
    else{
        eng.push(eng[0]);
        rus.push(rus[0]);
        img.push(img[0]);
        audio.push(audio[0]);
    }
    if(eng.length==0)
    {
    $('#finish').css('visibility','visible');
    $('#task').css('visibility','hidden');
    }
    else{
    $('#task').css('visibility','visible');
    $('#finish').css('visibility','hidden');
    game0_t();
  }
}
function game1(){
    if($('#etalon').val().trim().toLowerCase().replaceAll('  ', ' ')==$('#answ').val().trim().toLowerCase().replaceAll('  ', ' ')){
        eng.shift();
        rus.shift();
        img.shift();
        audio.shift();
        $('#engv').css('visibility','hidden');
    }
    else{
        eng.push(eng[0]);
        rus.push(rus[0]);
        img.push(img[0]);
        audio.push(audio[0]);
        $('#engv').css('visibility','visible');
    }
    if(eng.length==0)
    {
    $('#finish').css('visibility','visible');
    $('#task').css('visibility','hidden');
    }
    else{
    $('#task').css('visibility','visible');
    $('#finish').css('visibility','hidden');
    game0_t();
  }
}
function game2(){
    let r=0;
    if($('#etalon').val().trim().toLowerCase().replaceAll('  ', ' ')==$('#answ').val().trim().toLowerCase().replaceAll('  ', ' ')){
        eng.shift();
        rus.shift();
        img.shift();
        audio.shift();
        $('#engv').css('visibility','hidden');
		$('#rusvisor').css('visibility','hidden');
    }
    else{
        eng.push(eng[0]);
        rus.push(rus[0]);
        img.push(img[0]);
        audio.push(audio[0]);
        r=1;
    }
    if(eng.length==0)
    {
    $('#finish').css('visibility','visible');
    $('#task').css('visibility','hidden');
    }
    else{
    $('#task').css('visibility','visible');
    $('#finish').css('visibility','hidden');
    game0_t();
    if(r==1){
		$('#rusvisor').css('visibility','visible');
        $('#engv').css('visibility','visible');

    }
  }
}

function game0_t(){
    $('#img0').attr('src',img[0].src);
    $('#audio0').attr('src',audio[0].src);
    $('#eng0').html(eng[0]);
    $('#rus0').html(rus[0]);
    $('#etalon').val(eng[0]);
    $('#answ').val('');
    $('#answ').focus();
}
function game4_t(){
   let text='';
   let rg=rnd(0,8);
   let mass=gen_mass(9,eng0);
   $('#rus0').html(rus[0]);
   for(let i=0;i<=mass.length-1;i++){
   $('#answ'+i).removeClass('right');
    if(rg==i||eng[0]==eng0[mass[i]])
    {
        text="<img src=\""+img[0].src+"\" width=\"150\">";
        $('#answ'+i).addClass('right');
    }
    else {
        text="<img src=\""+img0[mass[i]].src+"\" width=\"150\">";
    }
    $('#answ'+i).html(text);
   }
}
function rnd(min,max){
let x=Math.floor(Math.random()*10*max);
if(x>=min&&x<=max)return x;
else return rnd(min,max);
}
function gen_mass(n,etallon){
    let mass=new Array;
    for(let i=0;i<=n-1;i++){
        mass.push(i);
    }
    for(let i=0;i<=n-1;i++){
        mass[i]=rnd(0,etallon.length-1);
    }
return mass;
}
function game3(){
    let r=0;
    if($('#etalon').val().trim().toLowerCase().replaceAll('  ', ' ')==$('#answ').val().trim().toLowerCase().replaceAll('  ', ' ')){
        eng.shift();
        rus.shift();
        img.shift();
        audio.shift();
        $('#engv').css('visibility','hidden');
		$('#rusvisor').css('visibility','hidden');
        $('#pict0').css('visibility','hidden');
    }
    else{
        eng.push(eng[0]);
        rus.push(rus[0]);
        img.push(img[0]);
        audio.push(audio[0]);
        r=1;
    }
    if(eng.length==0)
    {
    $('#finish').css('visibility','visible');
    $('#task').css('visibility','hidden');
    }
    else{
    $('#task').css('visibility','visible');
    $('#finish').css('visibility','hidden');
    game0_t();
    if(r==1){
		$('#rusvisor').css('visibility','visible');
        $('#engv').css('visibility','visible');
				$('#pict0').css('visibility','visible');

    }
  }
}
function game4(id){
    let r=0;
		console.log(id);
        if($("#"+id).hasClass('right')){
            eng.shift();
            rus.shift();
            img.shift();
            audio.shift();
						$('#rusvisor').css('visibility','hidden');
						$('#pict0').css('visibility','hidden');
        }
        else{
            eng.push(eng[0]);
            rus.push(rus[0]);
            img.push(img[0]);
            audio.push(audio[0]);
            r=1;
        }
        if(eng.length==0)
        {
        $('#finish').css('visibility','visible');
        $('#task').css('visibility','hidden');
        }
        else{
        $('#task').css('visibility','visible');
        $('#finish').css('visibility','hidden');
        game4_t();
        if(r==1){
    		$('#rusvisor').css('visibility','visible');
        $('#engv').css('visibility','visible');
    		$('#pict0').css('visibility','visible');
        }
      }
}
function memory(){
    if($('#etalon').val().trim().toLowerCase().replaceAll('  ', ' ')==$('#answ').val().trim().toLowerCase().replaceAll('  ', ' ')){
        eng.shift();
        rus.shift();
        $('#engv').css('visibility','hidden');
    }
    else{
        eng.push(eng[0]);
        rus.push(rus[0]);
        $('#engv').css('visibility','visible');
    }
    if(eng.length==0)
    {
    $('#finish').css('visibility','visible');
    $('#task').css('visibility','hidden');
    }
    else{
    $('#task').css('visibility','visible');
    $('#finish').css('visibility','hidden');
    $('#my_answ').html("Ваш вариант: "+$('#answ').val());
    mem_t();
  }
}
function mem_t(){
    $('#eng0').html("Правильный вариант: "+eng[0]);
    $('#rus0').html(rus[0]);
    $('#etalon').val(eng[0]);
    $('#answ').val('');
    $('#answ').focus();
}
