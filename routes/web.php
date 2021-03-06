<?php
use App\v_emprestimo;

//Rota para a pagina inicial
Route::get('/', function () {
  return view('pgInicial');
});

//Rota para acessar o blog
Route::get('blogView', 'pgBlogController@index');
//Rotas para acessar a pagina de busca
Route::get('buscar', 'pgBuscaController@index');
Route::post('buscaLivro', 'pgBuscaController@buscar');

//Rotas para variaveis em Controller
Route::resource('post', 'pgBlogController');
Route::resource('busca', 'pgBuscaController');

//Rotas que necessitam autenticação
//A partir desta linha eh requerido autenticação
Auth::routes();
Route::group(['middleware' => ['web','auth']], function(){
	
//Rota que redireciona do login para a pagina de respectivel nivel de acesso
  Route::get('/home', function() {
    if (Auth::user()->admin == 0) {
      return view('userHome');

    } else {
      
      return view('adminHome');
    }
  });
//Rota para administrador acessar o painel do usuario
Route::get('userHome', function () {
  return view('userHome');
});
//Rota para o administrador voltar do painel do usuario para o painel do administrador
Route::get('adminHome', function () {
      if (Auth::user()->admin == 1) {
      return view('adminHome');
    }else {
      return view('userHome');      
    }

});

//Rota para editar a aparencia da homepage
Route::resource('aparencia', 'configController')->middleware('admin');
//Rota para CRUD cadastro de usuario
Route::resource('usuario', 'usuarioController')->middleware('admin');
//Rota para CRUD posts 
Route::resource('blog', 'blogController')->middleware('admin');
//Rota para CRUD emprestimo de livros
Route::resource('emprestimo', 'emprestimoController');
//Rota auxiliar para busca de livros emprestados
Route::post('/emprestimo/index', 'emprestimoController@buscar');
//Rota para cadastro de livros
Route::resource('livro', 'livroController');
//Rota auxiliar para busca de livros
Route::post('/livro/index', 'livroController@buscar');

//Rota para CRUD clientes
Route::resource('cliente', 'ClienteController');
//Rota auxiliar para busca de clientes
Route::post('/cliente/index', 'ClienteController@buscar');

//Rota para CRUD autor
Route::resource('autor', 'AutorController');
//Rota auxiliar para busca de autores
Route::post('/autor/index', 'AutorController@buscar');

//Rota para CRUD genero
Route::resource('genero', 'GeneroController');
//Rota auxiliar para busca de generos
Route::post('/genero/index', 'GeneroController@buscar');

//Rota para CRUD editora
Route::resource('editora', 'EditoraController');
//Rota auxiliar para busca de editoras
Route::post('/editora/index', 'EditoraController@buscar');

//Rota para CRUD prateleira
Route::resource('prateleira', 'PrateleiraController');
//Rota auxiliar para busca de prateleiras
Route::post('/prateleira/index', 'PrateleiraController@buscar');

Route::get('/em_atraso', function () {
  return view('layouts.livrosAtraso');
});


});