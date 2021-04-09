<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::inertia('/', 'Welcome', [
    // export data to inertia
    'laravelVersion' => Application::VERSION,
    'phpVersion' => PHP_VERSION,
]);

Route::inertia('/about', 'About', [
    // export data to inertia
    'laravelVersion' => Application::VERSION,
    'phpVersion' => PHP_VERSION,
]);

Route::inertia('/contact', 'Contact', [
    // export data to inertia
    'laravelVersion' => Application::VERSION,
    'phpVersion' => PHP_VERSION,
]);
