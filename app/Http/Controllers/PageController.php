<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('index', [
            'app_title' => "Simple ToDo App",
            'page_title' => "",
            'tasks' => $tasks
        ]);
    }

    public function editPage($id)
    {
        $tasks = Task::find($id);

        return view('edit', [
            'app_title' => "Simple ToDo App",
            'page_title' => "Edit",
            'tasks' => $tasks
        ]);
    }
}
