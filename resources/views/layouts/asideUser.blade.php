<!DOCTYPE html>
<html>
<head>
    <meta charset="{{ app()->getLocale() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User homepage</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">

    </style>
</head>


<body>
        <aside class="menu is-hidden-mobile">
            <p class="menu-label">
                General
            </p>
            <ul class="menu-list ">
                <li><a class="">Buscar Livros</a></li>
                <li><a>Emprestar</a></li>           
                <li><a href="cliente">Cadastrar Clientes</a></li>
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
</body>

</html>