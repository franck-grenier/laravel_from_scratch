<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

Route::get('/test_auto_json', function () {
    return ['Welcome bro !' => 'my nigga !'];
});

Route::get('/test', function () {
    return view('test', [
        'name' => request('name')
    ]);
});

Route::get('/posts/{post}', [PostsController::class, 'show']);


Route::name('spatial/index')->get('/spatial', function () {
    return view('spatial/index');
});

Route::name('spatial/generic')->get('/spatial/generic', function () {
    return view('spatial/generic');
});

Route::name('spatial/elements')->get('/spatial/elements', function () {
    return view('spatial/elements');
});
