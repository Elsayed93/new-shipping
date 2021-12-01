<?php

use App\Http\Controllers\Them\HomeController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']], function () {
    // them routes
    // Route::prefix('them')->group(function () {
    //     // them home
    //     Route::get('/home', [HomeController::class, 'index']);
    // });

    // main page for website
    Route::get('/', [HomeController::class, 'index']);

    // user profile
    Route::get('user-profile', [HomeController::class, 'profile'])->middleware('user.middleware')->name('user.profile');
});





// Route::get('/', function () {
//     return view('welcome');
// });

// test route to test the them

// Route::resource('/' , homeController::class );
