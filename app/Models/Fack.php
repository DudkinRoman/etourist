<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fack extends Model
{
    public $timestamps = false;
    protected $table = 'facultative_opis';
    protected $fillable = ['name_e', 'name_r', 'opis', 'audio', 'dop_links', 'pict', 'price', 'type', 'text_e', 'text_r'];
}
