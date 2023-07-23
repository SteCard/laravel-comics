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
    $lists = config('db-2.lists');
    $objs = config('db-2.objs');

    $mini_lists = config('db-2.mini-list');
    $dc_s = config('db-2.dc');
    $sites = config('db-2.sites');
    $imgs = config('db-2.imgs');

    return view('home', compact('products', 'lists', 'objs', 'mini_lists', 'dc_s', 'sites', 'imgs'));
}) -> name('home');
