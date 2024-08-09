<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\SearchController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/information', [PageController::class, 'information']);

Route::get('/available', [PageController::class, 'available']);

Route::get('/reviews', [PageController::class, 'reviews']);

//PlaceController
Route::get('/places', [PlaceController::class, 'create'])->name('places.create');
Route::post('/places', [PlaceController::class, 'store']);

//Route to search page
Route::get('/search', [SearchController::class, 'search'])->name('search');