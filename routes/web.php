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
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/cookies', function () {
    return view('cookies');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/banker', 'BankerController@getBanker')->name('banker');

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

$reviews = DB::table('reviews')->simplePaginate(3);
View::share('addrev', $reviews);

Route::post('reviews', 'ReviewsController@reviews')->name('reviews');

Route::get('/reviews', 'ReviewsController@index')->name('reviews');
