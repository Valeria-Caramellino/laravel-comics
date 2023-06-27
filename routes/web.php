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
    $data = config('comics');
    $links = config('store.someLinksTestata');
    $footerBlue = config('store.SectionBlueFooter');
    $SectionStringFooter= config('store.SectionStringFooter');
    $list=config('store.listFooter1');
    return view('welcome', compact('links','data','footerBlue','SectionStringFooter','list'));
});

Route::get('/otherpage', function () {
    $data = config('comics');
    $links = config('store.someLinksTestata');
    $footerBlue = config('store.SectionBlueFooter');
    $SectionStringFooter= config('store.SectionStringFooter');
    $list=config('store.listFooter1');
    return view('other', compact('links','data','footerBlue','SectionStringFooter','list'));
});
