<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [
    \App\Http\Controllers\PageController::class,
    'home',
])->name('pages.home');

// Affichage liste des présences
Route::get('/presences', [
    \App\Http\Controllers\AttendanceController::class,
    'index',
])->name('attendances.index');

Route::get('/etudiants', [
    \App\Http\Controllers\StudentController::class,
    'index',
])->name('students.index');

Route::post('/etudiants', [
    \App\Http\Controllers\StudentController::class,
    'store'
])->name('students.store');

Route::get('/etudiants/create', [
    \App\Http\Controllers\StudentController::class,
    'create',
])->name('students.create');

Route::get('/etudiants/{student}', [
    \App\Http\Controllers\StudentController::class,
    'show',
])->name('students.show');

Route::get('/etudiants/{student}/edit', [
    \App\Http\Controllers\StudentController::class,
    'edit',
])->name('students.edit');

Route::put('/etudiants/{student}', [
    \App\Http\Controllers\StudentController::class,
    'update',
])->name('students.update');

Route::delete('/etudiants/{student}', [
    \App\Http\Controllers\StudentController::class,
    'destroy',
])->name('students.destroy');
