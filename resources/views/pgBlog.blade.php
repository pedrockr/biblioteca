<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>

</style>

</head>
<body>
    @include('layout.menuInicial')
    
    <div class="hero is-light is-fullheight">
    <section class="section">
        @foreach ($post as $posts)            
        
        <div class="container">
            <div class="box">
                <h2>{{$posts->blogPost_titulo}}</h2>
                <p>{{$posts->blogPost_msg}}</p>
            </div>
        </div>
        <br>
        @endforeach
    </section>
    </div>

    
</body>
</html>