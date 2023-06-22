<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    $data=App\Models\Task::all();
    return view('tasks')->with('tasks',$data);
});

Route::post('/saveTask',[TaskController::class,'store']);

Route::get('/markascompleted/{id}', [TaskController::class, 'UpdateTaskAsCompleted']);

//Route::post('/markasnotcompleted/{id}',[TaskController::class, 'UpdateTaskAsNotCompleted']);
Route::match(['get', 'post'], '/markasnotcompleted/{id}', [TaskController::class, 'UpdateTaskAsNotCompleted']);


Route::get('/deletetask/{id}',[TaskController::class, 'deletetask']);

Route::get('/updatetask/{id}',[TaskController::class, 'updatetaskview']);

Route::post('/updatetasks',[TaskController::class,'updatetask']);








