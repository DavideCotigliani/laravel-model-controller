<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

//rotta per la pagina principale
Route::get('/', [PageController::class, "index"]);
