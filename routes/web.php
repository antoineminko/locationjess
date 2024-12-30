<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\client\ClientController;
use App\Http\Controllers\user\UserController;
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

Route::get('/', function () {
    return view('Accueil.index');
})->name('accueil');

Route::post('/user/login', [UserController::class, 'authLogin'])->name('user.login');
Route::post('/user/register', [UserController::class, 'userRegister'])->name('user.register');

Route::middleware(['auth'])->group( function() {
    Route::get('/client/dashboard', [ClientController::class, 'clientDashboard'])->name('homePage');
    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('adminPage');
    Route::post('/user/logout', [UserController::class, 'userLogout'])->name('user.logout');
});


