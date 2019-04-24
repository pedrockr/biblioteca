<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>{{ $config[0] -> NavBrand }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>

    .has-cor-fundo{
        background-color: {{ $config[0] -> corBusca }};
    }

</style>

</head>
<body>
    @include('layouts.menuInicial')
    
    <div class="hero has-cor-fundo is-fullheight">
    <section class="section">
        <div class="container">
                <div class="columns">
                    <div class="column is-2">
                        <form action="{{url('/buscaLivro')}}" method="post">
                            {{ csrf_field() }}
                            <div class="field">
                            <label class="label">Nome Livro</label>
                            <div class="control">
                            <input class="input has-text-centered is-dark" id="buscaNome" name="buscaNome" type="search" placeholder="Livro">
                            </div>
                            </div>

                            <div class="field">
                            <label class="label">Autor</label>
                            <div class="control">
                            <input class="input has-text-centered is-dark" id="buscaAutor" name="buscaAutor" type="search" placeholder="Autor">
                            </div>
                            </div>

                            <div class="field">
                            <label class="label">Editora</label>
                            <div class="control">
                            <input class="input has-text-centered is-dark" id="buscaEditora" name="buscaEditora" type="search" placeholder="Editora">
                            </div>
                            </div>
                            
                            <button class="button is-link" type="submit">Buscar</button>
                            <a class="button is-text" href="buscar">Reset</a>

                        </form>                            
                    </div>                                       

                    <div class="column is-10">
                        <div class="box">
                        <table class="table">                            
                            <thead>
                                <tr>
                                    <td>Nome</td>
                                    <td>Autor</td>
                                    <td>Editora</td>                                    
                                    <td>Genero</td>
                                    <td>Prateleira</td>
                                    <td>Livros Disponiveis</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($busca as $busca)
                                <tr>
                                    <td>{{ $busca->nome_livros }}</td> 
                                    <td>{{ $busca->nome_autores }}</td>
                                    <td>{{ $busca->nome_editoras }}</td>                                    
                                    <td>{{ $busca->nome_generos }}</td>
                                    <td>{{ $busca->identificador_prateleira }}</td>
                                    <td>{{ $busca->qtd_livros }}</td>
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