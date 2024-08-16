<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminLaporanController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BentukKejadianController;
use App\Http\Controllers\ResponKejadianController;
use App\Http\Controllers\AdminStakeholderController;
use App\Http\Controllers\AdminLaporanKejadianController;
use App\Http\Controllers\BentukKejadianTlController;
use Illuminate\Queue\BeanstalkdQueue;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/bentukkejadian');

Route::redirect('/home', '/welcome');

Route::get(
    '/welcome',
    function () {
        return view('welcome', [
            'title' => 'Welcome',
        ]);
    }
)->middleware('auth');

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->middleware('guest')->name('login');
    Route::post('/login', 'auth');
    Route::post('/logout', 'logout');
});


Route::controller(AdminLaporanKejadianController::class)->middleware('auth')->group(function () {
    Route::get('/admin/bentukkejadian', 'index');
    Route::get('/admin/bentukkejadian/{id}', 'show');
});

Route::controller(AdminDashboardController::class)->middleware('auth')->group(function () {
    Route::get('/profil/{user}', 'show');
    Route::get('/profil/{user}/edit', 'edit');
    Route::put('/profil/{user}', 'update');
});

Route::controller(BentukKejadianController::class)->group(function () {
    Route::get('/bentukkejadian', 'kode');
    Route::post('/bentukkejadian', 'store');
    Route::get('/formbentukkejadian', 'laporbentukkejadian');
});

Route::controller(BentukKejadianTlController::class)->group(function () {
    Route::get('/bentukkejadiantl/{idbentukkejadian}', 'kode');
    Route::post('/bentukkejadiantl', 'store');
    Route::get('/formbentukkejadiantl', 'tlbentukkejadiantl');
});

Route::controller(AdminStakeholderController::class)->middleware('auth')->group(function () {
    Route::get('/adminstakeholder/pemberiinformasi', 'pemberiinfo');
    Route::get('/adminstakeholder/penindaklanjut', 'forkompinda');
});
