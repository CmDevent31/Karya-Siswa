<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::put('update-profile', [AuthController::class, 'update']);

});
Route::get('/list',[TableCategoryController::class,'index']);
Route::post('/store',[TableCategoryController::class,'create']);
Route::post('/update/{id}',[TableCategoryController::class,'update']);
Route::delete('/destroy/{id}',[TableCategoryController::class,'destroy']);

Route::get('/show',[ArticleController::class,'index']);
Route::get('/detail/{id}',[ArticleController::class,'detail']);
Route::post('/create',[ArticleController::class,'add']);
Route::post('/renew/{id}',[ArticleController::class,'update']);
Route::delete('/delete/{id}',[ArticleController::class,'destroy']);


Route::get('/listcomment',[CommentController::class,'index']);
Route::post('/add',[CommentController::class,'create']);
Route::put('/deletecomment/{id}',[CommentController::class,'destroy']);

Route::post('/membuatproduk',[ProductController::class,'create']);
Route::get('/listproduk',[ProductController::class,'index']);
Route::get('/detailproduk/{id}',[ProductController::class,'detail']);
Route::post('/updateproduk/{id}',[ProductController::class,'update']);
Route::put('/deleteproduk/{id}',[ProductController::class,'destroy']);
// Route::post('/membuatstock',[ProductStockController::class,'add']);
// Route::get('/listprodukstock',[ProductStockController::class,'index']);