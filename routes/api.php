<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GetMateriasController;
use App\Http\Controllers\CreateMateriaController;
use App\Http\Controllers\UpdateMateriaController;
use App\Http\Controllers\DeleteMateriaController;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\Usuario\CreateUsuarioController;
use App\Http\Controllers\Usuario\GetUsuariosController;

use Illuminate\Support\Facades\Auth;

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


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//--Materia
Route::get('materias', [GetMateriasController::class, 'get']);

Route::get('materia/create', [CreateMateriaController::class, 'showCreateForm']);
Route::post('materia/create', [CreateMateriaController::class, 'create']);
 
Route::get('materia/update/{id}', [UpdateMateriaController::class, 'showUpdateForm']);
Route::put('materia/update/{id}', [UpdateMateriaController::class, 'update']);

Route::delete('materia/delete/{id}', [DeleteMateriaController::class, 'delete']);

//--Login
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::post('verificar', function () {
    if (Auth::check()) {
        return response()->json(['message' => 'El usuario está autenticado'], 200);
    }
})->middleware('auth:sanctum');

Route::get('nologueado', function () {
    return response()->json(['message' => 'El usuario no está autenticado'], 401);
})->name('nologueado');

//--User
Route::get('usuario/create', [CreateUsuarioController::class, 'showCreateForm']);
Route::post('usuario/create', [CreateUsuarioController::class, 'create']);

Route::get('usuarios', [GetUsuariosController::class, 'get']);






