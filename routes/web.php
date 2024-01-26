<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudAppController;

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

Route::controller(CrudAppController::class)->group(function(){
    Route::get('/','Home');
    Route::get('/show/{id}/','ShowSingle');
    Route::get('/register','Register');
    Route::post('/store','Store');
    Route::get('/delete/{id}',"Delete");
    Route::get('/update/{id}','Update');
    Route::put('/updateStore/{id}','UpdateStore');

});
