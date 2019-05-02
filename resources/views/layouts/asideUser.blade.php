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
            <p class="menu-label">General</p>

            @if(Auth::user()->admin == 1)
                    <a href="/biblioteca/public/adminHome">Voltar ao menu do admin</a>
            @endif

             <p class="menu-label"></p> <!-- pular linha -->
            

            <ul class="menu-list ">
                <ul class="menu-list">
                    <li>
                        <p class="menu-label">Cadastrar</p>
                        <ul>
                            <li><a href="/biblioteca/public/livro/create">Livros</a></li>
                            <li><a href="/biblioteca/public/autor">Autores</a></li>
                            <li><a href="/biblioteca/public/genero">Generos</a></li>
                            <li><a href="/biblioteca/public/editora">Editora</a></li>
                            <li><a href="/biblioteca/public/prateleira">Localização</a></li>
                            <li><a href="/biblioteca/public/cliente">Clientes</a></li>
                        </ul>
                    </li>
                    <li>
                        <p class="menu-label">Editar</p>
                        <ul>                            
                            <li><a href="/biblioteca/public/livro">Livros</a></li>
                        </ul>
                    </li>                    
                </ul>
                <ul class="menu-list">
                    <li>
                        <p class="menu-label">Emprestimo</p>
                        <ul>
                            <li><a href="/biblioteca/public/emprestimo/create">Emprestar</a></li> 
                            <li><a href="/biblioteca/public/emprestimo">Livros Emprestados</a></li>
                            <li><a>Livros em Atrazo</a></li>
                        </ul>
                    </li>
                </ul>



            </ul>
        </aside>
</body>

</html>