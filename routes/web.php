<?php

use Illuminate\Support\Facades\Route;

// rotte statiche
Route::get('/', function () {
    return view('homepage');
})->name('homepage');

// SEO ready
Route::get('/chi-siamo', function () {
    return view('aboutus');
})->name('aboutus');

// rotte statiche
Route::get(
    '/servizi',
    function () {
        $servizi = [
            ['name' => 'Siti Web', 'uri' => 'siti-web'],
            ['name' => 'Negozi Digitali', 'uri' => 'ecommerce'],
            ['name' => 'Gestionali in Cloud', 'uri' => 'gestionali-cloud'],
            ['name' => 'Marketing Digitale', 'uri' => 'marketing-digitale'],

        ];




        return view('service', ['servizi' => $servizi]); //? posso passare infinite variabili
    }

)->name('service');



Route::get('/dettaglio-servizio/{service}/{name}', function ($service, $name) {


    return view('detail', ['service' => $service, 'name' => $name]);
})->name('detail');
