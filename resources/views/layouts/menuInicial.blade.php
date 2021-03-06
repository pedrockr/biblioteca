<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-menu">
                <div class="navbar-brand">

                    <div class="navbar-item ">
                        <div class="content is-large">
                            <p class="title is-2">{{ $config[0]->NavBrand }}</p>
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

                    @if($config[0]->ativaBlog == 1)
                    <a class="navbar-item is-active" href="blogView">Blog</a>
                    @endif

                    @if($config[0]->ativaBlog == 1)
                    <a class="navbar-item is-active" href="buscar">Buscar no Acervo</a>
                    @endif

                    <div class="navbar-item">
                        <a class="button is-link" href="login">Entrar</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>