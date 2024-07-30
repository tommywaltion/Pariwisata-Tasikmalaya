<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [Main::class,"Homepage"])->name("Home");
Route::get("/detail/{id}", [Main::class,"Detail"])->name("Detail");
