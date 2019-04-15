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
    @include('layouts.menuInicial')
    
    <div class="hero is-light is-fullheight">
    <section class="section">
        @foreach ($post as $posts)
            <div class="container">
                <div class="box">
                    <div class="columns">
                        <div class="column is-2">
                            <figure class="image is-4by3">
                                <img src="img/logo.jpg">    
                            </figure>
                            
                        </div>                                       

                        <div class="column is-10">
                            <p class="title article-title">{{$posts->blogPost_titulo}}</p>
                            <div class="tags has-addons">
                                    <span class="tag is-rounded is-info">{{$posts->blogPost_autor}}</span>
                                    <span class="tag is-rounded">{{$posts->blogPost_data}}</span>
                            </div>

                            <div class="content article-body">
                                <p>{{$posts->blogPost_msg}}</p>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
    </section>
    </div>

    
</body>
</html>