@extends('layout')





@section('content')

    <div class="row">
         <div class="col-lg-12">
            <form action="{{ route('todos.save', ['id' => $todo->id ]) }}" method="post">
                {{ csrf_field() }}
                <input type="text" class="form-control input-lg" name="todo" value="{{ $todo->todos }}" placeholder="Create a new ToDo">                
            </form>
         </div>
    </div>
   



@stop