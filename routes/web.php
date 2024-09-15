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
Route::get('participants/ambrose-tarasov', [MainController::class, 'ambroseTarasov']);
Route::get('participants/arthur-davletshin', [MainController::class, 'arthurDavletshin']);
Route::get('participants/nikita-govorov', [MainController::class, 'nikitaGovorov']);
Route::get('participants/dmitry-dmitrienko', [MainController::class, 'dmitryDmitrienko']);
Route::get('participants/alexey-morgunov', [MainController::class, 'alexeyMorgunov']);
Route::get('participants/daniil-stadnyuk', [MainController::class, 'daniilStadnyuk']);
Route::get('participants/moscow-symphony-orchestra', [MainController::class, 'moscowSymphonyOrchestra']);
Route::get('participants/osipov-orchestra', [MainController::class, 'osipovOrchestra']);
Route::get('participants/russia-band', [MainController::class, 'russiaBand']);
Route::get('participants/young-soloists-band', [MainController::class, 'youngSoloistsBand']);
Route::get('participants/louise-mintsayeva', [MainController::class, 'louiseMintsayeva']);
Route::get('participants/desislava-bobrina', [MainController::class, 'desislavaBobrina']);
Route::get('participants/alina-timofeeva', [MainController::class, 'alinaTimofeeva']);
Route::get('participants/natalia-shatokhina', [MainController::class, 'nataliaShatokhina']);
Route::get('posters', [MainController::class, 'posters']);
Route::get('contacts', [MainController::class, 'contacts']);
