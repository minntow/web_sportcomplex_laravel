@extends('layout')
@section('title')Авторизация@endsection
@section('main_content')

    <div class="modal-body py 0">
        <h2>Вход</h2>
        <form class="form-group" method="post" action="/login">
        @csrf
        <div class="form-group">
            <label for="email" class="col-form-label-lg">Ваш email</label>
            <input class="form-control" id="email" name="email" type="text" value="" placeholder="Email">
            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password" class="col-form-label-lg">Пароль</label>
            <input class="form-control" id="password" name="password" type="password" value="" placeholder="Пароль">
            @error('password')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <button class="btn btn-lg btn-success" type="submit" name="sendMe" value="1 ">Войти</button>
            <br>
            <br>
            <a href="/registration" class="text-warning">Регистрация</a>
        </div>

        </form>
    </div>

@endsection
