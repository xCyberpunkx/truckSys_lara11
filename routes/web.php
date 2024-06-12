<?php
use App\Http\Controllers\CamionController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CamionController::class, 'index'])->name('index');
Route::get('/create', [CamionController::class, 'create'])->name('create');
Route::post('/', [CamionController::class, 'store'])->name('store');
Route::get('/{id}', [CamionController::class, 'show'])->name('show');
Route::get('/{id}/edit', [CamionController::class, 'edit'])->name('edit');
Route::put('/{id}', [CamionController::class, 'update'])->name('update');
Route::delete('/{id}', [CamionController::class, 'destroy'])->name('destroy');