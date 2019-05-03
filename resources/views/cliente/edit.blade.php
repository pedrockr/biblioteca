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
                        <nav class="level">
                            <div class="level-item">
                              <p>Editar registro de clientes</p>
                            </div>
                          </nav>
                        <form action="{{route('cliente.update', $cliente->id)}}" method="post">
                            @method('PATCH')
                            @csrf
                            
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                  <label class="label">Nome</label>
                                </div>
                                <div class="field-body">
                                  <div class="field">
                                    <p class="control is-expandedt">
                                    <input class="input is-small" type="text" name="nome_clientes" id="nome_clientes" value="{{$cliente->nome_clientes}}">
                                    </p>
                                  </div>
                                  <div class="field-label is-normal">
                                      <label class="label">Email</label>
                                  </div>
                                  <div class="field">
                                    <p class="control is-expanded">
                                        <input class="input is-small" type="email" name="email_clientes" id="email_clientes" value="{{$cliente->email_clientes}}">
                                    </p>
                                  </div>
                                </div>
                              </div>
    
                              <div class="field is-horizontal">
                                  <div class="field-label is-normal">
                                    <label class="label">CPF</label>
                                  </div>
                                  <div class="field-body">
                                    <div class="field">
                                      <p class="control is-expandedt">
                                          <input class="input is-small" type="text" name="cpf_clientes" id="cpf_clientes" value="{{$cliente->cpf_clientes}}">
                                      </p>
                                    </div>
                                    <div class="field-label is-normal">
                                        <label class="label">Celular</label>
                                    </div>
                                    <div class="field">
                                      <p class="control is-expanded">
                                        <input class="input is-small" type="text" name="celular_clientes" id="celular_clientes" value="{{$cliente->celular_clientes}}">
                                      </p>
                                    </div>
                                    <div class="field-label is-normal">
                                        <label class="label">Telefone</label>
                                    </div>
                                    <div class="field">
                                      <p class="control is-expanded">
                                        <input class="input is-small" type="text" name="telefone_clientes" id="telefone_clientes" value="{{$cliente->telefone_clientes}}">
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                      <label class="label">Endereço</label>
                                    </div>
                                    <div class="field-body">
                                      <div class="field">
                                        <p class="control is-expandedt">
                                          <input class="input is-small" type="text" name="endereco_clientes" id="endereco_clientes" value="{{$cliente->endereco_clientes}}">
                                        </p>
                                      </div>
                                    </div>
                                </div>
                                <div class="field is-horizontal">
                                    <div class="field-label">
                                      <!-- Left empty for spacing -->
                                    </div>
                                    <div class="field">
                                      <div class="field">
                                        <div class="control">
                                          <button class="button is-link" type="submit">Cadastrar</button>
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