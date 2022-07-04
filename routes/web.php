<?php


use Illuminate\Support\Facades\Route;
use Monolog\Processor\HostnameProcessor;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     // $test = 'Hi';
//     // return view('home', compact('test'));
//     return view('home');
// });

Route::get('/', 'App\Http\Controllers\MainController@index')->name('home');

Route::get('/search', 'App\Http\Controllers\MainController@search')->name('search');

Route::get('/about', function () {
    return 'about page';
});