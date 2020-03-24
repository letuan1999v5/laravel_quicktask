<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'my_tasks';
    protected  $connection = 'tasks';
    public $timestamps = false;
    protected  $dateFormat = 'U';
}
