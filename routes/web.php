<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/user', function () {
    return view('user');
});

Route::get('students', [StudentController::class, 'index'])->name('student.index');

Route::get('students/create', [StudentController::class, 'create'])->name('student.create');

Route::post('/students',[StudentController::class,'store'])->name('student.store');

Route::get('students/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');

Route::put('students/{id}', [StudentController::class, 'update'])->name('student.update');

Route::get('students/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
