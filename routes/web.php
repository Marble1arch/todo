<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/why', function () {
    return view('why');
});
Route::get('/background', function () {
    return view('background');
});
Route::get('/Creative', function () {
    return view('creative');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/todos', [ToDoController::class, 'index']);
Route::get('/diaries', [DiaryController::class, 'index']);
Route::get('/todos/create', [ToDoController::class, 'create']);
Route::get('/diaries/create', [DiaryController::class, 'create']);
Route::get('/todos/{todo}', [ToDoController::class, 'show']);
Route::get('/diaries/{diary}', [DiaryController::class, 'show']);
Route::post('/todos', [ToDoController::class, 'store']);
Route::post('/diaries', [DiaryController::class, 'store']);
Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit']);
Route::put('/todos/{todo}', [ToDoController::class, 'update']);

