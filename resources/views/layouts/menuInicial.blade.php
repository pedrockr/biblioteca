<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-menu">
                <div class="navbar-brand">
                    <a class="navbar-item" href="../">
                        <img src="img/logo.jpg" width="50" height="40">
                    </a>
                    <div class="navbar-item ">
                        <div class="content is-large">
                            <p class="">Biblioteca</p>
                        </div>
                    </div>
                    <div class="navbar-burger burger" data-target="topNav">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>   

                <div class="navbar-end">
                    <a class="navbar-item is-active" href="/biblioteca/public">Home</a>
                    <a class="navbar-item is-active" href="blog">Blog</a>
                    <a class="navbar-item is-active" href="#">Buscar no Acervo</a>

                    <div class="navbar-item">
                        <a class="button is-link" href="login">Entrar</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>