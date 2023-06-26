<?php

use App\Http\Controllers\formController;
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

Route::get('/', [formController::class,'index']);

Route::resource('Form',formController::class);

Route::get ('/success',function()
{
    return view('success');
}
)->name('success');

