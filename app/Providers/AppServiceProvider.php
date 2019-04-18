<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //$post = DB::table('blog_posts')->get();
        //View::share('post', $post);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $config = DB::table('Configuracoes')->get();
        View::share('config', $config);
        
    }
}
