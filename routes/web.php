<?php

Route::get('home', function () {
    return view('pgInicial');
});

Route::get('blog', 'pgBlogController@index');

Route::get('menu', function () {
    return view('layout.menuInicial');
});

Route::resource('post', 'pgBlogController');

