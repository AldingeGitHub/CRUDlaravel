<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/',[TodoController::class,'index']);
route::post('/todo/add', [TodoController::class, 'add']);
route::get('/todo/update/{id}',[TodoController::class, 'update']);
route::get('/todo/delete/{id}',[TodoController::class, 'delete']);