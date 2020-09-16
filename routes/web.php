<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntryController;

Route::get('/', [EntryController::class, 'index']);
Route::post('/create', [EntryController::class, 'create']);
