@extends('layout')
@section('title')Контакты @endsection
@section('main_content')
    <br>
    <div class="row ">
    <h2 class="text-center">Солярий</h2>
    @foreach($tasks as $task)
        <div class="alert alert-warning col-md-4">
            <h3>{{$task->name_sol}}</h3>
            <b>Цена: {{$task->price_sol}} руб</b>
            <p>{{$task->desc_sol}}</p>
            <p><a class="btn btn-secondary " href="/private">Купить </a></p>
        </div>
    @endforeach
    </div>
@endsection
