<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// rotte statiche
Route::get('/',[PageController::class,'homepage'])->name('homepage');
// SEO ready
Route::get('/chi-siamo',[PageController::class,'aboutus'])->name('aboutus');

// rotte statiche
Route::get('/servizi',[PageController::class,'services'])->name('service');


// rotta dinamica
Route::get('/dettaglio-servizio/{service}',[PageController::class,'service'])->name('detail');
