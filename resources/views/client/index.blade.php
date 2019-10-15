<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>订订喵</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>

    </style>
</head>
<body>
<div class="flex-center position-ref full-height">


    <div class="content">



        <div class="title m-b-md">
            @foreach($banner as $b)
                <p><img src="{{$b->img}}" alt=""></p>
                <a href="http://{{ $b->route_url }}" >{{ $b->title }}</a>
            @endforeach
        </div>


        <div class="title m-b-md">
            @foreach($article as $a)
                <p><img src="{{ $a->img }}" alt=""></p>
                <div class="title"> <span>{{ $a->title }}</span></div>
            @endforeach
        </div>


        <div class="title m-b-md">
            @foreach($activity as $v)
                <p><img src="{{ $v->img }}" alt=""></p>
                <span>{{ $v->title }}</span>
            @endforeach
        </div>


        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
</body>
</html>
