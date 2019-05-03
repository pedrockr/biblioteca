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
                                <nav class="level">
                                        <div class="level-item">
                                          <p>Editar emprestimo</p>
                                        </div>
                                    </nav> 
                            <div class="column is-half">
                            <form method="post" action="{{ route('emprestimo.update', $emprestimo->id) }}">
                                @method('PATCH')
                                @csrf

                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label for="livro" class="label">Livro</label>
                                    </div>
                                    
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                            <input class="input" type="hidden" list="livros" name="fk_emprestimo_livros" value="{{$emprestimo->fk_emprestimo_livros}}">
                                            <input class="input" list="livros" name="livro" value="{{$v_emprestimo->nome_livros}}" disabled="">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                            <label class="label">Cliente</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                            <input class="input" type="hidden" list="cliente" name="fk_emprestimo_clientes" value="{{$emprestimo->fk_emprestimo_clientes}}" >
                                            <input class="input" list="cliente" name="f" value="{{$v_emprestimo->nome_clientes}}" disabled="">                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Usuario</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                            <input class="input" type="hidden" name="fk_emprestimo_users" value="{{Auth::user()->id}} ">
                                            <input class="input" type="" name="" value="{{Auth::user()->name}} " disabled="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                    <label class="label">Emprestimo</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                            <input class="input" type="date" name="data_emprestimo" value="{{$emprestimo->data_emprestimo}}">    
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                    <label class="label">Devolução</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                            <input class="input" type="date" name="data_devolucao" value="{{$emprestimo->data_devolucao}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                    <label class="label">Devolvido</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                            <input class="input" type="date" name="data_devolvido" value="{{$emprestimo->data_devolvido}}">
                                            </div>
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
                                                <button class = "button is-link" type="input">Atualizar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               </form>

                                <!-- {{ $diff = Carbon\Carbon::parse($v_emprestimo -> data_emprestimo)->addWeek(1)}} -->

                            
                           	</form>
                        </div>                         
                    </div>                    
                </div>            
            </div>                
        </section>
    </div>
    
</body>
</html>