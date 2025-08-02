<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\IssueController;
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
    return view('welcome');
});

Route::get('/User/SignUp', function () {
    return view('User\SignUp');
});

Route::post('/User/Login', [Users::class, 'Login'])->name('Login');
Route::post('/User/SignUp', [Users::class, 'SignUp'])->name('User.SignUp');

Route::get('/home', function () {
    return view('dashboard.home');
})->name('User-dashboard');

Route::get('/registerProblem', function () {
    return view('dashboard.registerProblem');
})->name('registerProblem');

Route::post('/registerProblem', [IssueController::class, 'store'])->name('registerProblem');

Route::get('/problems', [IssueController::class, 'showNearby'])->name('problems');

Route::get('/logout', [Users::class, 'Logout'])->name('logout');

if (!Session::has('user_id')) {
    return redirect('/')->with('error', 'Please log in first.');
};
