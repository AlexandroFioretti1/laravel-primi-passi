<?php

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
    $data = [
        'gioco' => 'Valorant',
        'tipo' => 'Fps',
        'limiteEta' => '18+',
    ];
    return view('home', $data);
});

Route::get('/contact', function () {
    $data = [
        'assistenza' => 'assistenza@tutti.it',
        'numero' => '3996589592',
        'sitoweb' => 'www.sonounsitoweb.it',
    ];
    return view('contact', $data);
});
