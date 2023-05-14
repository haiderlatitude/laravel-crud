<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'index']);

Route::view('/addUser', 'addUser')->name('addUser');
Route::view('/editUser/{id}', 'editUser')->name('editUser');
Route::post('/add', [UserController::class, 'store'])->name('add');
// Route::put('/edit', function(){
//     echo 'Edit';
// })->name('edit');
Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');