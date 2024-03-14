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
    $title = "un messaggio dinamico";
    $page_title = Config::get("hello.page_title");
    $wellcome_page = Config::get("hello.wellcome_page");
    return view(
        'home',
         [
            'title'=> $title,
            'page_title'=> $page_title,
            'wellcome_page'=> $wellcome_page
        ]
    );
});
Route::get('/descrizione', function () {
    return view('descrizione');
});