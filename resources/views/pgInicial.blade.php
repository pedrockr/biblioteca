<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $config[0] -> NavBrand }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        
        .has-bg-img { 
            background: url('{{"img/" . $config[0]->imgHero . ".jpg"}}');
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }   
    </style>

</head>
<body>

    @include('layouts.menuInicial')


    <section class="hero {{$config[0]->corHero}} is-fullheight-with-navbar has-bg-img">
        <div class="hero-body ">
            <div class="container has-text-centered">
                <div class="content is-large">
                <h1 class="title">{{ $config[0]->tituloPgInicial }}</h1>
                <h2 class="subtitle">{{ $config[0]->subtituloPgInicial }}</h2>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>