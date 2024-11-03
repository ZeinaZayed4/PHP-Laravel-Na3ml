<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\TaskController;

Route::get('/{id?}', [TaskController::class, 'index']);

Route::post('/save-task', [TaskController::class, 'store']);

Route::get('/delete-task/{id}', [TaskController::class, 'destroy']);

Route::post('/update-task/{id}', [TaskController::class, 'update']);
