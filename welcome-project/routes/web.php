<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
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

Route::get('home', [Pagescontroller::class, 'loader'])->name('home');

Route::get('students', [StudentController::class, 'students'])->name('students');

Route::get('scholarsdetails/{id}', [StudentController::class, 'details'])->name('studentdetails');

Route::get('students/new', [StudentController::class, 'create'])->name('students/create')->middleware('checkhere:50');

Route::get('students/update', [StudentController::class, 'update'])->name('students/edit');

Route::post('students/add', [StudentController::class, 'store'])->name('student.store');

Route::get('students/delete', [StudentController::class, 'delete'])->name('student/cancel');

Route::get('about-us', [PagesController::class, 'about'])->name('about');

Route::get('contact-us', [PagesController::class, 'contact'])->name('contact');
