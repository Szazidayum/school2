<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\User;
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
    return view('welcome');
});


Route::get('/api/tasks',[TaskController::class,'index']);

/*GET -1 /api/tasks/1 */
Route::get('/api/tasks/{id}',[TaskController::class,'show']);
/*POST /api/tasks */
Route::post('/api/tasks',[TaskController::class,'store']);
/*PUT /api/tasks/1 */
Route::put('/api/task/{id}',[TaskController::class,'update']);
/*DELETE /api/tasks/1 */
Route::delete('/api/task/{id}',[TaskController::class,'destroy']);
/*User API végpontok és feladatok
GET    -all /api/users */
Route::get('/api/users',[UserController::class,'index']);

/*VIEW - ahol megjeleníthetem az adatokat*/
/*Task-ok listázása /task*/
Route::get('/task/new',[TaskController::class,'newView']);
/*Task módosítása /task/edit/1 */
Route::get('/task/edit/{id}',[TaskController::class,'editView']);
/*Új Task létrehozása /task/create */
Route::get('/task/list',[TaskController::class,'listView']);

Route::delete('/api/user/delete/{id}',[UserController::class, 'delete'] );
Route::get('/api/user/{id}', [UserController::class, 'getUser']);
Route::get('/api/users/list', [UserController::class, 'listView']);
Route::put('/api/user/update/{id}', [UserController::class, 'update']);
Route::get('/api/user/edit/{id}', [UserController::class, 'editView']);

Route::get('/api/user', [UserController::class, 'newView']);
Route::post('/api/user/new', [UserController::class, 'store']);
