<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// rotte statiche
Route::get('/', [PageController::class, 'homepage'])->name('homepage');
// SEO ready
Route::get('/chi-siamo', [PageController::class, 'aboutus'])->name('aboutus');

// rotte statiche
Route::get('/servizi', [PageController::class, 'services'])->name('service');


// rotta dinamica
Route::get('/dettaglio-servizio/{service}', [PageController::class, 'service'])->name('detail');


Route::get('/contatti', [PageController::class, 'contact'])->name('contact');

Route::post('/send', [PageController::class, 'send'])->name('send');


Route::get('/grazie', [PageController::class, 'thank_you'])->name('thank_you');
