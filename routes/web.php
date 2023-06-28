<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Controladores Importados
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistryController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // RUTAS USUARIOS

    Route::get('/users', [UserController::class, 'index'])->name('indexusers');
    Route::get('/users/create', [UserController::class, 'create'])->name('createuser');
    Route::post('/users', [UserController::class, 'store'])->name('storeuser');
    Route::get('/users/{user}', [UserController::class, 'edit'])->name('edituser');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('updateuser');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('destroyuser');

    // RUTAS REGISTROS

    Route::get('/registries', [RegistryController::class, 'index'])->name('indexregistry');
    Route::get('/registries/create', [RegistryController::class, 'create'])->name('createregistry');
    Route::post('/registries', [RegistryController::class, 'store'])->name('storeregistry');
    Route::get('/registries/{registry}', [RegistryController::class, 'edit'])->name('editregistry');
    Route::put('/registries/{registry}', [RegistryController::class, 'update'])->name('updateregistry');
    Route::delete('/registries/{registry}', [RegistryController::class, 'destroy'])->name('destroyregistry');
    Route::get('/registries/{id}/restore', [RegistryController::class, 'restore'])->name('restoreregistry');
    Route::get('/informeRegistries', [RegistryController::class, 'informe'])->name('informeregistry');
});

