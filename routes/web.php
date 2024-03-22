<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\DiarioController;

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


Route::get('/login', [SessionsController::class, 'create'])->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');
Route::get('/registrar',[RegistroController::class, 'create'])->name('register.index');
Route::post('/registrar', [RegistroController::class, 'store'])->name('register.store');
/*Route::get('/login', function () {return view('login');})->name('login');*/
/*Route::get('/registrar', function () {return view('registrar');})->name('registrar');*/


Route::get('/inicio', function () {return view('inicio');})->name('inicio');
Route::get('/diario', [DiarioController::class, "index"])->name("diario.index");
Route::post('/diario-crear', [DiarioController::class, "create"])->name("diario.create");


Route::post('/diario-modificar', [DiarioController::class, "update"])->name("diario.update");
Route::get('/diario-eliminar-{id}', [DiarioController::class, "delete"])->name("diario.delete");