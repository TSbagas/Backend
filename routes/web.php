<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\VisiMisiTujuanController;

use App\Models\Sejarah;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'Login'])->name("login");
    Route::post('/ceklogin', [AuthController::class, 'CekLogin']);
    Route::get('/register', [AuthController::class, 'Register']);
    Route::post('/simpanuser', [AuthController::class, 'SimpanUser']);
});
Route::fallback(function () {
    return view('Layouts.error404');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'Logout']);
    Route::get('/beranda', [NavController::class, 'Beranda']);
    Route::get('/dosen', [NavController::class, 'Dosen']);

    // Sejarah
    Route::get('/sejarah', [SejarahController::class, 'index']);
    Route::get('/sejarah/{id}/edit', [SejarahController::class, 'edit']);
    Route::put('/sejarah/{id}/update', [SejarahController::class, 'update'])->name('sejarah.update');
    Route::put('/sejarah/{id}', [SejarahController::class, 'update']);
    Route::get('/sejarah/{id}/delete', [SejarahController::class, 'destroy'])->name('sejarah.destroy');
    Route::get('/sejarah/addsejarah', [SejarahController::class, 'add']);
    Route::post('/sejarah/create', [SejarahController::class, 'create'])->name('sejarah.create');

    // Visi Misi Dan Tujuan
    Route::get('/visi-misi-dan-tujuan', [VisiMisiTujuanController::class, 'index']);
    Route::get('/visi-misi-dan-tujuan/{id}/edit', [VisiMisiTujuanController::class, 'edit'])->name('visi-misi-dan-tujuan.edit');
    Route::put('/visi-misi-dan-tujuan/{id}/update', [VisiMisiTujuanController::class, 'update'])->name('visi-misi-dan-tujuan.update');
    Route::put('/visi-misi-dan-tujuan/{id}', [VisiMisiTujuanController::class, 'update']);
    Route::get('/visi-misi-dan-tujuan/{id}/destroy', [VisiMisiTujuanController::class, 'destroy'])->name('visi-misi-dan-tujuan.destroy');
    Route::get('/visi-misi-dan-tujuan/create', [VisiMisiTujuanController::class, 'create']);
    Route::post('/visi-misi-dan-tujuan/store', [VisiMisiTujuanController::class, 'store'])->name('visi-misi-dan-tujuan.store');

    // Dosen
    Route::get('/dosen', [DosenController::class, 'index']);
    Route::get('/dosen/{id}/edit', [DosenController::class, 'edit'])->name('dosen.edit');
    Route::put('/dosen/{id}/update', [DosenController::class, 'update'])->name('dosen.update');
    Route::put('/dosen/{id}', [DosenController::class, 'update']);
    Route::get('/dosen/{id}/destroy', [DosenController::class, 'destroy'])->name('dosen.destroy');
    Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen.create');
    Route::post('/dosen/store', [DosenController::class, 'store'])->name('dosen.store');

    // Users
    Route::get('/users', [UsersController::class, 'index'])->name('users');
    Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UsersController::class, 'update'])->name('users.update');
    Route::get('/users/{id}/delete', [UsersController::class, 'delete'])->name('users.destroy');
    Route::get('/users/addusers', [UsersController::class, 'add']);
    Route::post('/users/create', [UsersController::class, 'create'])->name('users.create');
});
