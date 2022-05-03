<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicWord extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'topic_word';
    protected $fillable = ['en', 'ru', 'dop'];
}
