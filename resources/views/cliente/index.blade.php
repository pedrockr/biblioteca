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

                  <div class="column is-11">
                    <div class="box">
                      <form action="{{route('cliente.store')}}" method="post">
                        @csrf

                        
                          
                        
                                                
                        
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                              <label class="label">Nome</label>
                            </div>
                            <div class="field-body">
                              <div class="field">
                                <p class="control is-expandedt">
                                  <input class="input is-small" type="text" name="nome_clientes" id="nome_clientes">
                                </p>
                              </div>
                              <div class="field-label is-normal">
                                  <label class="label">Email</label>
                              </div>
                              <div class="field">
                                <p class="control is-expanded">
                                    <input class="input is-small" type="email" name="email_clientes" id="email_clientes">
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
                                      <input class="input is-small" type="text" name="cpf_clientes" id="cpf_clientes">
                                  </p>
                                </div>
                                <div class="field-label is-normal">
                                    <label class="label">Celular</label>
                                </div>
                                <div class="field">
                                  <p class="control is-expanded">
                                    <input class="input is-small" type="text" name="celular_clientes" id="celular_clientes">
                                  </p>
                                </div>
                                <div class="field-label is-normal">
                                    <label class="label">Telefone</label>
                                </div>
                                <div class="field">
                                  <p class="control is-expanded">
                                    <input class="input is-small" type="text" name="telefone_clientes" id="telefone_clientes">
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
                                      <input class="input is-small" type="text" name="endereco_clientes" id="endereco_clientes">
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

                      <hr>

                      <div class="column">
                      <form action="{{url('/cliente/index')}}" method="post">
                        {{ csrf_field() }}
                        <div class="field is-horizontal">
                          <div class="field">
                          <label for="">Nome</label>
                        <input class="input is-small" type="text" name="buscaCliente" style="width:70%;">
                          </div>
                          <div>
                        <label for="">Email</label>
                        <input class="input is-small" type="text" name="buscaEmail" style="width:70%;">
                          </div>
                        <button class="button is-link is-small" type="submit">Buscar</button>
                        </div>

                      </form>
                      </div>
                      
                      <table class="table is-fullwidth">
                        <thead>
                          <tr>
                            <td>Nome</td>
                            <td>endereco</td>
                            <td>CPF</td>
                            <td>Email</td>
                            <td>celular</td>
                            <td>Telefone</td>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($cliente as $cliente)
                          <tr>                            
                            <td>{{$cliente->nome_clientes}}</td>
                            <td>{{$cliente->endereco_clientes}}</td>
                            <td>{{$cliente->cpf_clientes}}</td>
                            <td>{{$cliente->email_clientes}}</td>
                            <td>{{$cliente->celular_clientes}}</td>
                            <td>{{$cliente->telefone_clientes}}</td>                            
                          
                            <td class="semQuebra">
                                <div class="buttons has-addons">
                                    <a href="{{ route('cliente.edit', $cliente->id)}}" class="button is-link is-small">Editar</a> 
                                    <form action="{{ route('cliente.destroy', $cliente->id)}}" method="post">
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