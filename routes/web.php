<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;

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

Route::get('/', [ViewController::class, 'index'])->middleware('guest');

Route::get('/info', [ViewController::class, 'showInfo'])->middleware('guest');

Route::get('/location', [ViewController::class, 'showLocation'])->middleware('guest');

Route::get('/offer', [ViewController::class, 'showOffer'])->middleware('guest');

Route::get('/gallery', [ViewController::class, 'showGallery'])->middleware('guest');

Route::get('/edit', [ViewController::class, 'indexEdit'])->middleware('auth');

Route::get('info/edit', [ViewController::class, 'editInfo'])->middleware('auth');

Route::get('location/edit', [ViewController::class, 'editLocation'])->middleware('auth');

Route::get('/offer/edit', [ViewController::class, 'editOffer'])->middleware('auth');

Route::get('/gallery/edit', [ViewController::class, 'editGallery'])->middleware('auth');

Route::put('/editHomeData', [ViewController::class, 'editHomeData'])->middleware('auth');

Route::put('/editInfoData', [ViewController::class, 'editInfoData'])->middleware('auth');

Route::put('/editLocationData', [ViewController::class, 'editLocationData'])->middleware('auth');

Route::put('/editOfferData/{offer}', [ViewController::class, 'editOfferData'])->middleware('auth');

Route::delete('/deleteOffer/{offer}', [ViewController::class, 'deleteOffer'])->middleware('auth');

Route::post('/createOffer', [ViewController::class, 'createOffer'])->middleware('auth');

Route::post('/createImage', [ViewController::class, 'createImage'])->middleware('auth');

Route::delete('/deleteImage/{image}', [ViewController::class, 'deleteImage'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/loginVerification', [UserController::class, 'authenticate']);

Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/chatbotQuestions', [ViewController::class, 'showChatbotQuestions'])->middleware('auth');

Route::match(['get', 'post'], '/botman', 'App\Http\Controllers\BotManController@handle');
