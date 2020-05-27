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

Route::middleware(['login'])->group(function (){
    Route::get('/', 'DashboardController@view')->name('dashboard');
    Route::get('logout', 'LoginController@logout')->name('logout');

    Route::name('marketing.')->middleware(['marketing'])->prefix('marketing')->group(function(){
        Route::get('wordpress', 'WordpressController@marketing')->name('wordpress');
        Route::get('social', 'SocialController@view')->name('rrss');
        Route::get('google-analytics', 'AnalyticsController@marketing')->name('ga');
    });

    Route::name('erp.')->middleware(['erp'])->prefix('erp')->group(function(){
        Route::get('estadisticas', 'StatsController@view')->name('estadisticas');
        Route::get('tickets', 'TicketController@view')->name('tickets');
    });

    Route::name('ventas.')->middleware(['sales'])->prefix('ventas')->group(function(){
        Route::get('woocommerce', 'WoocommerceController@view')->name('woocommerce');
        Route::get('facebook', 'SocialController@ventas')->name('facebook');
    });
});



Route::get('/test', function(){
    $trello = new App\Earning();
    return $trello -> dateTimestamp();
})->name('test');

Route::get('forbidden', function(){
    $profile = new \App\Profile();
    return view('forbidden')->withProfile($profile);
})->name('forbidden');

Route::resource('call', 'CallController')->only(['update']);

Route::resource('login', 'LoginController')->only(['index', 'store'])->middleware('guest');