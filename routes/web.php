<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\jobs\JobsController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\user\tutorController;
use App\Http\Controllers\type\SessionController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/admin/logout',[AdminController::class,'Logout'])->name('Logout');

Route::resource('tutors',tutorController::class);
Route::resource('jobs',JobsController::class);
Route::resource('sessions',SessionController::class);

//user management
Route::get('users/view',[UserController::class,'UserView'])->name('users');
Route::get('users/view/1',[UserController::class,'ViewUser'])->name('user');
Route::get('users/view/documents',[UserController::class,'doc'])->name('doc');