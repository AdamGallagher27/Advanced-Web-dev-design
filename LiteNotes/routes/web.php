<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;


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

Route::get('/dashboard', function () {
    // return view('dashboard');
    return redirect('/../index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';



// route for index
Route::get('/index', [NoteController::class, "index"])->middleware(["auth"]);

// route for store
Route::get('/store', [NoteController::class, "store"])->middleware(["auth"]);

// route for all crud operations
Route::resource("/notes", NoteController::class)->middleware(["auth"]);