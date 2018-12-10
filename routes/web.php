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

//PÁGINAS DINÂMICAS
Route::get('/', 'HomeController@index');

Route::get('/cursos', 'CursoController@index');

Route::get('/cursos/{id}', 'CursoController@getCursoById');

Route::get('/contato/{id}', 'CursoController@getAssuntoOrcamento');



//PÁGINAS ESTÁTICAS
Route::get('/historia', function () {
    return view('historia');
});

Route::get('/missao', function () {
    return view('missao');
});

Route::get('/executivo', function () {
    return view('executivo');
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

Route::get('/palestras', function () {
    return view('palestras');
});

Route::get('/galeria', function () {
    return view('galeria');
});