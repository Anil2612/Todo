@extends('layout')





@section('content')

    <div class="row">
         <div class="col-lg-12 ">
            <form action="/create/todo" method="post">
                {{ csrf_field() }}
                <input type="text" class="form-control input-lg" name="todo" placeholder="Create a new ToDo">                
            </form>
         </div>
    </div>
    <hr>
    @foreach($todos as $todo)
        {{ $todo->todos }} 
        <a href ="{{ route('todo.delete', ['id'=>$todo->id]) }}" class="btn btn-danger">X</a>
        <a href ="{{ route('todo.update', ['id'=>$todo->id]) }}" class="btn btn-info btn-xs">update</a>
        @if(!$todo->completed)
            <a href="{{ route('todos.completed', [ 'id' => $todo->id ]) }}" class="btn btn-xs btn-success">Mark as completed</a>
        @else
            <span>Completed!</span>
        @endif
        <hr>
    @endforeach



@stop