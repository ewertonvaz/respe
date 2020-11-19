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

Route::get('/', function () {
    return view('main');
});

Route::resource('/cargos', 'CargosController')->except([
    'show', 'edit'
]);

Route::get('/cargos/delete/{cargo}', function (App\Models\Cargo $cargo) {
    if(!session()->has('redirect_to'))
    {
        session(['redirect_to' => url()->previous()]);
    }
	return view('cargos.destroy', ['cargo' => $cargo]);
})->name('cargos.delete');

Route::get('/cargos/edit/{cargo}', function (App\Models\Cargo $cargo) {
    if(!session()->has('redirect_to'))
    {
        session(['redirect_to' => url()->previous()]);
    }
	return view('cargos.edit', ['cargo' => $cargo]);
})->name('cargos.edit');

Route::resource('/usuarios', 'UsuariosController'); 
Route::resource('/setores', 'SetoresController');
Route::resource('/visitantes', 'VisitantesController');

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
