<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
    	$todos = Todo::all();	//fetching all data from the database
    	return view('todos')->with('todos', $todos);	//passing the fetched data in todos to the VIEW
    }
    public function store(Request $request)
    {
    	$todo = new Todo;
    	$todo->todos = $request->todo;	//request->todo is the todo from frontend and in $todo->todos the todos is the column name
    	$todo->save();	//save in database
    	return redirect()->back();	//redirect back to /todos
    }
    public function delete($id){
		$todo = Todo::find($id);
		$todo->delete();
		return redirect()->back();	
	}
	public function update($id)
	{
		$todo = Todo::find($id);
		return view('update')-> with('todo', $todo);
	}
	public function save(Request $request, $id){
		$todo = Todo::find($id);
		$todo->todos = $request->todo;
		$todo->save();
		return redirect()->route('todos');
	}
	public function completed($id){
		$todo = Todo::find($id);
		$todo->completed = 1;
		$todo->save();
		return redirect()->back();
	}
}
 