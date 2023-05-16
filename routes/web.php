<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentosController;
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

Route::post('/cadastrar', [AgendamentosController::class, 'store'])->name('agendamentos.salvar');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/consulta', [AgendamentosController::class, 'mostrar'])->name('agendamentos.mostrar');

Route::delete('/excluir/{id}', [AgendamentosController::class, 'deletar'])->name('agendamentos.deletar');

Route::get('/editar{id}', [AgendamentosController::class, 'editar'])->name('agendamentos.editar');

Route::put('/atualizar/{id}', [AgendamentosController::class, 'atualizar'])->name('agendamentos.atualizar');


