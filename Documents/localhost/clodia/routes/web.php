<?php

use App\Http\Controllers\T_tran_tempController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[T_tran_tempController::class, 'index']);
Route::get('/clodia',[T_tran_tempController::class, 'clodia'])->name('clodia.index');

