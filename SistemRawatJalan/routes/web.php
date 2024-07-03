<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\Rekam_MedisController;
use App\Http\Controllers\JDokterController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('backend.index');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/dashboards', [DashboardController::class, 'dashboards'])->middleware('auth')->name('dashboards');

Route::post('/pasiens', [PasienController::class, 'store'])->name('pasiens.store');


// Route::middleware('admin')->group(function () {
// Route yang hanya dapat diakses oleh admin
Route::resource('pasiens', PasienController::class);
Route::resource('dokters', DokterController::class);
Route::resource('obats', ObatController::class);
Route::resource('pembayarans', PembayaranController::class);
Route::resource('dashboards', DashboardController::class);
Route::resource('rekammediss', Rekam_MedisController::class);
Route::resource('jDokters', JDokterController::class); // Perubahan nama rute di sini
Route::resource('kunjungans', KunjunganController::class);
Route::resource('antrians', AntrianController::class);
Route::resource('pendaftarans', PendaftaranController::class);
Route::resource('users', UserController::class);
//  });
