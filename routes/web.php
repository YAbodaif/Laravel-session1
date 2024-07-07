<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
Route::get('/', function () {
    return view('welcome');
});
//Read
Route::get('/books',[BookController::class,'index'])->name('books_index');
Route::get('/books/show/{id}',[BookController::class,'show'])->name('books_show');

//create
Route::get('/books/create',[BookController::class,'create'])->name('books_create');
Route::post('/books/store',[BookController::class,'store'])->name('books_store');

//Update
Route::get('books/edit/{id}',[BookController::class,'edit'])->name('books_edit');
Route::post('books/update',[BookController::class,'update'])->name('books_update');

//delete
Route::get('books/delete/{id}',[BookController::class,'delete'])->name('books_delete');


