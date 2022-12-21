<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ViewController;

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

Route::get('/cobain', function () {
    $data['judul'] = "ini judulnya";
    $judul = "ini judul pake lainnya";
    return view('test', $data);
    // return view('test', compact($judul));
});

Route::get('controller', [App\Http\Controllers\ViewController::class, 'view1']);

// Route::get('post/{id}', function ($id) {
//     return $id;
// });

Route::get('post-controller/{id}', [App\Http\Controllers\ViewController::class, 'post']);
/**
 * 
 * list rrouting
 * Route::post() // biasa digunakan untuk add data
 * Route::put() // biasa digunakan untuk update data
 * Route::delete() // ini biasanya untuk delete data
 * Route::resource()
 */


Route::get('middleware', function () {
    return "masuk";
})->middleware(['test']);

Route::get('role', function () {
    return "admin disini";
})->middleware('role:admin');
Route::get('role-user', function () {
    return "user disini";
})->middleware('role:user');

Route::resource('nama', App\Http\Controllers\ViewController::class)->except(['destroy']); // bikin url list, dimana terdiri dari add, upadte, delete;


Route::get('posts', [PostController::class, 'posts']);
Route::get('post/{id}', [PostController::class, 'detail']);
Route::get('post-create', [PostController::class, 'create']);
Route::post('post-create', [PostController::class, 'insert']);
Route::get('post-update/{id}', [PostController::class, 'edit']);
Route::put('post-update/{id}', [PostController::class, 'update']);
Route::delete('post-delete/{id}', [PostController::class, 'delete']);
