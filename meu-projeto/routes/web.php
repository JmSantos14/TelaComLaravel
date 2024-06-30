<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', function () {
    $busca = request('search');
    return view('produtos', ['busca' => $busca]);
}); 

Route::get('/produto/{id}', function ($id) {
    return view('produto', ['id' => $id]);
}); 

