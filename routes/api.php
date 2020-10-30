<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\TareasController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('signup', [AuthController::class, 'signUp']);

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout',  [AuthController::class, 'logout']);
        Route::get('user',  [AuthController::class, 'user']);
    });
});

 Route::get('tareas/consultar',		        [TareasController::class, 'index']);
 Route::get('tareas/consultar_tarea/{id}',  [TareasController::class, 'show']);
 Route::post('tareas/crear', 		        [TareasController::class, 'store']);
 Route::post('tareas/actualizar/{id}',      [TareasController::class, 'update']);
 Route::post('tareas/borrar/{id}', 	        [TareasController::class, 'destroy']);

 