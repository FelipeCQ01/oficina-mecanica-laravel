<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MecanicoController;
//use App\Http\Controllers\CarroController;
//use App\Http\Controllers\ServicoController;

route::resource('mecanicos', MecanicoController::class);
// Route::get('/teste', function () {
//     return 'Sistema da Oficina Mecânica funcionando!';
// });


// Route::get('/mecanicos', [MecanicoController::class, 'index']);
// Route::get('/mecanicos/{id}', [MecanicoController::class, 'show']);


// Route::get('/carros', [CarroController::class, 'index']);
// Route::get('/carros/{id}', [CarroController::class, 'show']);


// Route::get('/servicos', [ServicoController::class, 'index']);
// Route::get('/servicos/{id}', [ServicoController::class, 'show']);