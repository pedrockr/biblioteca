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
                            <nav class="level">
                                <div class="level-item">
                                  <p>Criar nova postagem</p>
                                </div>
                            </nav> 

                            <form method="post" action="{{route('blog.store')}}">
                                @csrf
                                <div class="field is-horizontal">
                                  <div class="field-label is-normal">
                                    <label class="label">De</label>
                                  </div>
                                  <div class="field-body">
                                    <div class="field">
                                      <p class="control is-expanded">
                                        <input class="input" type="text" placeholder="Nome Autor" name="blogPost_autor">
                                      </p>
                                    </div>
                                    <div class="field">
                                      <p class="control is-expanded">
                                        <input class="input" type="date" placeholder="Data" name="blogPost_data">
                                      </p>
                                    </div>
                                  </div>
                                </div>

                                <div class="field is-horizontal">
                                  <div class="field-label is-normal">
                                    <label class="label">Titulo</label>
                                  </div>
                                  <div class="field-body">
                                    <div class="field">
                                      <div class="control">
                                        <input class="input" type="text" placeholder="Titulo da Postagem" name="blogPost_titulo">
                                      </div>

                                    </div>
                                  </div>
                                </div>

                                <div class="field is-horizontal">
                                  <div class="field-label is-normal">
                                    <label class="label">Postagem</label>
                                  </div>
                                  <div class="field-body">
                                    <div class="field">
                                      <div class="control">
                                        <textarea class="textarea" placeholder="Crie sua postagem aqui" name = "blogPost_msg"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="field is-horizontal">
                                  <div class="field-label">
                                    <!-- Left empty for spacing -->
                                  </div>
                                  <div class="field-body">
                                    <div class="field">
                                      <div class="control">
                                        <button class="button is-link">
                                          Criar postagem
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                
                            </form>

                            <hr>

                            <nav class="level">
                                <div class="level-item">
                                  <p>Postagens ativas</p>
                                </div>
                            </nav> 

                            <table class="table is-fullwidth">
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
                                            <a href="{{ route('blog.edit', $blog->id)}}" class="button is-link">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('blog.destroy', $blog->id)}}" method="post">
                                              @csrf
                                              @method('DELETE')
                                              <button class="button is-danger" type="submit">Delete</button>
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