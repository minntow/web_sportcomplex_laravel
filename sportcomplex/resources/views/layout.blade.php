<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white" >
<header class="p-3 bg-secondary text-white">

    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <h5 class="my-0 mr-md-auto font-weight-normal text-warning me-4">ТРЕНАЖЕРНЫЙ ЗАЛ</h5>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 text-dark" >Главная</a></li>
                <li><a href="/about_us" class="nav-link px-2 text-dark" >О нас</a></li>
                <li><a href="/contacts" class="nav-link px-2 text-dark">Наши залы</a></li>
                <li><a href="/abonements" class="nav-link px-2 text-dark">Абонементы</a></li>
                <li><a href="/solyar" class="nav-link px-2 text-dark">Солярий</a></li>
                <li><a href="/treneri" class="nav-link px-2 text-dark">Тренеры</a></li>
            </ul>



            <div class="text-end">
                <a class="btn btn-outline-light" href="/login">Войти</a>
                <a class="btn btn-warning" href="/otzivi">Отзывы</a>
            </div>
        </div>
    </div>
</header>
<div class="container">
    @yield('main_content')
</div>

</body>
</html>
