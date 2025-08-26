<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home',[
        'name' => 'Vinod Joshi',
        'frameworks' => ['Laravel', 'Vue', 'React', 'Svelte']
    ]);
});

Route::get('/users', function () {
    return Inertia::render('Users');
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});
