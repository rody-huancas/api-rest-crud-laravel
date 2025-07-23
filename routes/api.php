<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/students', function () {
    return "Obteniendo lista de estudiantes";
});

Route::get('/students/{id}', function () {
    return "Obteniendo un estudiante";
});

Route::post('/students', function () {
    return "Creando estudiantes";
});

Route::put('/students/{id}', function () {
    return "Actualizando estudiantes";
});

Route::delete('/students/{id}', function () {
    return "Eliminando estudiantes";
});
