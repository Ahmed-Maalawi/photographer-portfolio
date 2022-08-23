<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//  => route for submit contact form
Route::post('mail/submit', [ContactController::class, 'submit'])->name('mail.submit');

//  => route for submit subscribe form
Route::post('subscribe/submit', [SubscriberController::class, 'subscribe'])->name('mail.subscribe');
