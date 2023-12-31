<?php

use App\Enums\EnumDespesaStatus;
use App\Enums\EnumDespesaTipo;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Site\DespesasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Site\DashboardController;
use App\Http\Controllers\Site\InvestimentosController;
use App\Http\Controllers\Site\ReceitasController;
use App\Http\Controllers\Site\ReservasController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index'])->name('index.home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function (){
    
    // Dashboard
    
    Route::get('/dashboard/{mes?}', [DashboardController::class, 'index'])->name('dashboard');

    


    //Investimentos
    Route::get('/investimentos', [InvestimentosController::class, 'index'])->name('investimentos.index');
    Route::get('/investimentos/create', [InvestimentosController::class, 'create'])->name('investimentos.create');
    
    
    //Reservas 
    Route::get('/reservas', [ReservasController::class, 'index'])->name('reservas.index');
    Route::get('/reservas/create', [ReservasController::class, 'create'])->name('reservas.create');

    
    // Despesas Routes 
    Route::get('/despesas', [DespesasController::class, 'index'])->name('despesas.index');
    Route::get('/despesas/show/{id}', [DespesasController::class, 'show'])->name('despesas.show');
    Route::get('/despesas/create', [DespesasController::class, 'create'])->name('despesas.create');
    Route::post('/despesas/store', [DespesasController::class, 'store'])->name('despesas.store');
    Route::get('/despesas/edit/{id}', [DespesasController::class, 'edit'])->name('despesas.edit');
    Route::put('/despesas/update/{id}', [DespesasController::class, 'update'])->name('despesas.update');
    Route::get('/despesas/delete/{id}', [DespesasController::class, 'delete'])->name('despesas.delete');
    Route::delete('/despesas/destroy/{id}', [DespesasController::class, 'destroy'])->name('despesas.destroy');


    // Receitas
    Route::get('/receitas', [ReceitasController::class, 'index'])->name('receitas.index');
    Route::get('/receitas/show/{id}', [ReceitasController::class, 'show'])->name('receitas.show');
    Route::get('/receitas/create', [ReceitasController::class, 'create'])->name('receitas.create');
    Route::post('/receitas/store', [ReceitasController::class, 'store'])->name('receitas.store');
    Route::get('/receitas/edit/{id}', [ReceitasController::class, 'edit'])->name('receitas.edit');
    Route::put('/receitas/update/{id}', [ReceitasController::class, 'update'])->name('receitas.update');
    Route::get('/receitas/delete/{id}', [ReceitasController::class, 'delete'])->name('receitas.delete');
    Route::delete('/receitas/destroy/{id}', [ReceitasController::class, 'destroy'])->name('receitas.destroy');
});

require __DIR__.'/auth.php';
