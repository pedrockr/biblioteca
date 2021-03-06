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
                       
                        @include('layouts.asideAdmin')
                    </div>                                       

                    <div class="column is-10">
                        <div class="box">

                            <nav class="level">
                                <div class="level-item">
                                  <p>Modificar postagem</p>
                                </div>
                            </nav> 

                        <form method="post" action="{{route('blog.update', $blog->id)}}">
                        @method('PATCH')
                                @csrf
                                <div class="field is-horizontal">
                                  <div class="field-label is-normal">
                                    <label class="label">De</label>
                                  </div>
                                  <div class="field-body">
                                    <div class="field">
                                      <p class="control is-expanded">
                                        <input class="input" type="text" placeholder="Nome Autor" name="blogPost_autor" value="{{ $blog->blogPost_autor }}">
                                      </p>
                                    </div>
                                    <div class="field">
                                      <p class="control is-expanded">
                                        <input class="input" type="date" placeholder="Data" name="blogPost_data" value="{{ $blog->blogPost_data }}">
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
                                        <input class="input" type="text" placeholder="Titulo da Postagem" name="blogPost_titulo" value="{{ $blog->blogPost_titulo }}">
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
                                        <textarea class="textarea" placeholder="Crie sua postagem aqui" name = "blogPost_msg" value="{{ $blog->blogPost_msg }}">{{ $blog->blogPost_msg }}</textarea>
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
                                          Atualizar postagem
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>                               
                            
                        </div>                         
                    </div>                    
                </div>            
            </div>                
        </section>
    </div>
    
</body>
</html>