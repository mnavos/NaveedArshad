<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Resources\OrderResource;
use App\Models\Order;
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


Route::resource('/category', CategoryController::class);
Route::resource('/posts', PostController::class);



Route::get('/orders', function () {
    $order = Order::all();
    // // dd($order);
    // $user_name = $order->user();
    return OrderResource::collection($order);
});
// Route::get()


