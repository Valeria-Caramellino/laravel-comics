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
    $data = [
        'data' => config('comics'),
        'links' => config('store.someLinksTestata'),
        'footerBlue' => config('store.SectionBlueFooter'),
        
        'SectionStringFooter' => config('store.SectionStringFooter'),
        
    ];
     
   
    return view('welcome', $data);
});

Route::get('/otherpage', function () {
    $data = [
        'data' => config('comics'),
        'links' => config('store.someLinksTestata'),
        'footerBlue' => config('store.SectionBlueFooter'),
        
        'SectionStringFooter' => config('store.SectionStringFooter'),
        
    ];
    return view('other', $data);
});
