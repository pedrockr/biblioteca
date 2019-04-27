<?php
//Rota para a pagina inicial
Route::get('/', function () {
  return view('pgInicial');
});

//Rota para acessar o blog
Route::get('blogView', 'pgBlogController@index');
//Rota para acessar a pagina de busca
Route::get('buscar', 'pgBuscaController@index');
Route::post('buscaLivro', 'pgBuscaController@buscar');

//Rotas para variaveis em Controller
Route::resource('post', 'pgBlogController');
Route::resource('busca', 'pgBuscaController');

Route::get('register', function(){
  return view ('auth.register');
});

//Rotas que necessitam autenticação
Auth::routes();

Route::group(['middleware' => ['web','auth']], function(){
	
  Route::get('/home', function() {
    if (Auth::user()->admin == 0) {
      return view('userHome');

    } else {
      
      return view('adminHome');
    }
  });



Route::resource('aparencia', 'configController')->middleware('admin');
Route::resource('usuario', 'usuarioController')->middleware('admin');
Route::resource('blog', 'blogController');


});