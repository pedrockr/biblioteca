<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>editar</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

    @include('layouts.app')    
    <div class="hero is-fullheight is-light ">

      <section class="section">
          <div class="container">
              <div class="columns">
                  <div class="column is-2">
                      @include('layouts.asideUser')
                  </div>
                  <div class="column is-10">
                      <div class="box">                                       

                        <form action="{{route('prateleira.update', $prateleira->id)}}" method="post">
                            @method('PATCH')
                            @csrf
                            
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                  <label class="label">Prateleira</label>
                                </div>
                                <div class="field-body">
                                  <div class="field">
                                    <p class="control is-expandedt">
                                    <input class="input is-small" type="text" name="identificador_prateleira" id="identificador_prateleira" value="{{$prateleira->identificador_prateleira}}">
                                    </p>
                                  </div>
                                  <div class="field-label is-normal">
                                      <label class="label">Seção</label>
                                    </div>
                                    <div class="field-body">
                                      <div class="field">
                                        <p class="control is-expandedt">
                                        <input class="input is-small" type="text" name="descricao_prateleira" id="descricao_prateleira" value="{{$prateleira->descricao_prateleira}}">
                                        </p>
                                      </div>
                                </div>                             
                                
                                <div class="field-label">
                                  <!-- Left empty for spacing -->
                                </div>
                                <div class="field">
                                  <div class="field">
                                    <div class="control">
                                      <button class="button is-link" type="submit">Atualizar</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </form>
                        </div>                                              

                     </div>                         
                  </div>                    
              </div>      
      </section>
    </div>
    
</body>
</html>