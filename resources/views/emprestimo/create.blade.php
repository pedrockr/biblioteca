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
                       
                        @include('layouts.asideUser')
                    </div>                                       

                    <div class="column is-10">
                        <div class="box">

                            <form method="post" action="{{route('emprestimo.store')}}">
                                @csrf
                                
                                <input list="livros" name="fk_emprestimo_livros">
                                <datalist id="livros">
                                    @foreach ($livro as $livro)
                                    <option value="{{$livro->id}}"> {{$livro->nome_livros}}</option>
                                    @endforeach
                                </datalist>

                                <input list="cliente" name="fk_emprestimo_clientes">
                                <datalist id="cliente">
                                    @foreach ($cliente as $cliente)
                                    <option value="{{$cliente->id}}"> {{$cliente->nome_clientes}}</option>
                                    @endforeach
                                </datalist>

                                <input type="hidden" name="fk_emprestimo_users" value="{{Auth::user()->id}} ">
                                <input type="" name="" value="{{Auth::user()->name}} " disabled="">

                                <input type="date" name="data_emprestimo" value="">
                                <input type="date" name="data_devolucao" value="">



                            <button type="input">Atualizar</button>
                            
                           	</form>
                        </div>                         
                    </div>                    
                </div>            
            </div>                
        </section>
    </div>
    
</body>
</html>