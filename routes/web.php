<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/jobs', function () {
    return 'Available Jobs';
})->name('jobs'); // naming route convention

Route::post('submit', function () {
    return 'Submitted';
});

Route::match(['get', 'post'], '/submit', function () {
    return "Submitted";
});

Route::any('/submit', function () {
    return "Submitted";
});

Route::get('/test', function () {
    $url = route('jobs');
    return "<a href='$url'>Click here for jobs</a>";
});

Route::get('/api/users', function () {
    return [
        'name' => 'John Doe',
        'email' => 'John@gmail.com'
    ];
});

// brandon in laravelStarter/workopia on branch  $ php artisan route:list will show all routes
