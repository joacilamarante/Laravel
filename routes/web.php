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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/olamundo/{id?}', ['uses'=>'OlaMundoControler@index']);



Route::post('/olamundo', ['uses'=>'OlaMundoControler@criar']);

Route::put('/olamundo',  ['uses'=>'OlaMundoControler@editar']);



//criando rota crud.... as = apelido...
Route::get('/admin/cursos',['as'=>'admin.cursos','uses'=>'Admin\CursoControler@index']);
Route::get('/admin/cursos/adicionar',['as'=>'admin.cursos.adicionar','uses'=>'Admin\CursoControler@adicionar']);
Route::post('/admin/cursos/salvar',['as'=>'admin.cursos.salvar','uses'=>'Admin\CursoControler@salvar']);
Route::get('/admin/cursos/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'Admin\CursoControler@editar']);
Route::put('/admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'Admin\CursoControler@atualizar']);
Route::get('/admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'Admin\CursoControler@deletar']);