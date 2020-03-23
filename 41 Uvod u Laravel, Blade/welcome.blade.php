<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    </head>
    <body>
    <p>Hello, World!</p>

    @php
        $i=5;
    @endphp

    {{--if naredba u .blade.php--}}
    @if($i%2 == 0)
    <p>{{$i}} je paran Broj</p>
    @else
    <p>{{$i}} je neparan broj</p>
    @endif

    {{--while naredba u .blade.php--}}
    @while($i < 10)
    <p>{{++$i}}</p>
    @endwhile

    {{--for naredba u .blade.php--}}
    @for($i=1; $i< 11; $i++)
    <p>{{$i}}</p>
    @endfor

    {{--preuzeti vreme sa racunara i ispisati PM ili AM--}}
    
    {{$vreme=date("a")}};
    @if($vreme== "pm")
    <p>Popodne</p>
    @else
    <p>prepodne</p>
    @endif

    @php
    $niz = array("a", "b", "c"); //$niz = ["a", "b", "c"];
    @endphp

    @foreach($niz as $n)
    <p>{{$n}}</p>
    @endforeach

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
                    Aleksa
                </div>
                <div>
                    <img src="{{asset('img/medved.jpeg')}}">
                </div>
                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://itbootcamp.rs/" target="_blank">IT Bootcamp</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
