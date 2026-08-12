<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function () {
    return redirect()->away(config('clinicsoft.demo_url', 'https://demo.clinicsoft.tech/'));
})->name('demo');
