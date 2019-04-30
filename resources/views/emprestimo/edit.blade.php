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

                            <form method="post" action="{{ route('emprestimo.update', $emprestimo->id) }}">
                                @method('PATCH')
                                @csrf
                                
                                <input list="livros" name="fk_emprestimo_livros" value="{{$emprestimo->fk_emprestimo_livros}}" hidden="">
                                <input list="livros" name="" value="{{$v_emprestimo->nome_livros}}" disabled="">


                                <input list="cliente" name="fk_emprestimo_clientes" value="{{$emprestimo->fk_emprestimo_clientes}}" hidden="">
                                <input list="cliente" name="f" value="{{$v_emprestimo->nome_clientes}}" disabled="">


                                <input type="hidden" name="fk_emprestimo_users" value="{{Auth::user()->id}} ">
                                <input type="" name="" value="{{Auth::user()->name}} " disabled="">

                                <input type="date" name="data_emprestimo" value="{{$emprestimo->data_emprestimo}}">
                                <input type="date" name="data_devolucao" value="{{$emprestimo->data_devolucao}}">
                                <input type="date" name="data_devolvido" value="{{$emprestimo->data_devolvido}}">



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