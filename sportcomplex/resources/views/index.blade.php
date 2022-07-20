@extends('layout')
@section('title')Тренеры@endsection
@section('main_content')
    @foreach($tasks as $task)

        <div class="alert alert-info">

            <a href="/tasks/{{$task->id}}">{{$task->first_n_tr}} {{$task->mid_n_tr}}</a>

        </div>
    @endforeach
@endsection
