<?php

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


Route::controller(App\Http\Controllers\PersonalController::class)->group(function (){
    Route::get('/personal', 'index');
    Route::get('/personal/create', 'create');
    Route::post('/personalstore', 'store');
    Route::get('/personaledit/{personal}/edit', 'edit');
    Route::put('/personalupdate/{personal}', 'update');

    Route::delete('/personaldelete/{personal}/delete', 'destroy');
});