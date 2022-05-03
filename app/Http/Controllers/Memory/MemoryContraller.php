<?php
namespace App\Http\Controllers\Memory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;// для работы DB
use  App\Models\Memory;
class MemoryContraller extends Controller
{
public function MemoryGame(){
    $dtp=Memory::all()->take(30);
    return view('cards/teach',['data'=>$dtp]);
}
}
