<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\DiarioController;
use App\Http\Controllers\loginController;

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
Route::get('/', function () {return view('welcome');})->name('welcome');


Route::get('/registrar',[RegistroController::class, 'create'])->name('register.index');
Route::post('/registrar', [RegistroController::class, 'store'])->name('register.store');
/*Route::get('/login', function () {return view('login');})->name('login');*/
/*Route::get('/registrar', function () {return view('registrar');})->name('registrar');*/


Route::get('/inicio', function () {return view('inicio');})->name('inicio');
Route::get('/diario', [DiarioController::class, "index"])->name("diario.index");
Route::post('/diario-crear', [DiarioController::class, "create"])->name("diario.create");


Route::post('/diario-modificar', [DiarioController::class, "update"])->name("diario.update");
Route::get('/diario-eliminar-{id}', [DiarioController::class, "delete"])->name("diario.delete");

Route::get('/login', [LoginController::class, 'create'])->name('login.create');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');