<?php

namespace App\Http\Controllers\Games;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Dict;
use  App\Models\TopicWord;
class GameController extends Controller
{
public function topic(){
        $dt=TopicWord::all();
        foreach ($dt as $top) {
            $dtp['id']=$top->id;
            $dtp['ru']=$top->ru;
            $dtp['en']=$top->en;
            $dtp['dop']=$top->dop;
            $dtp['pict']=Dict::where('eng','=',$top->dop)->first('id');
            $data[]=$dtp;
        }
        return view('games/topic',['data'=>$data]);
    }
public function top($id){
    if($id!==0){
        $top=TopicWord::find($id);
        $dtp['id']=$top->id;
        $dtp['ru']=$top->ru;
        $dtp['en']=$top->en;
        $dtp['pict']=Dict::where('eng','=',$top->dop)->first('id');
    }
    else{
        $dtp['id']=0;
        $dtp['ru']="Все слова";
        $dtp['en']="All words";
        $dtp['pict']=rand(1,1000);
    }
    return view('games/top',['data'=>$dtp]);
    }
public function game($topic,$game){
    if($topic==0)
        $dtp=Dict::all()->inRandomOrder()->take(30)->get();
    else
        $dtp=Dict::where('tema','=',$topic)->inRandomOrder()->take(30)->get();
    switch ($game) {
        case '0':
            return view('games/game0',['data'=>$dtp]);
            break;
        case '1':
            return view('games/game1',['data'=>$dtp]);
            break;
        case '2':
            return view('games/game2',['data'=>$dtp]);
            break;
        case '3':
            return view('games/game3',['data'=>$dtp]);
            break;
        case '4':
            return view('games/game4',['data'=>$dtp]);
            break;
        default:
            return view('games/topic');
            break;
    }

    }
}
