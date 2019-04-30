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
                
                <li><a href="/biblioteca/public/emprestimo/create">Emprestar</a></li>           
                <li><a href="cliente">Cadastrar Clientes</a></li>
                <ul class="menu-list">
                    <li>
                        <p class="menu-label">
                            Cadastros
                        </p>
                        <ul>
                            <li><a>Livros</a></li>
                            <li><a href="/biblioteca/public/autor">Autores</a></li>
                            <li><a>Generos</a></li>
                            <li><a>Editora</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="menu-list">
                    <li>
                        <p class="menu-label">Consulta</p>
                        <ul>
                            <li><a href="/biblioteca/public/emprestimo">Livros Emprestados</a></li>
                            <li><a>Livros em Atrazo</a></li>
                        </ul>
                    </li>
                </ul>

                @if(Auth::user()->admin == 1)
                    <a href="/biblioteca/public/adminHome">voltar ao menu do admin</a>
                @endif

            </ul>
        </aside>
</body>

</html>