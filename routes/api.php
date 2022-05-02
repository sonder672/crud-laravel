<?php

use App\Architecture\View\Controllers\NoteController;
use App\Architecture\View\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('note/{userId}', [NoteController::class, 'showNotesByUser']);
Route::post('note', [NoteController::class, 'store']);
Route::delete('note/{uuid}', [NoteController::class, 'destroy']);
Route::put('note/{id}', [NoteController::class, 'update']);

Route::post('login',[UserController::class, 'login']);
Route::post('register',[UserController::class, 'store']);
