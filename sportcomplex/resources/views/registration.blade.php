@extends('layout')
@section('title')Регистрация@endsection
@section('main_content')

    <div class ="modal-body py 0">
        <h2 class="text-warning">Регистрация</h2>

        <div class="container mt-15">
            @include('inc.messages')
        </div>

        <form method="post" action="/registration">
            @csrf
            <h4>Ваше имя</h4>
            <input type="name" name="name" id="name" placeholder="Введите имя" class="form-control"> <br>
            <h4>Email</h4>
            <input type="email" name="email" id="email" placeholder="Введите email" class="form-control">
            <br>
            <h4>Ваш пароль</h4>
            <input type="password" name="password" id="password" placeholder="Введите пароль" class="form-control"> <br>
            <button type="submit" class="btn-lg btn-success">Создать пользователя</button>
        </form>
    </div>


@endsection

