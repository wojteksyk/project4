<?php

use App\Http\Controllers\ArrayController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\UserFormController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('show',[ShowController::class,'show']);
Route::get("show_user", [ShowController::class,"showData"]);
Route::get("show_array", [ArrayController::class,"ShowArray"]);


Route::view('userform', 'forms.user_form');

Route::get('UserFormController',[UserFormController::class,'showUser']);