<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('biens', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');


Route::prefix('admin')->name('admin.')->group(function () {
Route::resources([
'roles' => App\Http\Controllers\Admin\RoleController::class,
'users' => App\Http\Controllers\Admin\UserController::class,
'products' => App\Http\Controllers\Admin\ProductController::class,
'options' => App\Http\Controllers\Admin\OptionController::class,
]);
});

// Route::resources([
// 'roles' => App\Http\Controllers\RoleController::class,
// 'users' => App\Http\Controllers\UserController::class,
// 'products' => App\Http\Controllers\ProductController::class,
// 'options' => App\Http\Controllers\OptionController::class,
// ]);



