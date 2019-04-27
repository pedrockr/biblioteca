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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>Titulo</td>
                                        <td>Titulo</td>
                                        <td>Mensagem</td>
                                        <td>Autor</td>                                    
                                        <td>Data</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blog as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->blogPost_titulo }}</td>
                                        <td>{{ $blog->blogPost_msg }}</td>
                                        <td>{{ $blog->blogPost_autor }}</td>
                                        <td>{{ $blog->blogPost_data }}</td>

                                        <td>
                                            <a href="{{ route('blog.edit', $blog->id)}}" class="button">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('blog.destroy', $blog->id)}}" method="post">
                                              @csrf
                                              @method('DELETE')
                                              <button class="button" type="submit">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                    @endforeach                                    
                                </tbody>                                
                                
                            </table>

                        </div>                         
                    </div>                    
                </div>            
            </div>                
        </section>
    </div>
    
</body>
</html>