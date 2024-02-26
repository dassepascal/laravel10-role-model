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
$idRegex = '[0-9]+';
$slugRegex = '[a-z0-9-]+';


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/biens', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::get('/biens/{slug}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show')->where(['slug' => $slugRegex, 'product' => $idRegex]);

Auth::routes();

Route::post('/biens/{product}/contact', [App\Http\Controllers\ProductController::class, 'contact'])->name('product.contact')->where('product', $idRegex);

Route::prefix('admin')->name('admin.')->group(function () {
Route::resources([
'roles' => App\Http\Controllers\Admin\RoleController::class,
'users' => App\Http\Controllers\Admin\UserController::class,
'products' => App\Http\Controllers\Admin\ProductController::class,
'options' => App\Http\Controllers\Admin\OptionController::class,
]);
});





