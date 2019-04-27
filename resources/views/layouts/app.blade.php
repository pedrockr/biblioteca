<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
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
                    <div class="navbar-end">
                        <a class="navbar-item is-active" href="/biblioteca/public" target="_blank">Visualizar Site</a>
                            @if (Auth::guest())
                                <a class="navbar-item " href="{{ route('login') }}">Login</a>

                            @else
                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>

                                    <div class="navbar-dropdown">

                                        <a class="navbar-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    </body>
</html>
