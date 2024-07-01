<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);


Route::get('/produtos', function () {
    $busca = request('search');
    return view('produtos', ['busca' => $busca]);
}); 

Route::get('/produto/{id}', function ($id) {
    return view('produto', ['id' => $id]);
}); 

