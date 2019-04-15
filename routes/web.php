<?php

Route::get('/', function () {
  return view('pgInicial');
});

Route::get('reg', function () {
  return view('auth.register');
});

Route::get('blog', 'pgBlogController@index');

Route::resource('post', 'pgBlogController');

Auth::routes();

Route::group(['middleware' => ['web','auth']], function(){
//  Route::get('/', function () {
//      return view('welcome');
//  });

  Route::get('/home', function() {
    if (Auth::user()->admin == 0) {
      return view('userHome');
    } else {
      
      return view('adminHome');
    }
  });
});