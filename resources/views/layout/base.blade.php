<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>{{config('app.name')}} :: @yield('titulo')</title>
</head>
<body>
    <div class="logo">
        <img src="{{asset('img/logo.png')}}" alt="Toro Digital">
    </div>

    <div class="container">
        @yield('conteudo')
    </div>

    <footer>
        <p>Digital - 2022</p>
    </footer>
</body>
</html>