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

Route::prefix('manager')->group(function(){
    Route::post('/logout', 'ManagerController@logout');
    Route::get('/', 'ManagerController@index');
    Route::resource('curso', 'ManagerCursoController');    
    Route::resource('noticia', 'ManagerNoticiaController');
});

// ----------------------------------------------------------------

Route::get('/gestor', function(){
    return view('site.gestor');
})->name('site.gestor');

Route::get('/servicos', function(){
    return view('site.servico');
})->name('site.servico');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
