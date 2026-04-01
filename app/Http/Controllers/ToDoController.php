<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ToDoController extends Controller{
    public function index()
    {
        $user = Auth::user()->todos;
        
        return view("todos.index", compact("user"));
    }
    public function show(ToDo $todo){
        return view("todos.show",compact("todo"));
    }
    public function create(ToDo $todo){
        $user = Auth::user()->id;
        return view("todos.create", compact("todo","user"));
    }
    public function store(Request $request){
        $validated = $request->validate([
            "content" =>["required","max:255"],
            "userid" => ["required"]
        ]);
        ToDo::create([
            "content" => $validated["content"],
            "user_id" => $validated["userid"],
            "completed" => false
        ]);
        return redirect("/todos");
    }
    public function edit(ToDo $todo){
        return view("todos.edit",compact("todo"));
    }
    public function update(Request $request,ToDo $todo){
        $validated = $request->validate([
            "content" =>["required","max:255"],
            "completed" => ["boolean"]
        ]);
        $todo->content = $validated["content"];
        $todo->completed = $validated["completed"];
        $todo->save(); 
        return view("/todos.show",compact("todo"));  
    }
        public function destroy(ToDo $todo){
        $todo->delete();
        return redirect("/todos");
    }
} 
