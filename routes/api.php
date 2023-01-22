<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\API\DepartmentController;
use App\Http\Controllers\API\PositionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
});


Route::middleware(['jwt.verify'])->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::get('me', [AuthController::class, 'me']);

    Route::prefix('v1')->group(function () {

        // departments
        Route::get('departments', [DepartmentController::class, 'index']);
        Route::get('departments/{id}', [DepartmentController::class, 'show']);
        Route::post('departments/create', [DepartmentController::class, 'store']);
        Route::put('departments/update/{id}', [DepartmentController::class, 'update']);
        Route::delete('departments/destroy/{id}', [DepartmentController::class, 'destroy']);


        // positions
        Route::get('positions', [PositionController::class, 'index']);
        Route::get('positions/{id}', [PositionController::class, 'show']);
        Route::post('positions/create', [PositionController::class, 'store']);
        Route::put('positions/update/{id}', [PositionController::class, 'update']);
        Route::delete('positions/destroy/{id}', [PositionController::class, 'destroy']);


    });

});


