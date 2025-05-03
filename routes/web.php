<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController; 
use App\Http\Controllers\RegistrationController; 



Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::get('/register/{id}', [RegistrationController::class, 'create']);
Route::post('/register', [RegistrationController::class, 'store']);

Route::get('/calendar', [EventController::class, 'calendar'])->name('events.calendar');
Route::get('/calendar/events', [EventController::class, 'getCalendarEvents'])->name('calendar.events');
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
