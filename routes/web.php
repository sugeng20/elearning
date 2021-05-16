<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\Learners\BiodataController;
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

Route::get('/', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'index']);
Route::get('/sign-up', [AuthController::class, 'signUp']);

Route::prefix('learners')->group(function() {
    Route::resource('biodata', BiodataController::class);
});
