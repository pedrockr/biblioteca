<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>editar</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>

    @include('layouts.app')    
    <div class="hero is-fullheight is-light ">
        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column is-2">
                        @include('layouts.asideAdmin')
                    </div>                                       

                    <div class="column is-10">
                        <div class="box">
                           @foreach($usuario as $usuario)
                           {{$usuario -> id}}<br>
                           {{$usuario -> name}}<br>
                           {{$usuario -> email}}<br>
                           {{$usuario -> admin}}
                      
                                        <td>
                                            <form action="{{ route('usuario.destroy', $usuario->id)}}" method="post">
                                              @csrf
                                              @method('DELETE')
                                              <button class="button" type="submit">Delete</button>
                                            </form>

                           @endforeach

                           <a href="/biblioteca/public/usuario/create" class="button">Cadastrar</a>


                        </div>                         
                    </div>                    
                </div>            
            </div>                
        </section>
    </div>
    
</body>
</html>