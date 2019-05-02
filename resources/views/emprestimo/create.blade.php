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
                            <div class="column is-half">
                            <form method="post" action="{{route('emprestimo.store')}}">
                                @csrf

                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Livro</label>
                                    </div>                                    
                                    <div class="field-body">
                                        <div class="field">
                                        <p class="control is-expanded">
                                            <input class = "input" autofocus list="livros" name="fk_emprestimo_livros">
                                            <datalist id="livros">
                                                @foreach ($livro as $livro)
                                                <option value="{{$livro->id}}"> {{$livro->nome_livros}}</option>
                                                @endforeach
                                            </datalist>
                                        </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                            <label class="label">Cliente</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                        <p class="control is-expanded">
                                            <input class = "input" list="cliente" name="fk_emprestimo_clientes">
                                            <datalist id="cliente">
                                                @foreach ($cliente as $cliente)
                                                <option value="{{$cliente->id}}"> {{$cliente->nome_clientes}}</option>
                                                @endforeach
                                            </datalist>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Usuario</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                        <p class="control is-expanded">
                                                <input type="hidden" name="fk_emprestimo_users" value="{{Auth::user()->id}} ">
                                                <input class = "input" type="" name="" value="{{Auth::user()->name}} " disabled="">
                                        </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                    <label class="label">Emprestimo</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                        <p class="control is-expanded">
                                                <input class = "input" type="date" name="data_emprestimo" value="">
                                                </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Devolução</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                        <p class="control is-expanded">
                                                <input class = "input" type="date" name="data_devolucao" value="">
                                                </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="field is-horizontal">
                                        <div class="field-label">
                                            <!-- espaço -->
                                        </div>
                                        <div class="field">
                                            <div class="field">
                                                <div class="control">
                                                    <button class = "button is-link" type="input">Emprestar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    

                               </form>
                               </div>
                        </div>                         
                    </div>                    
                </div>            
            </div>                
        </section>
    </div>
    
</body>
</html>