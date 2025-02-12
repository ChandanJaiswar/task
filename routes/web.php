<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

//student Routes

Route::get('/index', function () {
    return view('index');

})->name('students.index');
Route::middleware(['auth:teacher'])->group(function () {

Route::get('/create-students', [StudentController::class, 'index'])->name('students.add');
Route::post('/create', [StudentController::class, 'create'])->name('students.store');

Route::get('students', [StudentController::class, 'showStudent'])->name('students.show');
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/update/{id}', [StudentController::class, 'update'])->name('students.update');

Route::delete('/delete/{id}', [StudentController::class, 'destroy'])->name('delete');

});


//teacher routes

Route::get('/create-teacher', function () {
    return view('createteacher');
})->name('teachers.index');
Route::post('/create-teacher', [StudentController::class, 'createteacher'])->name('teachers.store');

Route::get('/' ,function(){
    return view('teacher_login');
})->name('login');

Route::post('/login-teacher',[StudentController::class,'login'])->name('loginteacher');

Route::post('logout', function () {
    Auth::guard('teacher')->logout(); // Logout the teacher
    request()->session()->invalidate(); // Invalidate session
    request()->session()->regenerateToken(); // Regenerate CSRF token

    return redirect('/'); // Redirect to login page
})->name('teacher.logout');
