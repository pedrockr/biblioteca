<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User homepage</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

@include('layouts.app')

<div class="columns is-fullheight">    
    <div class="column is-2 is-sidebar-menu is-hidden-mobile">
        <aside class="menu is-hidden-mobile">
            <p class="menu-label">
                General
            </p>
            <ul class="menu-list ">
                <li><a class="">Buscar Livros</a></li>
                <li><a>Emprestar</a></li>           
                <li><a>Cadastrar Clientes</a></li>
                <ul class="menu-list">
                    <li>
                        <a>Cadastro no Acervo</a>
                        <ul>
                            <li><a>Livros</a></li>
                            <li><a>Autores</a></li>
                            <li><a>Generos</a></li>
                            <li><a>Editora</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="menu-list">
                    <li>
                        <a>Consulta Clientes</a>
                        <ul>
                            <li><a>Livros Emprestados</a></li>
                            <li><a>Livros em Atrazo</a></li>
                        </ul>
                    </li>
                </ul>

            </ul>
        </aside>
    </div>

    <div class="column is-main-content">
        Main content
    </div>
</div>


<script async type="text/javascript" src="../js/bulma.js"></script>
</body>

</html>