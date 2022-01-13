<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'IntranetController@inicio')->name('inicio');


Route::get('/beneficios','IntranetController@beneficios')->name('gestao.bene');
Route::get('/arquivo','IntranetController@arquivo')->name('arquivo');
Route::get('/desenv','IntranetController@treinamento')->name('gestao.train');
Route::get('/bemestar','IntranetController@bemestar')->name('gestao.bemestar');
Route::get('/transparencia','IntranetController@transparencia')->name('gestao.trans');
Route::get('/covid19','IntranetController@covid')->name('gestao.covid');
Route::get('/powerbi','IntranetController@powerbi')->name('powerbi');
Route::get('/ssma','IntranetController@ssma')->name('gestao.ssma');
Route::get('/videos','IntranetController@videos')->name('gestao.videos');
Route::get('/contato','ContactController@contato')->name('contato.index');
Route::POST('/contact', 'ContactController@ContactUsForm')->name('contact.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('index');
Route::get('/admin/comunicado', 'AdminController@comunicado')->name('comunicado');
Route::get('/admin/escala', 'AdminController@escala')->name('escala');
Route::get('/admin/itinerario', 'AdminController@itinerario')->name('itinerario');
Route::get('/admin/agenda','AdminController@agenda')->name('agenda');
Route::get('/admin/cipa','AdminController@cipa')->name('cipa');
Route::get('/admin/brigada','AdminController@brigada')->name('brigada');
Route::get('/admin/escalamed','AdminController@escalamed')->name('escalamed');
Route::get('/admin/feriados', 'AdminController@feriados')->name('feriados');
Route::get('/admin/assistmedica', 'AdminController@medassist')->name('medassist');
Route::get('/admin/qualidadedevida', 'AdminController@qualidadevida')->name('qualidade');
Route::get('/admin/respsocial', 'AdminController@respsocial')->name('respsocial');
Route::get('/admin/jornal', 'AdminController@jornal')->name('jornal');
Route::get('/admin/acordosppr', 'AdminController@acordosppr')->name('acordos');
Route::get('/admin/cardapios', 'AdminController@cardapios')->name('cardapios');
Route::post('/admin/salvar','ComunicadoController@salvar')->name('comunicado.salvar');
Route::get('/admin/sgi','IndicadoresController@index')->name('sgiadmin');
Route::post('/admin/sgi/salvar','IndicadoresController@store')->name('sgi.salvar');
Route::post('/admin/save','AdminController@store')->name('adm.salvar');
Route::get('/storage/public/{filename}', 'IntranetController@getFile')->name('getfile');
Route::get('admin/deletar/{id}','AdminController@arqDel')->name('deletar');
Route::get('admin/delcomu/{id}','AdminController@comuDel')->name('comuDel');
Route::get('admin/visualizar/{id}','AdminController@visualizar')->name('visualizar');
Route::get('admin/show/{id}','AdminController@show')->name('show');
Route::get('admin/sgi/deletar/{id}','IndicadoresController@sgiDel')->name('deletarSgi');
Route::get('/comunicados/{id}','IntranetController@showComu')->name('comu');
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
