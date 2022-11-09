<?php

use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $usuarios = User::all();
    return view('dashboard')->with(compact("usuarios"));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('show_user', [UserController::class, 'show']);

Route::post('update_user', [UserController::class, 'update'])->name('update_user');

Route::get('api/allUser', [UserController::class, 'all_user']);

Route::get('api/user/{id}', [UserController::class, 'unique_user']);



require __DIR__.'/auth.php';
