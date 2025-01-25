<?php

use Illuminate\Support\Facades\Route;

// langsung pake view
Route::view('/', 'home');

// atau pake php sintaks
Route::get('/about', fn () => view('about'));

// pak eyang biasa 
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/users', function () {
    $users =  [
        ['id' => '1', 'name' => 'Jane Doe', 'email' => 'jane@gmail.com'],
        ['id' => '2', 'name' => 'Doe John', 'email' => 'Doe@gmail.com'],
        ['id' => '3', 'name' => 'John Doe', 'email' => 'john@gmail.com'],
        ['id' => '4', 'name' => 'Doe Jane', 'email' => 'janedon@gmail.com'],
    ];

    return view('users.index', compact('users'));
});

Route::get('/book', fn () => view('book'));