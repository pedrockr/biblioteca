<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>editar</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        td{font-size: 8pt;}
        .semQuebra{white-space: nowrap;}
    
    </style>

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

                      <div class="column">
                      <form action="{{route('prateleira.store')}}" method="post">
                        @csrf
                        
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                              <label class="label">Prateleira</label>
                            </div>
                            <div class="field-body">
                              <div class="field">
                                <p class="control is-expandedt">
                                  <input class="input is-small" type="text" name="identificador_prateleira" id="identificador_prateleira">
                                </p>
                              </div>
                              <div class="field-label is-normal">
                                  <label class="label">Seção</label>
                                </div>
                                <div class="field-body">
                                  <div class="field">
                                    <p class="control is-expandedt">
                                      <input class="input is-small" type="text" name="descricao_prateleira" id="descricao_prateleira">
                                    </p>
                                  </div>
                            </div>                             
                            
                            <div class="field-label">
                              <!-- Left empty for spacing -->
                            </div>
                            <div class="field">
                              <div class="field">
                                <div class="control">
                                  <button class="button is-link is-small" type="submit">Cadastrar</button>
                                </div>
                              </div>
                            </div>
                          </div>
                      </form>
                    </div>

                      <hr>

                      <div class="column is-7">
                          <form method="post" action="{{url('/prateleira/index')}}">
                            {{ csrf_field() }}
                            
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                  <label class="label">Nome</label>
                                </div>
                                <div class="field-body">
                                  <div class="field">
                                    <p class="control is-expandedt">
                                      <input class="input is-small" type="text" name="buscaPrateleira" id="buscaPrateleira">
                                    </p>
                                  </div>
                                </div>                             
                                
                                <div class="field-label">
                                  <!-- Left empty for spacing -->
                                </div>
                                <div class="field">
                                  <div class="field">
                                    <div class="control">
                                      <button class="button is-link is-small" type="submit">Buscar</button>
                                      <a class="button is-text" href="/biblioteca/public/prateleira">Reset</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </form>
                        </div>
                      
                      
                      <table class="table">
                        <thead>
                          <tr>
                            <td>Prateleira</td>
                            <td>Seção</td>
                            
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($prateleira as $prateleira)
                          <tr>                            
                            <td>{{$prateleira->identificador_prateleira}}</td>
                            <td>{{$prateleira->descricao_prateleira}}</td>                          
                          
                            <td class="semQuebra">
                                <div class="buttons has-addons">
                                    <a href="{{ route('prateleira.edit', $prateleira->id)}}" class="button is-link is-small">Editar</a> 
                                    <form action="{{ route('prateleira.destroy', $prateleira->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger is-small" type="submit">Delete</button>
                                    </form>
                                </div>
                              </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                     </div>                         
                  </div>                    
              </div>            
          </div>                
      </section>
    </div>
    
</body>
</html>