<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ReportController;
use App\Models\Event;
use App\Models\Report;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});
Route::get('/admin', function () {
    return view('dashboard');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/events', function () {
    return view('events', ['events' => Event::all()]);
})->name('events.show');
Route::get('/events/add', [EventController::class, 'create'])->name('event.add');
Route::post('/events/submit', [EventController::class,'submit'])->name('event.submit');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->name('event.edit');
Route::post('/events/update/{id}', [EventController::class, 'update'])->name('event.update');
Route::post('/events/delete/{id}', [EventController::class, 'delete'])->name('event.delete');

Route::get('/reports', function () {
    return view('reports', ['reports' => Report::all()]);
})->name('report.index');
Route::get('/reports/{report}', function (Report $report) {
    return view('report',['report' => $report]);
});
Route::get('/report/add', [ReportController::class, 'create'])->name('report.add');
Route::post('/reports/submit', [ReportController::class,'submit'])->name('report.submit');
Route::post('/reports/update/{id}', [ReportController::class, 'update'])->name('report.update');
Route::post('/reports/delete/{id}', [ReportController::class, 'delete'])->name('report.delete');

Route::get('/blogs', function () {
    return view('article.articles', ['events' => Event::all()]);
})->name('article.index');

Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blogpost', [BlogController::class, 'show'])->name('blog.post');
Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

Route::get('/pengaduan', function () {
    return view('lapor');
})->name('lapor.index');