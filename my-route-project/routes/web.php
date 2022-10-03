<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


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


// home page route
Route::get('/home', [PageController::class, "home"])->name('home');

// about us route
Route::get('/aboutUs', [PageController::class, "aboutUs"])->name('aboutUS');

// contact us route
Route::get('/contactUs', [PageController::class, "contactUs"])->name('contactUs');
