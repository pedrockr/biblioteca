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

                    <div class="column is-11">
                        <div class="box">
                            <div class="column is-8">
                                <form method="post" action="{{url('/emprestimo/index')}}">
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
                                            <label class="label">Livro</label>
                                        </div>
                                        <div class="field-body">
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input is-small" type="search" name="buscaCliente" id="buscaCliente" >
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
                                                    <a class="button is-text" href="/biblioteca/public/emprestimo">Reset</a>
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
                                        <td>Cliente</td>
                                        <td>Emprestimo</td>                                    
                                        <td>Devolução</td>
                                        <td>Devolvido</td>
                                        <td>Atraso</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($v_emprestimo as $v_emprestimo)
                                    <tr>
                                        <td>{{ $v_emprestimo -> id }}</td>
                                        <td>{{ $v_emprestimo -> nome_livros }}</td>
                                        <td>{{ $v_emprestimo -> isbn_livros }}</td>
                                        <td>{{ $v_emprestimo -> nome_clientes }}</td>
                                        <td>{{ $v_emprestimo -> data_emprestimo }}</td>
                                        <td>{{ $v_emprestimo -> data_devolucao}}</td>
                                        <td>{{ $v_emprestimo -> data_devolvido}}</td>
                                        <td>
                                            @if( $v_emprestimo -> data_devolvido > $v_emprestimo -> data_devolucao )
                                        
                                            <p class="has-text-danger">{{ $diff = Carbon\Carbon::parse($v_emprestimo -> data_devolvido)->diffForHumans(Carbon\Carbon::parse($v_emprestimo -> data_devolucao)) }}</p> </td>
                                            @endif


                                        </td>                                        

                                        <td class="semQuebra">
                                        <div class="buttons has-addons">
                                            <a href="{{ route('emprestimo.edit', $v_emprestimo->id)}}" class="button is-link is-small">Editar</a> 
                                            <form action="{{ route('emprestimo.destroy', $v_emprestimo->id)}}" method="post">
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