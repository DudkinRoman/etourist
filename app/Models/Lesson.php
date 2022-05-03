<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    public $timestamps = false;
    protected $table = 'lesson';
    protected $fillable = ['less', 'urok', 'type', 'text'];
}
