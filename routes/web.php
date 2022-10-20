<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'index']);


Route::post('/add-student', [StudentController::class, 'addStudent'])->name('student.add');
