<?php

use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index']);
Route::resource('contacts', ContactController::class);
Route::get('/contacts/create', [ContactController::class, 'create']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::get('/contacts/{contact}', [ContactController::class, 'show']);
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit']);
Route::put('/contacts/{contact}', [ContactController::class, 'update']);
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy']);
