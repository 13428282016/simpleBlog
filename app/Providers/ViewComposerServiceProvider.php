<?php namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // 使用类来指定视图组件
        View::composer('layout.main', 'App\Http\ViewComposers\UserViewComposer');
        View::composer('layout.ucenter', 'App\Http\ViewComposers\UserViewComposer');

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}