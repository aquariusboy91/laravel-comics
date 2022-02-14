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
    $data = ['comics' => config('comics'), 'nomePagina' => 'Comics - Home'];
    return view('guest.home' , $data);
});

Route::get('/Characters', function () {
    return view('guest.Characters');
})->name('Characters');

Route::get('/comic/{id}', function ($id) {

    $collection = collect(config('comics'));
    $comic = $collection->where('id', $id);

    $singleComic = '';
    foreach ($comic as $value) {
        $singleComic = $value;
    }

    return view('guest.comic',[
        'comic' => $singleComic,
    ]);
})->name('comic');


