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

                  <form action="{{route('editora.update', $editora->id)}}" method="post">
                      @method('PATCH')
                      @csrf
                      
                      <div class="field is-horizontal">
                          <div class="field-label is-normal">
                            <label class="label">Nome</label>
                          </div>
                          <div class="field-body">
                            <div class="field">
                              <p class="control is-expandedt">
                              <input class="input is-small" type="text" name="nome_editoras" id="nome_editoras" value="{{$editora->nome_editoras}}">
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
          </div>                
      </section>
    </div>
    
</body>
</html>