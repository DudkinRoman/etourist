<?php
namespace App\Http\Controllers\Lesson;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;// для работы DB
use  App\Models\Lesson;
use  App\Models\Less;
use  App\Models\Facultative;
use  App\Models\Fack;
class LessonController extends Controller
{
    //выбор всех уроков в зависимости от типов
    public function lessons($type_lesson){
        if($type_lesson==0)
            $lessons=Less::where('type',$type_lesson)->get();
        else
            $lessons=Fack::where('type',$type_lesson)->get();
        $meta_description='meta_description';
        $meta_keyword='meta_keyword';
        $name='Уроки';
        return view('lesson/lessons',['name'=>$name,'meta_keyword'=>$meta_keyword, 'meta_description' => $meta_description,'data'=>$lessons,'type_lesson'=>$type_lesson]);
    }
    // форма создания нового урока
    public function AddNew($type_lesson,$ud){
         return view('lesson/add',['type_lesson'=>$type_lesson,'ud'=>$ud]);
    }
    // форма создания нового урока
    public function AddLesson(Request $req){
        Less::create($req->all());
        $type=$req->type;
        $ud=$req->ud;
        return view('lesson/add',['type'=>$type,'ud'=>$ud]);
    }

    public function selectL(){// вывод менюшки
        return view('lesson/type');
    }
    public function less($type_lesson,$less){// форма все задания в уроке
        $urok=$this->selLess($type_lesson,$less);
        $meta_description='meta_description';
        $meta_keyword='meta_keyword';
        $name='Задания';
        if($type_lesson==1)
        {
            $fack=DB::table('facultative_opis')->where('id',$less)->first();
            $name=$fack->name_e;
        }
        foreach($urok as $u)
        {
            $data[$u['id']]=$u['urok'];
            $dtp[$u['id']]=$u['type'];
        }
        asort($data);
        return view('lesson/less',['name'=>$name,'meta_keyword'=>$meta_keyword, 'meta_description' => $meta_description,'data'=>$dtp,'nums'=>$data,'type_lesson'=>$type_lesson,'less'=>$less]);
       }
    public function urok($type_lesson,$less,$urok){
        if($urok==0){
                    $this->less($type_lesson,$less);// no work
                }
            else{
        $task=$this->selUrok($type_lesson,$urok);
        $meta_description='meta_description';
        $meta_keyword='meta_keyword';
        $name='Урок ';
        $next=$this->nextUrok($type_lesson,$less,$urok);
        if($task->type==0)
        return view('lesson/test0',['name'=>$name,'meta_keyword'=>$meta_keyword, 'meta_description' => $meta_description, 'task'=>$this->cleanText($task->text),'next'=>$next]);
        elseif($task->type==1)
        return view('lesson/test1',['name'=>$name,'meta_keyword'=>$meta_keyword, 'meta_description' => $meta_description, 'task'=>$this->massAllTask($task->text),'next'=>$next]);
        elseif($task->type==2)
        return view('lesson/test2',['name'=>$name,'meta_keyword'=>$meta_keyword, 'meta_description' => $meta_description, 'task'=>$this->massAllTask($task->text),'next'=>$next]);
        elseif($task->type==3)
        return view('lesson/test3',['name'=>$name,'meta_keyword'=>$meta_keyword, 'meta_description' => $meta_description, 'task'=>$this->massAllTask($task->text),'next'=>$next]);
        elseif($task->type==4)
        return view('lesson/test4',['name'=>$name,'meta_keyword'=>$meta_keyword, 'meta_description' => $meta_description, 'task'=>$this->massAllTask($task->text),'next'=>$next]);
        elseif($task->type==5)
        return view('lesson/test5',['name'=>$name,'meta_keyword'=>$meta_keyword, 'meta_description' => $meta_description, 'task'=>$this->massAllTask($task->text),'next'=>$next]);
        elseif($task->type==6)
        return view('lesson/test6',['name'=>$name,'meta_keyword'=>$meta_keyword, 'meta_description' => $meta_description, 'task'=>$this->mass6Task($task->text),'next'=>$next]);
        }

    }
    public function nextUrok($type_lesson,$less,$urok){
        if($type_lesson==0)$table='lesson';
        elseif($type_lesson==1)$table='facultative';

        $task=$this->selUrok($type_lesson,$urok);
        $next['urok']=$task->urok+1;
        $next['type_lesson']=$type_lesson;

        if($tk=DB::table($table)->where('less', $less)->where('urok', $next['urok'])->first()){
            $next['less']=$less;
            $next['id']=$tk->id;
        }
        else{
         $task=DB::table($table)->where('less', $less+1)->where('urok', 1)->first();
         $next['less']=$less+1;
         $next['id']=$task->id;
         $next['urok']=1;
        }

       return $next;
    }
    public function previousUrok($type,$less,$urok){
        $task=$this->selUrok($type,$urok);
        return $task;
    }
    public function selUrok($type,$urok){//выбор задания в зависимости от типа
        if($type==0)
        $task=DB::table('lesson')->where('id', $urok)->first();
        elseif($type==1)
        $task=DB::table('facultative')->where('id', $urok)->first();
        return $task;
    }
    public function selLess($type,$less){//выбор урока в зависимости от типа
        if($type==0)
            $urok=Lesson::where('less',$less)->get();
        elseif($type==1)
            $urok=Facultative::where('less',$less)->get();
        return $urok;
    }
    public function massAllTask($text){// преобразуем в массив текст с таблицы заданий в масивы задание и ответ
        $mass=explode(PHP_EOL,$text);// PHP_EOL
        $answer=array();
        $i=0;
        foreach($mass as $val0)
        {
            if($val0&&trim($val0)!==''){
                $task=explode(';',trim($val0));
                $answer[$i]=trim($task[0]);
                $response[$i]=trim($task[1]);
                $i++;
            }
        }
        return array($answer,$response);
    }
    public function mass6Task($text){// преобразуем в массив текст с таблицы заданий в масивы задание 6 и ответ
        $mass=explode(PHP_EOL,$text);// PHP_EOL
        $answer=array();
        $i=0;
        foreach($mass as $val0)
        {
            if($val0&&trim($val0)!==''){
                $task=explode(';',trim($val0));
                $en1[$i]=trim($task[0]);
                $en2[$i]=trim($task[1]);
                $en3[$i]=trim($task[2]);
                $response[$i]=trim($task[3]);
                if($task[4])$tr1[$i]=trim($task[4]);else $tr1[$i]='';
                if($task[5])$tr2[$i]=trim($task[5]);else $tr2[$i]='';
                if($task[6])$tr3[$i]=trim($task[6]);else $tr3[$i]='';
                $i++;
            }
        }
        return array($en1,$en2,$en3,$response,$tr1,$tr2,$tr3);
    }
    public function cleanText($text){
        $search=array('\\');
        $replace=array('');
        $text=str_replace($search, $replace, $text);
        return $text;
    }

}
