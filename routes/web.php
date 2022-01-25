<?php

use App\Http\Controllers\SendDataController;
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

Route::view('/', 'welcome');

Route::view('faculty', 'faculty');

Route::view('department', 'department');

Route::post('save/faculty', [SendDataController::class, 'storefaculty'])->name('storeFaculty');

Route::post('save/department', [SendDataController::class, 'storedepartment'])->name('storeDepartment');