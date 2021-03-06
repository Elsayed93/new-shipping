<?php
// use App\Http\Controllers\homeController;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NavbarController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\NewsServiesController;
use App\Http\Controllers\AirNewsController;
use App\Http\Controllers\homeController as ControllersHomeController;
// use App\Http\Controllers\homeController;
//
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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

require __DIR__ . '/auth.php';

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'as' => 'dashboard.',
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth', 'admin.middleware']
], function () {

    // home dashboard
    Route::get('/admin', [HomeController::class, 'index'])->name('home');

    // Route::resource('/', homeController::class);


    // Start This route News
    Route::resource('news', NewsServiesController::class);
    Route::resource('news_air', AirNewsController::class);

    // Route::get('admins', function () {
    //     return view('admin.pages.news.index');
    // });

    // Start This route News
    // Route::resource('/', ControllersHomeController::class);

    Route::resource('news', NewsServiesController::class);
    Route::resource('news_air', AirNewsController::class);



    // End This route News



    // settings
    Route::resource('settings', SettingController::class)->only(['index', 'update']);

    // navbar
    Route::resource('navbar', NavbarController::class)->except('show');

    //sliders
    Route::resource('sliders', SliderController::class)->except('show');





    //products
    Route::resource('products', ProductsController::class)->except(['show']);
});
