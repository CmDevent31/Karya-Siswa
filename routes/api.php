<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ProductStockController;
use App\Http\Controllers\GaleriSekolahController;
use App\Http\Controllers\TableCategoryController;

Route::controller (AuthController::class)->group (function () {
    Route::post('login', [AuthController::class, 'login']); 
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout',[AuthController::class, 'logout ']); 
    Route::post('refresh', [AuthController::class, 'refresh']); 
    Route::post('/update-profile/(id)', [AuthController::class, 'update']);
});

Route::get('/list', [TableCategoryController::class, 'index']);
Route::post('/store', [TableCategoryController::class, 'create']); 
Route::post('/update/(id)', [TableCategoryController::class, 'update']); 
Route::delete('/destroy/{id}', [TableCategoryController::class, 'destroy']);

Route::get('/show', [ArticleController::class, 'index']);
Route::get('/detail/[id]', [ArticleController::class, 'detail']);
Route::post('/create', [ArticleController::class, 'add']);
Route::post('/renew/{id}', [ArticleController::class, 'update']); 
Route::delete('/delete/{id}', [ArticleController::class, 'destroy']);

Route::get('/listcomment', [CommentController::class, 'Index']); 
Route::post('/add', [CommentController::class, 'create']);
Route::put('/deletecomment/{id}', [CommentController::class, 'destroy']);

Route::post('/addproduk', [ProductController::class, "add"]);
Route::get('/listproduk', [ProductController::class, 'index']);
Route::get('/detailproduk/{id}', [ProductController::class, 'detail']); 
Route::post('/updateproduk/{id}', [ProductController::class, 'update']);
Route::put('/deleteproduk/{id}', [ProductController::class, 'destroy']);

Route::post('/membuatstock', [ProductStockController::class, 'add']);
Route::get('/stocklist', [ProductStockController::class, 'index']);
Route::post('/updatestock/{id}', [ProductStockController::class, 'update']);

Route::post('/addekskul', [EkskulController::class, 'store']);
Route::get('/listekskul2', [EkskulController::class, 'list']); 
Route::post('/updateekskul/{id}', [Ekskulcontroller::class, 'update']);

Route::get('/listevent', [EventsController::class, 'list']);
Route::post('/addevent', [EventsController::class, 'store']); 
Route::post('/updateevent/{id}', [EventsController::class, 'update']);

Route::post('/addgaleri', [GalerisekolahController::class, 'store']);
Route::get('/listgaleri', [GaleriSekolahController::class, 'list']);

Route::get('/listguru', [GuruController::class, 'list']); 
Route::post('/addguru',[GuruController::class, 'store']);
Route::post('/updateguru/{id}', [GuruController::class, 'update']);

Route::get('/database-url', function () {
    return env('DATABASE_URL');
});