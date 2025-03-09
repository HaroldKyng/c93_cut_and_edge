<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/', [HomeController::class, 'homepage'])->name('home');

Route::controller(LoginController::class)->group(function () {
//    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::post('/register/process', 'register_process')->name('register.process');

    Route::get('/profile/{man_no}', 'my_profile')->name('profile');

    Route::get('/register-page', 'register_page')->name('register.page');
    Route::get('/register', 'register_page')->name('register');
    Route::post('/login/process', 'login_process')->name('login.process');
    Route::get('/login-page', 'login_page')->name('login.page');
    Route::get('/forgot-password', 'forgot_password')->name('forgot_password');
    Route::post('/forgot/process', 'forgot_password_process')->name('forgot_password.process');
    Route::get('/support-page', 'support_page')->name('support_page');
    Route::get('/login', 'index')->name('login');
//    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('/clear-sessions', 'clear')->name('clear.sessions');
    Route::get('logout', 'logout')->name('logout');
});

Route::group(['middleware' => ['auth']], function () {





    Route::get('/users/list', [UserController::class, 'index'])->name('users.list');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/update', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/profile/{id}', [UserController::class, 'profile'])->name('users.profile');


    Route::get('/statuses/list', [StatusController::class, 'index'])->name('statuses.list');
    Route::post('/statuses/store', [StatusController::class, 'store'])->name('statuses.store');
    Route::get('/statuses/update/{status}', [StatusController::class, 'update'])->name('statuses.update');
    Route::delete('/statuses/delete/{status}', [StatusController::class, 'destroy'])->name('statuses.destroy');



});
