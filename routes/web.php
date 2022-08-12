<?php

use App\Models\Department;
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
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('user/{id}', function ($id) {
    $user = User::find($id);

    $user->department;

    return $user;
});

Route::get('fakultas/{id}', function ($id) {
    $fakultas = Department::find($id);

    $fakultas->students;

    return $fakultas;
});

require __DIR__ . '/auth.php';
