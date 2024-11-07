<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){return view('login');});

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/records', [StudentController::class, 'records'])->name('students.records');
Route::get('/students/attendance', [StudentController::class, 'attendance'])->name('students.attendance');
Route::get('/students/grades', [StudentController::class, 'grades'])->name('students.grades');

Route::post('/students', [StudentController::class, 'store'])->name('students.store');
