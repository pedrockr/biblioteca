<!DOCTYPE html>
<html>
<head>
    <meta charset="{{ app()->getLocale() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin homepage</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">

    </style>
</head>


<body>
        <aside class="menu ">
            <br>
            <p class="menu-label ">Página Inicial</p>
            <ul class="menu-list ">
                <li><a class="button-hover-color"href="home_customizar">Customização</a></li>
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
</body>

</html>