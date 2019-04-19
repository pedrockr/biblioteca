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
        <div class="container">
                <div class="columns">
                    <div class="column is-2">
                        <form action="{{url('/buscaLivro')}}" method="post">
                            {{ csrf_field() }}
                            <input class="input has-text-centered" id="buscaNome" name="buscaNome" type="search" placeholder="buscaLivro">

                            <input class="input has-text-centered" id="buscaAutor" name="buscaAutor" type="search" placeholder="buscaAutor">

                            <input class="input has-text-centered" id="buscaEditora" name="buscaEditora" type="search" placeholder="buscaEditora">
                            
                            <button type="submit">buscar</button>

                        </form>                            
                    </div>                                       

                    <div class="column is-10">
                        <div class="box">
                        <table class="table">                            
                            <thead>
                                <tr>
                                    <td>Nome</td>
                                    <td>QTD</td>
                                    <td>Autor</td>
                                    <td>Editora</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($busca as $busca)
                                <tr>
                                    <td>{{ $busca->nome_livros }}</td>
                                
                                    <td>{{ $busca->qtd_livros }}</td>
                                    <td>{{ $busca->nome_autores }}</td>
                                    <td>{{ $busca->nome_editoras }}</td>
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