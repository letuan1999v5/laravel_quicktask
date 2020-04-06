<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = [
        'id',
        'name'
    ];
    public $timestamps = true;
}
