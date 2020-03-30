<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
/**/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['middleware' => ['web']], function () {
    /**
     * Show Task Dashboard
     */
    Route::get('/','Task_controller@mainpage');

    /**
     * Add New Task
     */
    Route::post('/task', 'Task_controller@taskRequest');

    /**
     * Delete Task
     */
    Route::delete('/task/{id}','Task_controller@deleteTask');
});
