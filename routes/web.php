<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostsApiController;
use App\Http\Controllers\PostCommentsApiController;

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

Route::get('/', [PagesController::class, 'home']);
Route::resource('posts', PostsController::class);

Route::group(['prefix' => 'api/posts'], function () {
  Route::get('/', [PostsApiController::class, 'index']);
  Route::get('/{id}/content', [PostsApiController::class, 'content']);

  Route::get('/{id}/comments', [PostCommentsApiController::class, 'index']);
});
