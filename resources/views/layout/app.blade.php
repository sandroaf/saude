<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css">
    <title>Aplicação Saúde - @yield('title')</title>
</head>
<body>
    <div class="logo"><img src="{{asset('img/saude.png')}}"/></div>
    <div class="container">
        <h1>@yield('titulo')</h1>
        @yield('apresentacao')

        <ul class="menu">
            <li class="menu-item"><a href="{{url('/dadosimc')}}">Cáculo IMC</a></li>
            <li class="menu-item"><a href="{{url('/dadossono')}}">Análise Sono</a></li>
        </ul>

        @yield('content')
    </div>

</body>
</html>
