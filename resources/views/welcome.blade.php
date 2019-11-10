<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NoticiArte</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #ffb92d;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.3);
            padding: 50px;
        }

        .title {
            font-size: 84px;
            color: #3d3d3d;
        }

        .links>a {
            color: #3d3d3d;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                NoticiArte
            </div>

            <div class="links">
                <a href="{{ route('lista-jornais') }}">Jornais</a>

                @auth
                <a href="{{ route('lista-seccaos') }}">Secções</a>
                @endauth

                <a href="{{ route('lista-noticias') }}">Notícias</a>

                @auth
                <a href="{{ route('lista-feedbacks') }}">Feedbacks</a>
                @endauth

                <a href="{{ route('docs') }}">Documentação</a>
            </div>
        </div>
    </div>
</body>

</html>