<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\WebsitesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('posts', [PostsController::class, 'store']);
Route::post('websites/{website}/subscribe', [WebsitesController::class, 'subscribe']);
