<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use App\Http\Livewire\Index;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Site\IndexController@index');

Route::group(['prefix' => 'admin'], function (Router $route) {
//    $route->get('/', 'Admin\IndexController@index');
    Route::view('/', 'livewire.emptypage');
    $route->group(['prefix' => 'tables'], function (Router $route) {
//        $route->get('templates', 'Admin\TablesController@templates');

        // бренды
        $route->view('brands', 'admin.tables.brands');

        // образ покупателя: для мужчин, для женщин
        $route->view('genders', 'admin.tables.genders');

        // виды тканей: кулирка, вэлсофт
        $route->view('raw_types', 'admin.tables.raw_types');

        // размеры изделий
        $route->view('sizes', 'admin.tables.sizes');

        // товарные предложения
        $route->view('offers', 'admin.tables.offers');

        // экземпляры сырья (принадлежит к типу сырья)
        $route->get('raws/{parent_id}', 'Admin\TablesController@raws');

        // группы шаблонов моделей: рубашка, платье, халат
        $route->get('template_groups/{parent_id}', 'Admin\TablesController@template_groups');

        // шаблоны (модели) изделий: т87, т122
        $route->get('templates/{parent_id}', 'Admin\TablesController@templates');

        // фасоны изделий: цвета такани, различные рисунки
        $route->get('fashions/{parent_id}', 'Admin\TablesController@fashions');

        // продукты изделий: размеры фасонов
        $route->get('items/{parent_id}', 'Admin\TablesController@items');

    });

    $route->group(['prefix' => 'constructors'], function (Router $route) {
        // товарные предложения
        $route->view('offer/{offerId}', 'admin.constructors.offer');

    });

});

