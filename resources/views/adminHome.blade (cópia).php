<!DOCTYPE html>
<html>

<head>
    <meta charset="{{ app()->getLocale() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin homepage</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

@include('layouts.app')

<div class="columns is-fullheight">
    <div class="column is-2 is-sidebar-menu is-hidden-mobile">
        <aside class="menu is-hidden-mobile ">
            <br>
            <p class="menu-label ">Página Inicial</p>
            <ul class="menu-list ">
                <li><a href="home_customizar">Customização</a></li>
            </ul>

            <p class="menu-label">Blog</p>
            <ul class="menu-list ">
                <li><a href="blog_post">Criar Conteudo</a></li>
                <li><a href="adminHome/blog_customizar">Customização da pagina</a></li>
            </ul>

            <p class="menu-label">Cadastro</p>
            <ul class="menu-list ">
                <li><a>Cadastrar Usuario/Admin</a></li>
                <li><a>Cadastro Autores</a></li>
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