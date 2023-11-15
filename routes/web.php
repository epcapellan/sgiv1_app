<?php

use Illuminate\Support\Facades\Route;


use App\Livewire\Dashboard\DashAdmin;
use App\Livewire\Empresa\EmpresaAdmin;
use App\Livewire\Empresa\CreateFormEmpresa;

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

//Panel de administracion del dashboard
Route::get('/', dashAdmin::class)
    ->name('admin.dashboard');


// Gestion de empresas
Route::get('/nuevo', EmpresaAdmin::class)
    ->name('empresa.index');

Route::get('/EmpresaRegistrar', CreateFormEmpresa::class)
    ->name('empresa.crear');

