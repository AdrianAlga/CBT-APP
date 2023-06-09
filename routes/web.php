<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminQuizController;
use App\Http\Controllers\Admin\AdminSchoolController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\AdminTeacher\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function (){
    Route::get('', fn()=>view("admin.home.index", ["title" => "Admin Dashboard"]))->name('admin.home.index');
    Route::get('school', [AdminSchoolController::class, 'index'])->name('admin.school.index');
    Route::get('teacher', [AdminTeacherController::class, 'index'])->name('admin.teacher.index');
    Route::resource('student', StudentController::class)->except(['create', 'show', 'edit'])->names('admin.student');
    Route::resource('quiz', AdminQuizController::class)->except(['create', 'show', 'edit'])->names('admin.quiz');
    Route::get('quiz/question', fn()=>view("admin.question.index"))->name('admin.question.index');
    Route::get('quiz/essay', fn()=>view("admin.question.essay"))->name('admin.question.essay');
    
});