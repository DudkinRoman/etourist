<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Less extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'less';
    protected $fillable = ['name', 'type', 'public'];
}
