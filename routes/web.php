<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\CategoriesComponent;

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



Route::get("/", HomeComponent::class)->name("dashboard");
Route::get("/categories", CategoriesComponent::class)->name("categories");
Route::get("/books", BooksComponent::class)->name("books");
