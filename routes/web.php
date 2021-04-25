<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CompanyRegister;
use App\Http\Livewire\CompanyLogin;
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

Route::get('/company/register', [CompanyRegister::class, 'render']);
Route::get('/company/login', [CompanyLogin::class, 'render']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
