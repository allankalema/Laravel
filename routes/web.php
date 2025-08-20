<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return 'Welcome to the home page!';
});

// Route:: prefix("admin")->group(function () {

//     Route::get('users', function() {
//         return "admin users";
//     });

//     Route::get('/reports', function () {
//         return 'Admin reports';
//     });
// });

// // writing a route while separating the logic
// Route::get('/profile', [UserController::class, 'show']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// }) ->middleware('auth');

Route:: get ('/hello/{name?}', function ($name = null) {
    return  $name ? 'Hello, ' . htmlspecialchars($name) . '!': 'Nothing provided to greet.';
});



