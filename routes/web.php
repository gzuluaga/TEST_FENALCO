<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Usuarios\UsuariosController;
use App\Http\Controllers\Usuarios\ProfileController;
use App\Http\Controllers\Tarea\TareaController;

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

// Route::get('dashboard', function () {
//     return view('backend.pages.dashboard');
// });




Auth::routes();

Route::get('/', 	[HomeController::class, 'index']);
Route::get('home', 	[HomeController::class, 'index']);


Route::group(['middleware' => ['role:super-admin']], function() {

Route::get('/administracion_usuarios', 	[UsuariosController::class, 'index'])->name('admin_users');
Route::post('/store_usuarios', 			[UsuariosController::class, 'store'])->name('store_users');
Route::get('/edit_usuarios/{id}', 		[UsuariosController::class, 'edit'])->name('edit_users');
Route::post('/update_usuarios/{id}', 	[UsuariosController::class, 'update'])->name('update_users');
Route::get('/delete_usuarios/{id}', 	[UsuariosController::class, 'destroy'])->name('delete_users');

Route::get('profile_user', 				[ProfileController::class, 'index']);

//Tareas
Route::get('/crear_tarea', 	[TareaController::class, 'index'])->name('crear_tarea');

});






