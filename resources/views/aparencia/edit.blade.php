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
                            <div class="columns">
                            <div class="column is-half is-centered">
                            <form action="{{ route('aparencia.update', $aparencia->id) }}" method="post">
                                @method('PATCH')
                                @csrf

                                <div class="field">
                                    <label class="label">Texto Aba Nagegador</label>
                                    <div class="control">
                                        <input class="input has-text-centered is-dark" id="NavBrand" name="NavBrand" type="" value="{{$aparencia -> NavBrand}}">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Imagem de Fundo Pagina Inicial</label>
                                    <div class="select is-dark">
                                        <select class="" name="imgHero">
                                            <option value= "book" <?php if($aparencia -> imgHero == "book")echo("selected = '' ") ?> >Imagem 1</option>
                                            <option value="book1" <?php if($aparencia -> imgHero == "book1")echo("selected = '' ") ?> >Imagem 2</option>
                                            <option value="book2" <?php if($aparencia -> imgHero == "book2")echo("selected = '' ") ?> >Imagem 3</option>
                                            <option value="book3" <?php if($aparencia -> imgHero == "book3")echo("selected = '' ") ?> >Imagem 4</option>
                                            <option value="semImagen" <?php if($aparencia -> imgHero == "semImagem")echo("selected = '' ") ?> >Sem Imagem</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Titulo da Pagina Inicial</label>
                                    <div class="control">
                                        <input class="input has-text-centered is-dark" id="tituloPgInicial" name="tituloPgInicial" type="" value="{{$aparencia -> tituloPgInicial}}">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Subtitulo da Pagina Inicial</label>
                                    <div class="control">


                                        <textarea class="textarea is-dark" id="subtituloPgInicial" name="subtituloPgInicial" type="" >{{$aparencia -> subtituloPgInicial}}</textarea>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Cor da fonte da pagina inicial</label>
                                    <div class="select is-dark">
                                        <select class="" name="CorCaracter">
                                        <option value="white" <?php if($aparencia -> CorCaracter == "white")echo("selected = '' ") ?> >Branco</option>
                                        <option value="black" <?php if($aparencia -> CorCaracter == "black")echo("selected = '' ") ?> >Preto</option>
                                        </select>
                                    </div>
                                </div>                                  

                                <div class="field">
                                    <label class="label">Cor de fundo pagina de busca</label>
                                    <div class="select is-dark">
                                        <select class="" name="corBusca">
                                        <option value="lightyellow" <?php if($aparencia -> corBusca == "lightyellow")echo("selected = '' ") ?>>Amarelo</option>
                                        <option value="lightcyan" <?php if($aparencia -> corBusca == "lightcyan")echo("selected = '' ") ?>>Ciano</option>
                                        <option value="lightblue" <?php if($aparencia -> corBusca == "lightblue")echo("selected = '' ") ?>>Azul</option>
                                        <option value="lightgray" <?php if($aparencia -> corBusca == "lightgray")echo("selected = '' ") ?>>Cinza claro</option>
                                        <option value="beige" <?php if($aparencia -> corBusca == "beige")echo("selected = '' ") ?> >bege</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label">Ativar Pagina de busca?</label>
                                    <input type="radio" name="ativaBusca" value="1" <?php if($aparencia -> ativaBusca == 1)echo("checked") ?> >Yes</label>                                  
                                    <input type="radio" name="ativaBusca" value="0" <?php if($aparencia -> ativaBusca == 0)echo("checked") ?> >No</label>
                                    
                                </div>

                                <div class="field">
                                    <label class="label">Ativar Pagina de Blog?</label>
                                    <input type="radio" name="ativaBlog" value="1" <?php if($aparencia -> ativaBlog == 1)echo("checked") ?>>Yes</label>
                                    <input type="radio" name="ativaBlog" value="0" <?php if($aparencia -> ativaBlog == 0)echo("checked") ?>>No</label>
                                </div>

                                <div class="field is-grouped is-grouped-right">
                                    <button class="button is-link" type="submit">Atualizar</button>
                                </div>

                           	</form>
                            </div>
                            </div>
                        </div>                         
                    </div>                    
                </div>            
            </div>                
        </section>
    </div>
    
</body>
</html>