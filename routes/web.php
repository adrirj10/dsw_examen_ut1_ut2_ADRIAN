<?php

use App\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/messages', function () {
    $messages = \App\Models\Message::all();
    return view('messages', ['messages' => $messages]);
});

//crear mensaje nuevo
Route::get('/messages/create',[MessagesController::class, 'create'])->name('messages.create');
Route::post('/messages', [MessagesController::class, 'store'])->name('messages.store');

//modificar mensaje
Route::get('/messages/{id}/editar', [MessagesController::class, 'editar'])->name('messages.editar');
Route::put('/dudas/{id}', [MessagesController::class, 'actualizar'])->name('messages.actualizar');
