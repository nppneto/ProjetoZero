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

Route::get('/', 'HomeController@index')->name('site.home');

Route::get('/cursos', 'CursoController@index')->name('site.cursos');
Route::get('/curso/{id}', 'CursoController@show')->name('site.detalhes');


Route::get('/contato/{id}', 'ContatoController@getOrcamento')->name('site.contato');
Route::get('/contato', 'ContatoController@index')->name('site.contato');
Route::post('/contato', 'ContatoController@sendEmail');

Route::get('/manager', 'ManagerController@index');

Route::prefix('manager')->group(function(){
    Route::resource('curso', 'ManagerCursoController');    
    Route::resource('pagina', 'ManagerPaginaController');
});

// ----------------------------------------------------------------

Route::get('/historia', function () {
    return view('site.historia');
})->name('site.historia');

Route::get('/missao', function () {
    return view('site.missao');
})->name('site.missao');

Route::get('/executivo', function () {
    return view('site.executivo');
})->name('site.executivo');

Route::get('/premiacao', function () {
    return view('site.premiacao');
})->name('site.premiacao');

Route::get('/mensagens', function () {
    return view('site.mensagens');
})->name('site.mensagem');

Route::get('/administracao', function () {
    return view('site.administracao');
})->name('site.administracao');

Route::get('/consultoria', function () {
    return view('site.consultoria');
})->name('site.consultoria');

Route::get('/assessoria', function () {
    return view('site.assessoria');
})->name('site.assessoria');

Route::get('/palestras', function () {
    return view('site.palestras');
})->name('site.palestra');

Route::get('/galeria', function () {
    return view('site.galeria');
})->name('site.galeria');

