<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'view'])->name('home');


Route::get('/contacts/', [\App\Http\Controllers\ContactsController::class, 'view'])
->name('contacts');
Route::get('/events', [\App\Http\Controllers\EventController::class, 'view'])->name('events');
Route::get('/event/{id}', [\App\Http\Controllers\EventController::class, 'event'])->name('event');
Route::get('/users', [\App\Http\Controllers\UserController::class, 'view'])->name('users');
Route::get('/user/{id}', [\App\Http\Controllers\UserController::class, 'user'])->name('user');
