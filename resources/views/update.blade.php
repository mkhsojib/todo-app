@extends('layout')


@section('content')

    <br> <br> <br> <br>

    <div class="row">

        <div class="col-lg-12">


            <form action="{{ route('todo.save', ['id' => $todo->id])  }}" method="post">
                {{ csrf_field() }}
                <input type="text" name="todo" value="{{ $todo->todo }}" class="form-control input-lg"
                       placeholder="Update todo">

            </form>

        </div>

    </div>

    <hr>




@endsection