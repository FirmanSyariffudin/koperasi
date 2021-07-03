<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RequestController;

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

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

// Request
Route::resource('request', RequestController::class);

// Member
Route::resource('member', MemberController::class);

// Users
Route::resource('users', UsersController::class)->except([
    'show',
]);

// Special Action Users
Route::get('/change-password', [ForgotPasswordController::class, 'index'])
    ->name('changePassword');
Route::post('/reset', [ForgotPasswordController::class, 'changePass'])
    ->name('changePass');
Route::post('/users/reset/{id}', [UsersController::class, 'reset'])
    ->name('users.reset');
Route::post('/users/name', [UsersController::class, 'change'])
    ->name('users.name');
