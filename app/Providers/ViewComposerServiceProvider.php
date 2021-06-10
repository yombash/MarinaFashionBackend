<?php

namespace App\Providers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.verticalmenuadmin.main-sidebar', function ($view){
            $model = new Collection();
            $model->put('tables',[
                'brands' => 'Брэнды',
                'raw_types' => 'Тип материала',
                'sizes' => 'Размеры продукции',
                'genders' => 'Образ покупателя (пол)',
            ]);
            $model->put('constructors',[
                'offers' => 'Товарные предложения',
            ]);
            $view->with('main_menu',$model);
        });
    }
}
