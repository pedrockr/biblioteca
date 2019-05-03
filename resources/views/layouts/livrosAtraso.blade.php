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
                                <nav class="level">
                                        <div class="level-item">
                                          <p>Livros em atraso</p>
                                        </div>
                                    </nav> 
                            
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
                                    @foreach($atraso as $atraso)
                                    @if( $atraso -> data_devolvido > $atraso -> data_devolucao )
                                    <tr>
                                        <td>{{ $atraso -> id }}</td>
                                        <td>{{ $atraso -> nome_livros }}</td>
                                        <td>{{ $atraso -> isbn_livros }}</td>
                                        <td>{{ $atraso -> nome_clientes }}</td>
                                        <td>{{ $atraso -> data_emprestimo }}</td>
                                        <td>{{ $atraso -> data_devolucao}}</td>
                                        <td>{{ $atraso -> data_devolvido}}</td>
                                        <td> 
                                            <p class="has-text-danger">{{ $diff = Carbon\Carbon::parse($atraso -> data_devolvido)->diffForHumans(Carbon\Carbon::parse($atraso -> data_devolucao)) }}</p> </td>
                                        </td>
                                        
                                    </tr>
                                    @endif
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