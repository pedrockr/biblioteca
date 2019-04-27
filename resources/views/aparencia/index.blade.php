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
                            @foreach($aparencia as $aparencia)

                                <div class="field">
                                    <label class="label">Titulo da Pagina Inicial</label>
                                    <div class="control">
                                        <input class="input has-text-centered is-dark" id="tituloPgInicial" name="tituloPgInicial" type="" value="{{$aparencia -> tituloPgInicial}}">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Subtitulo da Pagina Inicial</label>
                                    <div class="control">
                                        <input class="input has-text-centered is-dark" id="subtituloPgInicial" name="subtituloPgInicial" type="" value="{{$aparencia -> subtituloPgInicial}}">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Cor da fonte do Titulo e Subtitulo</label>
                                    <div class="control">
                                        <input class="input has-text-centered is-dark" id="CorCaracter" name="CorCaracter" type="" value="{{$aparencia -> CorCaracter}}">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Imagem </label>
                                    <div class="control">
                                        <input class="input has-text-centered is-dark" id="imgHero" name="imgHero" type="" value="{{$aparencia -> imgHero}}">
                                    </div>
                                </div>                                                                                            

                                {{$aparencia -> tituloPgInicial}}<br>
                                {{$aparencia -> subtituloPgInicial}}<br>
                                
                                {{$aparencia -> imgHero}}<br>
                                {{$aparencia -> NavBrand}}<br>
                                {{$aparencia -> ativaBlog}}<br>
                                {{$aparencia -> ativaBusca}}<br>
                                {{$aparencia -> CorCaracter}}<br>
                                {{$aparencia -> corBusca}}


                                <a href="{{ route('aparencia.edit', $aparencia->id)}}" class="button">Edit</a>

                            @endforeach                           		
                           	</form>
                        </div>                         
                    </div>                    
                </div>            
            </div>                
        </section>
    </div>
    
</body>
</html>