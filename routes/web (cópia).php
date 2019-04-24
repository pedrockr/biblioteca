<?php


//Rota para a pagina inicial
Route::get('/', function () {
  return view('pgInicial');
});
//Rota para acessar o blog
Route::get('blog', 'pgBlogController@index');
//Rota para acessar a pagina de busca
Route::get('buscar', 'pgBuscaController@index');
Route::post('buscaLivro', 'pgBuscaController@buscar');

//Rotas para variaveis em Controller
Route::resource('post', 'pgBlogController');
Route::resource('busca', 'pgBuscaController');



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


    Route::get('home_customizar', function () {
        
        if(Auth::user()->admin == 1)
        return view('admin.home_customizar');
    })->name('home_customizar');

    Route::get('blogEditar', function () {        
        if(Auth::user()->admin == 1)
        return view('admin.blogEditar');
    });
    Route::get('blogCriar', function () {
        $dados = "teste post cust";
        if(Auth::user()->admin == 1)
        return view('admin.blogCriar');
    });

Route::resource('configUpdate', 'configController');
Route::resource('blog', 'configController');






});