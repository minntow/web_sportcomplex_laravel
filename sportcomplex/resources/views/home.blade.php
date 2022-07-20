@extends('layout')
@section('title')Главная страница @endsection
@section('main_content')

    <main>
        <div class ="modal-body py 0">
            <h1 class="text-center text-warning">Наши предложения:</h1>
            <div class="row">
                <div class="col-lg-4">
                    <h2>Абонемент</h2>
                    <p>От 1500 ₽</p>
                    <p><a class="btn btn-secondary" href="/abonements">Далее </a></p>
                </div>

                <div class="col-lg-4">
                    <h2>Услуги тренера</h2>
                    <p>От 400 ₽</p>

                    <p><a class="btn btn-secondary" href="/abonements">Далее </a></p>
                </div>
                <div class="col-lg-4">
                    <h2>Солярий</h2>
                    <p>От 20 ₽/мин</p>
                    <p><a class="btn btn-secondary" href="/solyar">Далее </a></p>
                </div>


            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading text-warning">Зачем заниматься спортом?</h2>
                    <p class="lead">Благодаря спортивным нагрузкам улучшается кровоснабжение мышц и регуляция их деятельности нервной системой — происходит рост мышечной массы. Занятия спортом помогают отвлечься от проблем и снизить уровень стресса. При здоровом подходе к спорту укрепляется иммунитет, а следовательно, улучшается самочувствие.</p>
                </div>
                <div class="col-md-5">
                    
                    <img src='https://cdn1.savepice.ru/uploads/2022/3/24/7b36320240d8a95eee8ae11642129bff3-full.jpg'>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading text-warning">Для чего нужно заниматься в тренажерном зале? </h2>
                    <p class="lead">Тренировки в зале улучшают обмен веществ, кровообращение, работу сердечно-сосудистой системы и мозга. Также налаживается функционирование органов пищеварения и мочеполовой системы. Это отличная профилактика гипоксии и застойных явлений в организме. В зале вам помогут опытные тренера, а также присутствует большое разнообразие тренажеров на разные группы мышц.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src='https://cdn1.savepice.ru/uploads/2022/3/24/b2763d93d71d7162175701ad8457ada03-full.jpg'>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading text-warning">Почему именно наш зал?</h2>
                    <p class="lead">Именно у нас вы почувтвуйте себя живым, не будете переплачивать за услуги, а также получите удовольстие от процесса. Мотивация будет только расти и никогда не покинет вас. Вы останетесь довольными и будете рады результату!</p>
                </div>
                <div class="col-md-5">
                    <img src='https://cdn1.savepice.ru/uploads/2022/2/16/a6a42b53741fb084f961adbb036453d5-full.jpg'>
                </div>
            </div>
            <hr class="featurette-divider">
        </div>
            <footer class="container">
                <p>© 2021–2022 Красноярск. · <a href="https://www.instagram.com/minntow/"> (@inst)</a> · <a href="https://vk.com/ahminntow"> (@vk)</a></p>
            </footer>


@endsection
