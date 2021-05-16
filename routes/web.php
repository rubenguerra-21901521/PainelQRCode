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
    if(Auth::check()) {
        return redirect('/painel');
    } else {
        return view('auth.login');
    }
});

Auth::routes();

Route::get('/painel', 'HomeController@index')->name('home');
Route::post('/painel/fetch', 'HomeController@fetch')->name('home.fetch');
Route::resource('clientes', 'GestaoController');
Route::resource('utilizadores', 'UserController');
Route::resource('perfil', 'PerfilController');
Route::get('painel/procurar', 'HomeController@search')
    ->name('painel.procurar');
//Route::get('/gestao', 'GestaoController@index');
Route::post('/clientes/importar', 'GestaoController@import');
Route::get('/sair', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('qr/{morada}', function ($morada) {
  $image = \QrCode::format('png')
                    ->size(500)
                   ->generate($morada);
  return response($image)->header('Content-type','image/png');

  return view('qrCode', compact('qrData', $qrData));
});
