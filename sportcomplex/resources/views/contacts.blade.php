@extends('layout')
@section('title')Контакты @endsection
@section('main_content')
    <br>
    <h1 class="text-center">Контакты</h1>
    @foreach($tasks as $task)

        <div class="alert alert-danger">

                <b>{{$task->name_ad}}, {{$task->info_ad}}</b>
            <br>
                <b>Телефон: {{$task->phone_ad}}</b>
            <br>
                <b>Электронная почта: {{$task->email_ad}}</b>
        </div>
    @endforeach

@endsection
