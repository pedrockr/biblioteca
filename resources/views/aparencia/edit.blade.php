<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>

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
                            <form action="{{ route('aparencia.update', $aparencia->id) }}" method="post">
                                @method('PATCH')
                                @csrf

                            <input type="text" name="tituloPgInicial" value="{{ $aparencia -> tituloPgInicial }}">
                            <input type="text" name="subtituloPgInicial" value="{{ $aparencia -> subtituloPgInicial }}">
                            <input type="text" name="imgHero" value="{{ $aparencia -> imgHero }}">
                            <input type="text" name="NavBrand" value="{{ $aparencia -> NavBrand }}">
                            <input type="text" name="ativaBlog" value="{{ $aparencia -> ativaBlog }}">
                            <input type="text" name="ativaBusca" value="{{ $aparencia -> ativaBusca }}">
                            <input type="text" name="CorCaracter" value="{{ $aparencia -> CorCaracter }}">
                            <input type="text" name="corBusca" value="{{ $aparencia -> corBusca }}">

                            <button type="input">Atualizar</button>                                                                                    




                           		
                           	</form>
                        </div>                         
                    </div>                    
                </div>            
            </div>                
        </section>
    </div>
    
</body>
</html>