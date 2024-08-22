<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exercicio01Controller;
use App\Http\Controllers\ExerciciosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicial/{nome}', function ($nome) {
    return "Olá mundo! " .$nome;
});

Route::get('/exerc1', [ExerciciosController::class, 
                'mostrarFormulario1']);

Route::post('/exerc1resp', [ExerciciosController::class, 
                'calcularFormulario1']);

Route::get('/exerc2', [ExerciciosController::class, 
                'mostrarFormulario2']);

Route::post('/exerc2resp', [ExerciciosController::class, 
                'calcularFormulario2']);

Route::get('/exerc3', [ExerciciosController::class, 
                'mostrarFormulario3']);

Route::post('/exerc3resp', [ExerciciosController::class, 
                'calcularFormulario3']);

Route::get('/exerc4', [ExerciciosController::class, 
                'mostrarFormulario4']);

Route::post('/exerc4resp', [ExerciciosController::class, 
                'calcularFormulario4']);

Route::get('/exerc5', [ExerciciosController::class, 
                'mostrarFormulario5']);

Route::post('/exerc5resp', [ExerciciosController::class, 
                'calcularFormulario5']);

Route::get('/exerc6', [ExerciciosController::class, 
                'mostrarFormulario6']);

Route::post('/exerc6resp', [ExerciciosController::class, 
                'calcularFormulario6']);

Route::get('/exerc7', [ExerciciosController::class, 
                'mostrarFormulario7']);

Route::post('/exerc7resp', [ExerciciosController::class, 
                'calcularFormulario7']);

Route::get('/exerc8', [ExerciciosController::class, 
                'mostrarFormulario8']);

Route::post('/exerc8resp', [ExerciciosController::class, 
                'calcularFormulario8']);

Route::get('/exerc9', [ExerciciosController::class, 
                'mostrarFormulario9']);

Route::post('/exerc9resp', [ExerciciosController::class, 
                'calcularFormulario9']);

Route::get('/exerc10', [ExerciciosController::class, 
                'mostrarFormulario10']);

Route::post('/exerc10resp', [ExerciciosController::class, 
                'calcularFormulario10']);

Route::get('/exerc11', [ExerciciosController::class, 
                'mostrarFormulario11']);

Route::post('/exerc11resp', [ExerciciosController::class, 
                'calcularFormulario11']);

Route::get('/exerc12', [ExerciciosController::class, 
                'mostrarFormulario12']);

Route::post('/exerc12resp', [ExerciciosController::class, 
                'calcularFormulario12']);

Route::get('/exerc13', [ExerciciosController::class, 
                'mostrarFormulario13']);

Route::post('/exerc13resp', [ExerciciosController::class, 
                'calcularFormulario13']);