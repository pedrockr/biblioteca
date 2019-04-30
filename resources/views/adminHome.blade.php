<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Administrador</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
    @include('layouts.app')
    
    <div class="hero is-fullheight is-light ">
    <section class="section">
        <div class="container">
               <div class="columns">
                   <div class="column is-2">
                       @include('layouts.asideAdmin')

                   </div>                                       

                   <div class="column is-10">                        
                       <div class="box">

                       <section class="hero is-info welcome is-small">
                    <div class="hero-body">
                        <div class="container">
                            <h1 class="title">
                                Bem Vindo, {{Auth::user()->name}}.
                            </h1>
                            <h2 class="subtitle">
                                <?php
                                date_default_timezone_set('America/Sao_Paulo');

                                if(date('G') < 12) {
                                    echo "Bom dia!";

                                }else if(date('G') > 12 && date('G')< 18){
                                    echo "Boa tarde!";
                                }else{
                                    echo "Boa noite!";
                                }
                                ?>
                            </h2>
                        </div>
                    </div>
                </section>

                <br>

                <section class="info-tiles">
                    <div class="tile is-ancestor has-text-centered">
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">{{$qtdClientes[0]->qtdClientes}}</p>
                                <p class="subtitle">Clientes</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">{{$qtdLivros[0]->qtd}}</p>
                                <p class="subtitle">Livros</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">10</p>
                                <p class="subtitle">Livros em atraso</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box"> <a href="#">
                                <p class="title">19</p>
                                <p class="subtitle">Pedidos de livros</p></a>
                            </article>
                        </div>
                    </div>
                </section>
                       </div>                         
                   </div>                    
               </div>            
        </div>
            
    </section>
    </div>
    
</body>
</html>