<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
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

Route::post('/', [Users::class, 'Login'])->name('Login');
Route::post('/', [Users::class, 'SignUp'])->name('SignUp');