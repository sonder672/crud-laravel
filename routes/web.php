<?php

use App\Architecture\View\Controllers\NoteController;
use App\Architecture\View\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/', function () {
    return view('home');
})->name('home');

route::get('/login', function () {
    return view('auth.login');
})->name('login.get');

route::post('/login', [UserController::class, 'login'])->name('login');

route::get('/register', function () {
    return view('auth.register');
});

Route::group(['middleware' => ['login']], function () {
    route::get('note/{uuid}', [NoteController::class, 'edit'])->name('note.edit');

    route::get('note', function () {
        return view('note.noteCreate');
    });

    route::put('note/{uuid}', [NoteController::class, 'update'])->name('note.update');

    route::delete('note/{uuid}', [NoteController::class, 'destroy'])->name('note.delete');
});
