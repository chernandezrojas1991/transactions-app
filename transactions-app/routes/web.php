<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\IncomeController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Auth::routes();

#Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#index es el método para obtener todos los ingresos registrados
#obtener lista de ingresos
Route::get('/incomes', [IncomeController::class, 'index']);
#store para agregar un ingreso a bd
Route::post('/incomes', [IncomeController::class, 'store']);

#############################################################

#obtener formulario donde creo un ingreso
#create es el método para crear y mostrar el formulario que permite agregar un ingreso
#incomes/create sería home
Route::get('/incomes/create', [IncomeController::class, 'create']);



