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
                        @include('admin.asideAdmin')
                    </div>                                       

                    <div class="column is-10">
                        <div class="box">
                            <form action="{{route('configUpdate.update', $config[0]->id)}}" method="post">
            				@csrf
            				@method('PUT')

                            



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