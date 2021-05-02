<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NotifController;

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
Route::name('articles_post')->post('articles', [ArticlesController::class, 'store'])->middleware('auth');
Route::name('articles_put')->put('/articles/{article:id}', [ArticlesController::class, 'update'])->middleware('auth');
Route::name('articles_create')->get('/articles/create', [ArticlesController::class, 'create'])->middleware('auth');
Route::name('articles_show')->get('/articles/{article:slug}', [ArticlesController::class, 'show']);
Route::name('articles_edit')->get('/articles/{article:id}/edit', [ArticlesController::class, 'edit'])->middleware('auth');
Route::name('my_notifs')->get('/my-notifs', [NotifController::class, 'show'])->middleware('auth');

Auth::routes();

Route::name('contact')->get('/contact', [ContactController::class, 'show']);
Route::name('contact')->post('/contact', [ContactController::class, 'store']);
