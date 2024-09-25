<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $logado = false;
    $adm = true;

    return view('index', ['logado' => $logado, 'adm' => $adm]);
});

Route::get('/contato', function () {
    return view('contato');
});