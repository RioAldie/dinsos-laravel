<?php

use App\Http\Controllers\EventController;
use App\Models\Event;
use App\Models\Report;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('dashboard');
});
Route::get('/reports', function () {
    return view('reports', ['reports' => Report::all()]);
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/reports/{report}', function (Report $report) {
    return view('report',['report' => $report]);
});

Route::get('/events', function () {
    return view('events', ['events' => Event::all()]);
})->name('events.show');
Route::get('/events/add', [EventController::class, 'create'])->name('event.add');
Route::post('/events/submit', [EventController::class,'submit'])->name('event.submit');
Route::post('/events/edit', [EventController::class,'edit'])->name('event.edit');