<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>criar</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        
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
                            
                                <form method="post" action="{{route('livro.store')}}">
                                    @csrf  
                                    <div class="field is-horizontal">
                                            <div class="field-label">
                                                <!-- Left empty for spacing -->
                                            </div>
                                            <div class="field-body">
                                                <div class="field">
                                                <div class="control">
                                                    <label class="label is-large" for="nome_livros">Cadastrar Livros</label>
                                                </div>
                                                </div>
                                            </div>
                                        </div>                                  

                                    <div class="field is-horizontal">
                                        <div class="field-label is-normal">
                                            <label class="label" for="nome_livros">Titulo Livro</label>
                                        </div>
                                        <div class="field-body">                                    
                                            <input class="input" type="text" name="nome_livros" style="width: 40%">
                                        </div>
                                    </div>

                                    <div class="field is-horizontal">
                                        <div class="field-label is-normal">
                                            <label class="label" for="isbn_livros">ISBN</label>
                                        </div>
                                        <div class="field-body">
                                            <input class="input" type="text" name="isbn_livros" style="width: 40%">
                                        </div>
                                    </div>

                                    <div class="field is-horizontal">
                                        <div class="field-label is-normal">
                                            <label class="label" for="edicao_livros">Edição</label>
                                        </div>
                                        <div class="field-body">
                                            <input class="input" type="text" name="edicao_livros" style="width: 40%">
                                        </div>
                                    </div>


                                    <div class="field is-horizontal">
                                        <div class="field-label is-normal">
                                            <label class="label" for="qtd_livros">Quantidade</label>
                                        </div>
                                        <div class="field-body">
                                            <input class="input" type="text" name="qtd_livros" style="width: 40%">
                                        </div>
                                    </div>

                                    <div class="field is-horizontal">
                                        <div class="field-label is-normal">
                                            <label class="label" for="fk_livros_autor">Autor</label>  
                                        </div>
                                        <div class="field-body">                              
                                            <input class = "input" list="fk_livros_autor" name="fk_livros_autor" style="width: 40%">
                                            <datalist id="fk_livros_autor">
                                                @foreach ($autor as $autor)
                                                <option value="{{$autor->id}}"> {{$autor->nome_autores}}</option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                    </div>


                                    <div class="field is-horizontal">
                                        <div class="field-label is-normal">
                                            <label class="label" for="fk_livros_editora">Editora</label>
                                        </div>
                                        <div class="field-body">  
                                            <input class = "input" list="fk_livros_editora" name="fk_livros_editora" style="width: 40%">
                                            <datalist id="fk_livros_editora">
                                                @foreach ($editora as $editora)
                                                <option value="{{$editora->id}}"> {{$editora->nome_editoras}}</option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                    </div>

                                    <div class="field is-horizontal">
                                        <div class="field-label is-normal">
                                            <label class="label" for="fk_livros_genero">Genero</label>
                                        </div>
                                        <div class="field-body">
                                            <input class = "input" list="fk_livros_genero" name="fk_livros_genero" style="width: 40%">
                                            <datalist id="fk_livros_genero">
                                                @foreach ($genero as $genero)
                                                <option value="{{$genero->id}}"> {{$genero->nome_generos}}</option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                    </div>

                                    <div class="field is-horizontal">
                                        <div class="field-label is-normal">
                                            <label class="label" for="fk_livros_prateleira">Localização</label>
                                        </div>
                                        <div class="field-body">                                            
                                            <input class = "input" list="fk_livros_prateleira" name="fk_livros_prateleira" style="width: 40%">
                                            <datalist id="fk_livros_prateleira">
                                                @foreach ($prateleira as $prateleira)
                                                <option value="{{$prateleira->id}}">                                        
                                                    {{$prateleira->identificador_prateleira. " -"}}
                                                    {{$prateleira->descricao_prateleira}}                                        
                                                </option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                    </div>


                                    <div class="field is-horizontal">
                                        <div class="field-label">
                                            <!-- Left empty for spacing -->
                                        </div>
                                        <div class="field-body">
                                            <div class="field">
                                            <div class="control">
                                                <button class="button is-link" type="submit">Cadastrar</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </form>
                            
                        </div>                         
                    </div>                    
                </div>            
            </div>                
        </section>
    </div>
    
</body>
</html>