<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facultative extends Model
{
    public $timestamps = false;
    protected $table = 'facultative';
    protected $fillable = ['less', 'urok', 'type', 'text'];
}
