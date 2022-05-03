<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memory extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'memory';
    protected $fillable = ['word', 'difination', 'tn', 'mem'];
}
