<?php

namespace App\Http\Controllers\Dict;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Dict;
class DictController extends Controller
{
//
    public function showDict(){//
        $meta_description='meta_description';
        $meta_keyword='meta_keyword';
        $name='Словарь';
        return view('dict/show',['name'=>$name,'meta_keyword'=>$meta_keyword, 'meta_description' => $meta_description]);
    }
    public function wordDict($id){//
        $meta_description='meta_description';
        $meta_keyword='meta_keyword';
        $name='Словарь';
        $data=Dict::find($id);
        return view('dict/word',['name'=>$name,'meta_keyword'=>$meta_keyword, 'meta_description' => $meta_description,'data'=>$data]);
    }
    public function wordsDict(Request $req){
        $data=Dict::where('eng','like', $req->word)->
        orWhere('rus','like',$req->word)->
        orWhere('rus','like','%'.$req->word.'%')->
        orWhere('eng','like','%'.$req->word.'%')->
        orderBy('eng','asc')->get();
        //echo count($data);
        return $data;
    }
}
