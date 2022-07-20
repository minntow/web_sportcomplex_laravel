@extends('layout')
@section('title')Абонементы@endsection
@section('main_content')
    <br>
    <div class="row ">
        <h2 class="text-center">Абонементы</h2>
        @foreach($tasks as $task)
        <div class="alert alert-info col-md-4">
            <h3>{{$task->name_abon}}</h3>
            <b>Цена: {{$task->price_abon}} руб</b>
            <p>{{$task->description_ab}}</p>
            <p><a class="btn btn-secondary " href="/private">Купить </a></p>
        </div>
         @endforeach

        <h2 class="text-center">Услуги тренера</h2>

        @foreach($raks as $rak)
            <div class="alert alert-danger col-md-4">
                <h3>{{$rak->name_uslug}}</h3>
                <b>Цена: {{$rak->price_uslug}} руб</b>
                <p>{{$rak->description_usl}}</p>
                <p><a class="btn btn-secondary " href="/private">Купить </a></p>
            </div>
        @endforeach

    </div>
@endsection
