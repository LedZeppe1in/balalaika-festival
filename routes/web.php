<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index']);
Route::get('about', [MainController::class, 'about']);
Route::get('participants', [MainController::class, 'participants']);
Route::get('participants/alexander-nikolaychuk', [MainController::class, 'alexanderNikolaychuk']);
Route::get('participants/alexey-vrodlivets', [MainController::class, 'alexeyVrodlivets']);
Route::get('participants/andrey-gorbachev', [MainController::class, 'andreyGorbachev']);
Route::get('participants/oleg-piskunov', [MainController::class, 'olegPiskunov']);
Route::get('participants/arthur-davletshin', [MainController::class, 'arthurDavletshin']);
Route::get('participants/nikita-govorov', [MainController::class, 'nikitaGovorov']);
Route::get('participants/dmitry-dmitrienko', [MainController::class, 'dmitryDmitrienko']);
Route::get('posters', [MainController::class, 'posters']);
Route::get('contacts', [MainController::class, 'contacts']);
