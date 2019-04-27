<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Administrador</title>

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
                       conteudo
                       </div>                         
                   </div>                    
               </div>            
        </div>
            
    </section>
    </div>
    
</body>
</html>