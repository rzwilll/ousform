<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdviseeController;
use App\Http\Controllers\OUSController;
use App\Http\Controllers\LogoutController;


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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/advisee/index', [App\Http\Controllers\AdviseeController:: class, 'index'])->name('advisee.index');
Route::get('/advisee/view', [App\Http\Controllers\AdviseeController:: class, 'show'])->name('advisee.view');

Route::get('/ous/index', [App\Http\Controllers\OUSController:: class, 'index'])->name('ous.index');
Route::get('/ous/view', [App\Http\Controllers\OUSController:: class, 'show'])->name('ous.view');
Route:: get('/ous/add', [App\Http\Controllers\OUSController::class, 'create'])-> name('ous.add');
Route:: get('/ous/edit', [App\Http\Controllers\OUSController::class, 'edit'])-> name('ous.edit');
Route:: get('/ous/generate_report', [App\Http\Controllers\OUSController::class, 'gen_report'])-> name('ous.gen_report');