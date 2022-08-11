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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile/{user}', '\App\Http\Controllers\ProfilesController@index')->name('profile.show');

Route::get('/posts/create', '\App\Http\Controllers\PostsController@create');
Route::post('/posts', '\App\Http\Controllers\PostsController@store');

require __DIR__.'/auth.php';
