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
        $config = DB::table('settings')->get();
        View::share('config', $config);

        $qtdLivros = DB::table('qtdLivros')->get();
        View::share('qtdLivros', $qtdLivros);

        $qtdClientes = DB::table('qtdClientes')->get();
        View::share('qtdClientes', $qtdClientes);

        $atraso = DB::table('v_emprestimos')->get();
        View::share('atraso', $atraso);
        
    }
}
