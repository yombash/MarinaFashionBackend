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
        // адмика
        View::composer('layouts.verticalmenuadmin.main-sidebar', function ($view){
            $model = new Collection();
            $model->put('tables',[
                'admin.tables.brands' => 'Брэнды',
                'admin.tables.raw-types' => 'Тип материала',
                'admin.tables.sizes' => 'Размеры продукции',
                'admin.tables.genders' => 'Образ покупателя (пол)',
                'admin.tables.offers' => 'Товарные предложения',
            ]);
            $model->put('price',[
                'admin.tables.price.web' => 'Интернет-магазин',
            ]);

            $model->put('category',[
                'admin.tables.category.binding' => 'Список товара'
            ]);

            $view->with('main_menu',$model);
        });

        // интернет-магазин

    }
}
