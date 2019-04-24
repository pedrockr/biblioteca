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
//Route::resource('configUpdate', 'configController');


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

    Route::get('blog_post', function () {
        
        if(Auth::user()->admin == 1)
        return view('admin.blog');
    });
    Route::get('blog_customizar', function () {
        $dados = "teste post cust";
        if(Auth::user()->admin == 1)
        return $dados;
    });

Route::resource('configUpdate', 'configController');






});