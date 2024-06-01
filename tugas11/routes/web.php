<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;


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

Route::get('/',[HomeController::class,'index'] );
Route::get('/register',[AuthController::class,'form'] );
Route::post('/form',[AuthController::class,'store']);
Route:: get('/data-table', function() {
    return view('pages.data-table');
});
Route:: get('/table', function() {
    return view('pages.table');
});
use App\Http\Controllers\CastController;

Route::resource('cast', CastController::class);