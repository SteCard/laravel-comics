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

    $products = config('db.comics');
    $lists = config('db.lists');
    $objs = config('db.objs');

    $mini_lists = config('db.mini-list');
    $dc_s = config('db.dc');
    $sites = config('db.sites');
    $imgs = config('db.imgs');

    return view('home', compact('products', 'lists', 'objs', 'mini_lists', 'dc_s', 'sites', 'imgs'));

}) -> name('home');

Route::get('/comics/{id}', function ($id) {

    $products = config('db.comics');
    $product = $products[$id];
    
    $objs = config('db.objs');
    $mini_lists = config('db.mini-list');
    $dc_s = config('db.dc');
    $sites = config('db.sites');
    $imgs = config('db.imgs');

    return view('comics', compact('product','objs', 'mini_lists', 'dc_s', 'sites', 'imgs'));

}) -> name('comics');