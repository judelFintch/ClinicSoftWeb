<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function () {
    if ($url = config('clinicsoft.demo_url')) {
        return redirect()->away($url);
    }

    return view('demo-placeholder');
})->name('demo');
