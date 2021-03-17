<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticlesController;

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

Route::get('/old/', function () {
    return view('welcome');
});

Route::get('/old/test_auto_json', function () {
    return ['Welcome bro !' => 'my nigga !'];
});

Route::get('/old/test', function () {
    return view('test', [
        'name' => request('name')
    ]);
});

// Routes to Spatial templated test site

Route::name('index')->get('/', function () {
    return view('spatial/index');
});

Route::name('generic')->get('/generic', function () {
    return view('spatial/generic');
});

Route::name('elements')->get('/elements', function () {
    return view('spatial/elements');
});

Route::name('articles_index')->get('/articles', [ArticlesController::class, 'index']);
Route::name('articles_post')->post('articles', [ArticlesController::class, 'store']);
Route::name('articles_create')->get('/articles/create', [ArticlesController::class, 'create']);
Route::name('articles_show')->get('/articles/{article}', [ArticlesController::class, 'show']);
