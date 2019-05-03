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
                        @include('layouts.asideAdmin')
                    </div>                                       

                    <div class="column is-10">
                        <div class="box">
                            <nav class="level">
                                <div class="level-item">
                                  <p>Cadastrar usuario</p>
                                </div>
                            </nav> 
                            <div class="column is-5">

                            <form method="post" action="{{ route('usuario.store') }}">
                                @csrf

                                <div class="field is-horizontal">
                                  <div class="field-label is-normal">
                                    <label class="label">Nome</label>
                                  </div>
                                  <div class="field-body">
                                    <div class="field">
                                      <div class="control">
                                        <input class="input" id="name" type="name" name="name" value="{{ old('name') }}"
                                               required autofocus>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                                <div class="field is-horizontal">
                                  <div class="field-label is-normal">
                                    <label class="label">E-mail</label>
                                  </div>
                                  <div class="field-body">
                                    <div class="field">
                                      <div class="control">
                                        <input class="input" id="email" type="email" name="email"
                                               value="{{ old('email') }}" required autofocus>
                                      </div>

                                    </div>
                                  </div>
                                </div>                                    

                                <div class="field is-horizontal">
                                  <div class="field-label is-normal">
                                    <label class="label">Senha</label>
                                  </div>
                                  <div class="field-body">
                                    <div class="field">
                                      <div class="control">
                                        <input class="input" id="password" type="password" name="password" required>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                                <div class="field is-horizontal">
                                  <div class="field-label">
                                    <label class="label">Permissão</label>
                                  </div>
                                  <div class="field-body">
                                    <div class="field is-narrow">
                                      <div class="control">
                                        <label class="radio">
                                          <input type="radio" name="admin" value="1">
                                          Administrador
                                        </label>
                                        <label class="radio">
                                          <input type="radio" name="admin" value="0" checked="">
                                          Usuario
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="field is-horizontal">
                                  <div class="field-label">
                                    <!-- Left empty for spacing -->
                                  </div>
                                  <div class="field-body">
                                    <div class="field">
                                      <div class="control">
                                        <button class="button is-link">
                                          Cadastrar
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </form>
                        </div>

                            <hr>

                            <nav class="level">
                                <div class="level-item">
                                  <p>Usuarios cadastrados</p>
                                </div>
                            </nav> 

                            <table class="table is-fullwidth">
                                <thead>
                                    <tr>
                                        <td>id</td>
                                        <td>nome</td>
                                        <td>email</td>
                                        <td>Permissão</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuario as $usuario)
                                    <tr>
                                        <td>{{$usuario -> id}}</td>
                                        <td>{{$usuario -> name}}</td>
                                        <td>{{$usuario -> email}}</td>
                                        <td><?php if($usuario -> admin == 1){
                                        echo "Administrador";
                                        } else {
                                            echo "Usuario";
                                        }?></td>


                                <td>
                                    <form action="{{ route('usuario.destroy', $usuario->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button class="button is-danger" type="submit">Delete</button>
                                    </form>
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