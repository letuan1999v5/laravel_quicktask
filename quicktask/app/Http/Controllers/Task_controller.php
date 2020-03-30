<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task_controller extends Controller
{
    public function mainpage()
    {
        return view('tasks', [
            'tasks' => Task::orderBy('created_at', 'asc')->get()
        ]);
    }

    public function taskRequest(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/');
    }

    public function deleteTask($id) {
        Task::findOrFail($id)->delete();

        return redirect('/');
    }
}
