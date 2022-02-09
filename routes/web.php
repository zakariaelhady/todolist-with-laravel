<?php

use App\Http\Controllers\todolistcontroller;
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

Route::get('/', [todolistcontroller::class,'index']);


Route::post('/saveItem', [todolistcontroller::class,'saveItem'])->name('saveItem');

Route::post('/markcomplete/{id}', [todolistcontroller::class,'markcomplete'])->name('markcomplete');

Route::post('/deleteitem/{id}', [todolistcontroller::class,'deleteitem'])->name('deleteitem');