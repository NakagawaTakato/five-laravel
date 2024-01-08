<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\MiddlewareController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthController;
use App\Models\Person;

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

Route::get('/', [AuthController::class, 'index']);
Route::get('/test', [TestController::class, 'index']);
Route::get('/hello', [HelloController::class, 'index']);
Route::get('/test/{text?}', [TestController::class, 'index']);
Route::get('/middleware', [MiddlewareController::class, 'index']);
Route::post('/middleware', [MiddlewareController::class, 'post']);
Route::get('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);
Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});
Route::get('/softdelete', function () {
    Person::find(1)->delete();
});


