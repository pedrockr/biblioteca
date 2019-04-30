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

                            <form method="post" action="{{url('/emprestimo/index')}}">
                                {{ csrf_field() }}
                                <input type="search" name="buscaLivro" id="buscaLivro" >
                                <input type="search" name="buscaCliente" id="buscaCliente" >

                                <button type="submit">buscar</button>

                            </form>

                            @foreach($v_emprestimo as $v_emprestimo)

                            {{$v_emprestimo -> id}}
                            {{$v_emprestimo -> nome_livros}}
                            {{$v_emprestimo -> nome_clientes}}


                            <td>
                                <a href="{{ route('emprestimo.edit', $v_emprestimo->id)}}" class="button is-link is-small">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('emprestimo.destroy', $v_emprestimo->id)}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="button is-danger is-small" type="submit">Delete</button>
                                </form>
                            </td>


                            @endforeach
                            
                           	</form>
                        </div>                         
                    </div>                    
                </div>            
            </div>                
        </section>
    </div>
    
</body>
</html>