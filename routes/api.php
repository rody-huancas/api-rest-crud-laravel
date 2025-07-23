<?php

use App\Http\Controllers\Api\studentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/students', [studentController::class, "index"]);

Route::get('/students/{id}', function () {
    return "Obteniendo un estudiante";
});

Route::post('/students',  [studentController::class, "store"]);

Route::put('/students/{id}', function () {
    return "Actualizando estudiantes";
});

Route::delete('/students/{id}', function () {
    return "Eliminando estudiantes";
});
