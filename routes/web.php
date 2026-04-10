<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [
    PageController::class,
    'home',
])->name('pages.home');

// Affichage liste des présences
Route::get('/presences', [
    AttendanceController::class,
    'index',
])->name('attendances.index');

Route::get('/etudiants', [
    StudentController::class,
    'index',
])->name('students.index');

Route::post('/etudiants', [
    StudentController::class,
    'store',
])->name('students.store');

Route::get('/etudiants/create', [
    StudentController::class,
    'create',
])->name('students.create');

Route::get('/etudiants/{student}', [
    StudentController::class,
    'show',
])->name('students.show');

Route::get('/etudiants/{student}/edit', [
    StudentController::class,
    'edit',
])->name('students.edit');

Route::put('/etudiants/{student}', [
    StudentController::class,
    'update',
])->name('students.update');

Route::delete('/etudiants/{student}', [
    StudentController::class,
    'destroy',
])->name('students.destroy');
