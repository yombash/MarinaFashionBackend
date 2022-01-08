<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;

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

//Route::get('/', 'Site\IndexController@index');

Route::prefix('admin')->name('admin.')->group(function () {
//    $route->get('/', 'Admin\IndexController@index');
    Route::view('/', 'admin.index');
    Route::group(['prefix' => 'tables','as'=>'tables.'], function () {
//        $route->get('templates', 'Admin\TablesController@templates');

        // бренды
        Route::view('brands', 'admin.tables.brands')->name('brands');

        // образ покупателя: для мужчин, для женщин
        Route::view('genders', 'admin.tables.genders')->name('genders');

        // виды тканей: кулирка, вэлсофт
        Route::view('raw_types', 'admin.tables.raw_types')->name('raw_types');

        // размеры изделий
        Route::view('sizes', 'admin.tables.sizes')->name('sizes');

        // товарные предложения
        Route::view('offers', 'admin.tables.offers')->name('offers');

        // экземпляры сырья (принадлежит к типу сырья)
        Route::get('raws/{parent_id}', 'Admin\TablesController@raws');

        // группы шаблонов моделей: рубашка, платье, халат
        Route::get('template_groups/{parent_id}', 'Admin\TablesController@template_groups');

        // шаблоны (модели) изделий: т87, т122
        Route::get('templates/{parent_id}', 'Admin\TablesController@templates');

        // фасоны изделий: цвета такани, различные рисунки
        Route::get('fashions/{parent_id}', 'Admin\TablesController@fashions');

        // продукты изделий: размеры фасонов
        Route::get('items/{parent_id}', 'Admin\TablesController@items');

        Route::group(['prefix' => 'price','as'=>'price.'], function () {

            // прайс-лист интернет-магазина
            Route::view('web', 'admin.tables.price.web')->name('web');
        });

        Route::group(['prefix' => 'category','as'=>'category.'], function () {

            Route::view('listing', 'admin.tables.category.listing')->name('listing');
            Route::view('binding', 'admin.tables.category.binding')->name('binding');
        });

    });

    Route::group(['prefix' => 'constructors'], function (Router $route) {
        // товарные предложения
        $route->view('offer/{offerId}', 'admin.constructors.offer');

    });

});

// основное статическое меню
Route::prefix('/')->name('main.')->group(function () {
    Route::view('/', 'main.index')->name('index');
    Route::view('contacts', 'main.contacts')->name('contacts');
    Route::view('feedback', 'main.feedback')->name('feedback');
});

// интернет-магазин
Route::prefix('shop')->name('shop.')->group(function () {
    Route::view('/', 'shop.index')->name('index');
    Route::view('basket', 'shop.basket')->name('basket');

    Route::prefix('offer')->name('offer.')->group(function () {
        Route::view('details', 'shop.offer.details')->name('details');
    });

    Route::view('checkout', 'shop.checkout')->name('checkout');

    Route::prefix('auth')->name('auth.')->group(function () {
        Route::view('login', 'livewire.shop.auth.login')->name('login');
        Route::view('create', 'livewire.shop.auth.create')->name('create');
        Route::view('forgot', 'livewire.shop.auth.forgot')->name('forgot');

    });
});

