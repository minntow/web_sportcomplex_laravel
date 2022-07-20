@extends('layout')
@section('title')Отзывы@endsection
@section('main_content')
   <div class ="modal-body py 0">
       <h2>Форма добавления отзыва</h2>

    <div class="container mt-15">
    @include('inc.messages')
    </div>

<form method="post" action="/otzivi/check">
    @csrf
    <h4>Email</h4>
    <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"> <br>
    <h4>Тема сообщения</h4>
    <input type="text" name="subject" id="subject" placeholder="Введите тему" class="form-control"> <br>
    <h4>Сообщение</h4>
    <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea> <br>
    <button type="submit" class="btn-lg btn-success">Отправить</button>
</form>
   </div>

   <br>
   <h2>Все отзывы</h2>
   @foreach($review as $el)
       <div class="alert alert-warning">
           <h3>{{$el->subject}}</h3>
           <b>{{$el->email}}</b>
           <p>{{$el->message}}</p>
       </div>
   @endforeach
@endsection
