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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return '<h1>Hello World</h1>';
// });

// вызовем view
// Route::get('/', function () {
//     return view('home');
// });


// вызовем контроллер (это КЛАСС - MainController) и экшн (это МЕТОД данного класса - index)
Route::get('/', 'MainController@index')->name('home'); // добавление ->name('home') для ссылки на главную странцу

// реализация поиска на сайте 
Route::get('/search', 'MainController@search')->name('search');


// передача переменной в представлении
// Route::get('/', function () {
//     $test = 'Hi';
//     return view('home', compact('test'));
// });


Route::get('/about', function () {
    return 'About page';
});
