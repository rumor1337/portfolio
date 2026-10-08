<?php

use App\Http\Controllers\CommitController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CommitController::class, 'index'])->name('commits.index');
Route::post('/commits/sync', [CommitController::class, 'sync'])->name('commits.sync');
