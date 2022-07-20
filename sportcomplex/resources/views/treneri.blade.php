@extends('layout')
@section('title')Тренеры@endsection
@section('main_content')
    <h1 class="text-center">Тренеры</h1>
    @foreach($tasks as $task)

        <div class="alert alert-info">
            <h3>{{$task->first_n_tr}} {{$task->mid_n_tr}}</h3>

            <b> <br> Достижения: {{$task->talent_tr}}
                <br> Услуги: {{$task->uslug_tr}}
                <br> Телефон: {{$task->phone_tr}}</b>


        </div>
    @endforeach
@endsection

