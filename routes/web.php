<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Home@index');

Route::get('/nossa-historia', function () {
    return view('nossa_historia');
});

Route::get('/missao', function () {
    return view('missao');
});

Route::get('/corpo-executivo', function () {
    return view('corpo_executivo');
});

Route::get('/premiacao', function () {
    return view('premiacao');
});

Route::get('/mensagens', function () {
    return view('mensagens');
});

Route::get('/administracao', function () {
    return view('administracao');
});

Route::get('/consultoria', function () {
    return view('consultoria');
});

Route::get('/assessoria', function () {
    return view('assessoria');
});

Route::get('/cursos-profissionalizantes', function () {
    return view('cursos_profissionalizantes');
});

Route::get('/palestras', function () {
    return view('palestras');
});

Route::get('/galeria', function () {
    return view('galeria');
});