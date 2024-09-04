<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users-index',[userController::class, 'index'])->name('users.index');
Route::get('/users-show/{user}',[userController::class, 'index'])->name('users.show');
Route::get('/users-createview',[userController::class, 'createView'])->name('users.createView');
Route::post('/users-create',[userController::class, 'create'])->name('users.create');
Route::get('/users-updateView',[userController::class, 'updateView'])->name('users.updateView');
Route::get('/users-update',[userController::class, 'index'])->name('users.update');


