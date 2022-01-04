<?php

use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\TemplateSuratController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('welcome', function () {
    return view('welcome');
});
// Route::get('welcome', function () {
//     return view('pages.dashboard');
// });

Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');


// Kegiatan
Route::get('kegiatan', [KegiatanController::class, 'index'])->name('pages.kegiatan');
Route::get('create-kegiatan', [KegiatanController::class, 'create'])->name('kegiatan.create-kegiatan');
Route::post('save-kegiatan', [KegiatanController::class, 'store'])->name('kegiatan.simpan-kegiatan');
Route::get('edit-kegiatan/{id}', [KegiatanController::class, 'edit'])->name('kegiatan.edit-kegiatan');
Route::put('update-kegiatan/{id}', [KegiatanController::class, 'update'])->name('kegiatan.update-kegiatan');
Route::delete('delete-kegiatan/{id}', [KegiatanController::class, 'destroy'])->name('kegiatan.delete-kegiatan');
// Route::get('login', LoginAdmin::class, 'index');

// Template Surat
Route::get('template-surat', [TemplateSuratController::class, 'index'])->name('pages.template-surat');
Route::get('create-template-surat', [TemplateSuratController::class, 'create'])->name('template-surat.create-template');
Route::post('save-template-surat', [TemplateSuratController::class, 'store'])->name('template-surat.simpan-template');
Route::get('edit-template-surat/{id}', [TemplateSuratController::class, 'edit'])->name('template-surat.edit-template');
Route::put('update-template-surat/{id}', [TemplateSuratController::class, 'update'])->name('template-surat.update-template');
Route::delete('delete-template-surat/{id}', [TemplateSuratController::class, 'destroy'])->name('template-surat.delete-template');

// Surat
Route::get('surat', [SuratMasukController::class, 'index'])->name('pages.surat');
Route::get('create-surat', [SuratMasukController::class, 'create'])->name('surat.create-surat');
Route::post('save-surat', [SuratMasukController::class, 'store'])->name('surat.simpan-surat');
Route::get('edit-surat/{id}', [SuratMasukController::class, 'edit'])->name('surat.edit-surat');
Route::put('update-surat/{id}', [SuratMasukController::class, 'update'])->name('surat.update-surat');
Route::delete('delete-surat/{id}', [SuratMasukController::class, 'destroy'])->name('surat.delete-surat');