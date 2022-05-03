<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dict extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'new_slovar';
    protected $fillable = ['eng', 'rus', 'tema', 'audio'];
}
