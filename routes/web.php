<?php

use App\Http\Controllers\CustomerController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/showAllMember', [CustomerController::class, 'show_all']);
Route::get('/showNames', [CustomerController::class, 'show_names']);
Route::get('/showDeleteFirst', [CustomerController::class, 'delete_first']);
