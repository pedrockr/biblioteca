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
                            <form action="{{route('configUpdate.update', $config[0]->id)}}" method="post">
            				@csrf
            				@method('PUT')

                            <label class="label">tituloPgInicial</label>
                       		<input type="text" name="tituloPgInicial" value="{{ $config[0]->tituloPgInicial }}">

                            <label class="label">subtituloPgInicial</label>
                            <textarea name="subtituloPgInicial">{{ $config[0]->subtituloPgInicial }}</textarea>

                            <!--
                            <label class="label">corHero</label>
                            <select name="corHero" value="">
                                <option value="lightyellow">Amarelo</option>
                                <option value="lightcyan">Ciano</option>
                                <option value="lightblue">Azul</option>
                                <option value="lightgray">Cinza</option>
                                <option value="beige">Bege</option>
                            </select>
                        -->

                            <label class="label">imgHero</label>                            
                            <input type="hidden" name="imgHero" value="{{ $config[0]->imgHero }}">
                            <select name="imgHero" multiple="">
                                <option value="book">book</option>
                                <option value="book1">book1</option>
                                <option value="book2">book2</option>
                                <option value="book3">book3</option>
                                <option value="semImagen">Sem Imagem</option>
                            </select>

                            <label class="label">navBrand</label>
                            <input type="text" name="NavBrand" value="{{ $config[0]->NavBrand }}">

                            <label class="label">ativaBlog</label>
                            <input type="hidden" name="ativaBlog" value="{{ $config[0]->ativaBlog }}">
                            <input type="radio" name="ativaBlog" value="1"/> Sim<br />
                            <input type="radio" name="ativaBlog" value="0"/> Não<br />
                            @if($config[0]->ativaBlog == 1)
                            <label>O blog ativo</label>
                            @else
                            <label>O Blog desativado</label>
                            @endif                            

                            <label class="label">ativaBusca</label>
                            <input type="hidden" name="ativaBusca" value="{{ $config[0]->ativaBusca }}">

                            <input type="radio" name="ativaBusca" value="1"/> Sim<br />
                            <input type="radio" name="ativaBusca" value="0"/> Não<br />
                            @if($config[0]->ativaBusca == 1)
                            <label>A busca ativa</label>
                            @else
                            <label>A busca desativada</label>
                            @endif

                            <label class="label">CorCaracter</label>
                            <input type="hidden" name="CorCaracter" value="{{ $config[0]->CorCaracter }}">


                            <select name="CorCaracter" multiple="">
                                <option value="white">Branco</option>
                                <option value="black">Preto</option>
                            </select>




                            <label class="label">corBusca</label>
                            <input type="hidden" name="corBusca" value="{{ $config[0]->corBusca }}">
                            <select name="corBusca" multiple="">
                                <option value="lightyellow">Amarelo</option>
                                <option value="lightcyan">Ciano</option>
                                <option value="lightblue">Azul</option>
                                <option value="lightgray">Cinza</option>
                                <option value="beige">Bege</option>
                            </select>                            

                            <div class="control">
                              <label class="radio">
                                <input type="radio" name="ativaBuscar" value="1">Yes</label>
                              <label class="radio">
                                <input type="radio" name="ativaBuscar" value="0">No</label>
                            </div>



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