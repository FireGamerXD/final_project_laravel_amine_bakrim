<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.register');
});
Route::get('/event', [EventController::class , "index"])->name('event.index');

Route::get('/home', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/event', [EventController::class, 'index'])->name('event.index');

// Route for storing a new event
Route::post('/event/store', [EventController::class, 'store'])->name('event.store');

// Route for showing all events, returns JSON
Route::get('/event/show', [EventController::class, 'show']);
Route::put('/event/{event}', [EventController::class, 'update'])->name('events.update');
Route::delete('/event/{event}', [EventController::class, 'destroy'])->name('events.destroy');

require __DIR__.'/auth.php';
