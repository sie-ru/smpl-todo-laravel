<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class TaskController extends Controller
{
    // CREATE
    public function add(Request $request)
    {   
        $data = $request->only('task');
        Task::create($data);
        return redirect()->back();
    }
    // DELETE
    public function remove(Request $request)
    {
        $task = Task::find($request->id);
        if(!$task) {
            abort(404);
        }
        $task->delete();
        return redirect()->back();
    }
    // UPDATE
    public function edit(Request $request)
    {
        $data = $request->only('id', 'task');
        $task = Task::find($data['id']);

        if(!$task){
            abort(404);
        }
        $task->task = $data['task'];
        $task->save();
        
        return redirect()->route('index');
    }

    
}
