<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/product',[App\Http\Controllers\ProductController::class,'index_general']);
Route::get('/product/detail/{id}',[App\Http\Controllers\ProductController::class,'index_detail']);

Route::controller(App\Http\Controllers\AuthController::class)->group(function(){
    Route::get('/login','index');
    Route::post('/login-process','login');
    Route::get('password/reset','forgotpass_index');
    Route::post('password/email','linkforgot');
    Route::get('password/reset/{token}','resetPassIndex')->name('password.reset');
    Route::post('password/update','updatePass');
});

Route::group(['middleware' => ['UserLogin']],function(){
    Route::get('dashboard/logout',[App\Http\Controllers\AuthController::class,'logout']);
    
    Route::controller(App\Http\Controllers\DashboardController::class)->group(function(){
        Route::get('dashboard/main','index');
    });

    Route::controller(App\Http\Controllers\ProductController::class)->group(function(){
        Route::get('dashboard/product','index');
        Route::get('dashboard/create-product','create');
        Route::post('dashboard/store-product','store');
        Route::get('dashboard/edit-product/{id}','edit');
        Route::put('dashboard/update-product/{id}','update');
        Route::delete('dashboard/delete-product/{id}','destroy');
        Route::get('dashboard/search-product','search');
    });
});

Route::get('/config-clear', function() {
    Artisan::call('config:clear'); 
    return 'Configuration cache cleared!';
});

Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return 'Configuration cache cleared! <br> Configuration cached successfully!';
});

Route::get('/cache-clear', function() {
    Artisan::call('cache:clear');
    return 'Application cache cleared!';
});

Route::get('/view-cache', function() {
    Artisan::call('view:cache');
    return 'Compiled views cleared! <br> Blade templates cached successfully!';
});

Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'Compiled views cleared!';
});

Route::get('/route-cache', function() {
    Artisan::call('route:cache');
    return 'Route cache cleared! <br> Routes cached successfully!';
});

Route::get('/route-clear', function() {
    Artisan::call('route:clear');
    return 'Route cache cleared!';
});