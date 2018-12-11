<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

//PÁGINAS DINÂMICAS -> Usuário
Route::get('/', 'HomeController@index')->name('home.index'); // Select página inicial -> Cursos e CursosDestaque

Route::get('/cursos', 'CursoController@index')->name('cursos.list'); // Select página Cursos - Todos os Cursos

Route::get('/cursos/{id}', 'CursoController@getCursoById')->name('cursos.show'); // Select página Detalhes - Cursos por ID

Route::get('/contato/{id}', 'CursoController@getAssuntoOrcamento')->name('contato.show'); // Select página Contato - Curso por ID (Formulário)

Route::post('/contato', 'ContatoController@getDataFormContato')->name('contato.create');
// ----------------------------------------------------------------

//PÁGINAS DINÂMICAS -> ADMIN

Route::get('manager', 'ManagerController@index')->name('manager.index');
Route::get('manager/cursos', 'ManagerController@getCursos')->name('cursos.index');
// Route::post('manager/cursos', 'ManagerController@store')->name('cursos.store');
// Route::get('manager/cursos/create', 'ManagerController@create')->name('cursos.create');
Route::get('manager/cursos/{curso}/edit', 'ManagerController@edit')->name('cursos.edit');
Route::patch('manager/cursos/{curso}', 'ManagerController@update')->name('cursos.update');
Route::put('manager/cursos/{curso}', 'ManagerController@update')->name('cursos.update');
// Route::delete('manager/cursos/{contato}', 'ManagerController@destroy')->name('cursos.destroy'); //--> usar para desativar curso

Route::get('/manager/paginas', function () {
    return view('admin.paginas');
})->name('paginas.index');


//PÁGINAS ESTÁTICAS -> Usuário
Route::get('/historia', function () {
    return view('historia');
})->name('historia.index');

Route::get('/missao', function () {
    return view('missao');
})->name('missao.index');

Route::get('/executivo', function () {
    return view('executivo');
})->name('executivo.index');

Route::get('/premiacao', function () {
    return view('premiacao');
})->name('premiacao.index');

Route::get('/mensagens', function () {
    return view('mensagens');
})->name('mensagem.index');

Route::get('/administracao', function () {
    return view('administracao');
})->name('administracao.index');

Route::get('/consultoria', function () {
    return view('consultoria');
})->name('consultoria.index');

Route::get('/assessoria', function () {
    return view('assessoria');
})->name('assessoria.index');

Route::get('/palestras', function () {
    return view('palestras');
})->name('palestra.index');

Route::get('/galeria', function () {
    return view('galeria');
})->name('galeria.index');

