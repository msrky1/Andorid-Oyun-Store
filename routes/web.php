<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use Whoops\Run;


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


Route::get('/' , 'App\Http\Controllers\GameController@welcome');
Route::get('/oyunlar/{slug}' , 'App\Http\Controllers\GameController@detail')->name('detail');
Route::get('/kategori/{category}' , 'App\Http\Controllers\GameController@category')->name('category');

Route::get('/search' ,  'App\Http\Controllers\GameController@detail')->name('search');

Route::post('/game/save' , 'App\Http\Controllers\SaveController@save')->name('save');
// Route::get('/kaydedilen-oyunlar' , 'App\Http\Controllers\SaveController@kaydedilenler')->name('kaydedilenler');
Route::get('/bildirimler' , 'App\Http\Controllers\SaveController@bildirimler')->name('bildirimler');

Route::post('/image-save' , 'App\Http\Controllers\GooglePlay@saveImage')->name('saveimage');
Route::get('/image-delete/{id}' , 'App\Http\Controllers\GooglePlay@imageDelete')->name('deleteimage');
Route::post('/link-save' , 'App\Http\Controllers\DownloadController@linkSave')->name('linksave');

Route::get('/link-delete/{id}' , 'App\Http\Controllers\DownloadController@deleteLink')->name('deletelink');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
