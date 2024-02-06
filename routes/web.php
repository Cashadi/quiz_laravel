<?php

use App\Http\Controllers\JustControl;
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
    return view('welcome');
});

Route::get('/porto', function () {
    return view('porto');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function() {
    return view('register');
});

Route::get('/todolist', function () {
    return view('todolist');
});


Route::get('/', [JustControl::class, 'redirectToHome']);

// redirect landing page to login
Route::get('/login' , [JustControl::class,'redirectToLogin'])
->name('login');

// redirect to register
Route::get('/register', [JustControl::class,'redirectToRegister'])
->name('register');

// redirect to todolist
Route::get('/todolist', [JustControl::class,'redirectToTodolist'])
->name('todolist');

