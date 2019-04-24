<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>criar</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>

    @include('layouts.app')  
  
    <div class="hero is-fullheight is-light ">
        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column is-2">
                       
                        @include('admin.asideAdmin')
                    </div>                                       

                    <div class="column is-10">
                        <div class="box">

                            <form method="post" action="{{route('blog.store')}}">
                                @csrf
                            <input type="text" name="blogPost_titulo">
                            <input type="text" name="blogPost_msg">
                            <input type="text" name="blogPost_autor">
                            <input type="text" name="blogPost_data">

                            <button type="input">Atualizar</button>
                            
                           	</form>
                        </div>                         
                    </div>                    
                </div>            
            </div>                
        </section>
    </div>
    
</body>
</html>