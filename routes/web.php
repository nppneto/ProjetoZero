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

//PÁGINAS DINÂMICAS -> Usuário
Route::get('/', 'HomeController@index'); // Select página inicial -> Cursos e CursosDestaque

Route::get('/cursos', 'CursoController@index'); // Select página Cursos - Todos os Cursos

Route::get('/cursos/{id}', 'CursoController@getCursoById'); // Select página Detalhes - Cursos por ID

Route::get('/contato/{id}', 'CursoController@getAssuntoOrcamento'); // Select página Contato - Curso por ID (Formulário)

Route::post('/contato', 'ContatoController@getDataFormContato');
// ----------------------------------------------------------------

//PÁGINAS DINÂMICAS -> ADMIN

Route::get('/manager', 'ManagerController@index');

Route::get('/manager/paginas', function () {
    return view('admin.paginas');
});

Route::get('/manager/cursos', 'ManagerController@getCursos');



//PÁGINAS ESTÁTICAS -> Usuário
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

