<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
	<div class="container">
		@include('layouts/menuInicial')
		<br>
	</div>

	

<section class="container">	
		<div class="columns is-fullheight">
			<div class="column is-3">
				<aside class="menu">
					<form action="{{url('/buscaLivro')}}" method="post">
						{{ csrf_field() }}
						<input class="input has-text-centered" id="buscaNome" name="buscaNome" type="search" placeholder="buscaLivro">

						<input class="input has-text-centered" id="buscaAutor" name="buscaAutor" type="search" placeholder="buscaAutor">

						<input class="input has-text-centered" id="buscaEditora" name="buscaEditora" type="search" placeholder="buscaEditora">
						
						<button type="submit">buscar</button>

					</form>
				</aside>				
			</div>					
		

		
    <div class="column is-9">
    	<div class="box content">
    		<article class="post">
	    		<table class="table">
					<thead>
						<tr>
							<td>Nome</td>
							<td>QTD</td>
							<td>Autor</td>
							<td>Editora</td>
						</tr>
					</thead>
					<tbody>
						@foreach($busca as $busca)
						<tr>
							<td>{{ $busca->nome_livros }}</td>
						
							<td>{{ $busca->qtd_livros }}</td>
							<td>{{ $busca->nome_autores }}</td>
							<td>{{ $busca->nome_editoras }}</td>
						</tr>
						@endforeach
					</tbody>		
				</table>
			</article>
        </div>
    </div>
    </div>
</section>
	
</body>
</html>