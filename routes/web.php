<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckStatus;
use App\Http\Controllers\SwitchRoleController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\EmailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. System Integration
| and Architecture two midterm. Theseroutes are loaded by the RouteServiceProvider and all 
| of them will be assigned to the "web" middleware group. Make something great!
|
*/







Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])
    ->middleware('CheckStatus')->name('home');   
    Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::get('/users/{user}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('edit');
    Route::match(['get', 'patch'], '/users/{user}/update', [\App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::delete('/users/{user}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/show', [\App\Http\Controllers\WeatherController::class, 'showJsonData'])->name('show');
    Route::get('/show1', [\App\Http\Controllers\WeatherController::class, 'showJsonData1'])->name('show1');
   
    Route::get('/send-email', [EmailController::class, 'showEmailForm']);
    Route::post('/send-email', [EmailController::class, 'sendEmail']);