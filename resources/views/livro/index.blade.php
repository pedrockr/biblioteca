<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>criar</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
            td{font-size: 8pt;}
            .semQuebra{white-space: nowrap;}
        
        </style>

</head>
<body>

    @include('layouts.app')  
  
    <div class="hero is-fullheight is-light ">
        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column is-2">                       
                        @include('layouts.asideUser')
                    </div>                                       

                    <div class="column is-10">
                        <div class="box">
                                <nav class="level">
                                        <div class="level-item">
                                          <p>Livros Cadastrados</p>
                                        </div>
                                    </nav> 
                            <div class="column is-8">
                                <form method="post" action="{{url('/livro/index')}}">
                                    {{ csrf_field() }}

                                    <div class="field is-horizontal">

                                        <div class="field-label is-normal">
                                            <label class="label">Livro</label>
                                        </div>
                                        <div class="field-body">
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input is-small" type="search" name="buscaLivro" id="buscaLivro" >
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="field-label">
                                                <!-- espaço -->
                                        </div>

                                    
                                        <div class="field-label is-normal">
                                            <label class="label">Autor</label>
                                        </div>
                                        <div class="field-body">
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input is-small" type="search" name="buscaAutor" id="buscaAutor" >
                                                </div>
                                            </div>
                                        </div>
                                    

                                        <div class="field-label">
                                                <!-- espaço -->
                                        </div>
                                        <div class="field">
                                            <div class="field">
                                                <div class="control">
                                                    <button class="button is-small is-link " type="submit">buscar</button>
                                                    <a class="button is-text" href="/biblioteca/public/livro">Reset</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
    
                            <hr>

                            <table class="table is-fullwidth">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Livro</td>
                                        <td>ISBN</td>
                                        <td>Autor</td>
                                        <td>Editora</td>
                                        <td>Edição</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($livroBusca as $livroBusca)
                                    <tr>
                                        <td>{{ $livroBusca -> id }}</td>
                                        <td>{{ $livroBusca -> nome_livros }}</td>
                                        <td>{{ $livroBusca -> isbn_livros }}</td>
                                        <td>{{ $livroBusca -> nome_autores }}</td>
                                        <td>{{ $livroBusca -> nome_editoras }}</td> 
                                        <td>{{ $livroBusca -> edicao_livros }}</td>
                                                                                                                      

                                        <td>
                                        <div class="buttons has-addons">
                                            <a href="{{ route('livro.edit', $livroBusca->id)}}" class="button is-link is-small">Editar</a>

                                            <form action="{{ route('livro.destroy', $livroBusca->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="button is-danger is-small" type="submit">Delete</button>
                                            </form>
                                        </div>
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