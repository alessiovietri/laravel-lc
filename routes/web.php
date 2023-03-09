<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $students = [
        'Matteo',
        'Nicolas',
        'Federico',
        'Sergio',
        'Stefania',
        'Monica'
    ];

    return view('welcome', [
        'title' => 'Laravel Live Coding',
        'firstName' => 'Alessio',
        'lastName' => 'Vietri',
        'students' => $students
    ]);
});

Route::get('/about', function () {
    $students = [
        'Matteo',
        'Nicolas',
        'Federico',
        'Sergio',
        'Stefania',
        'Monica'
    ];

    $informazioni = [
        'title' => 'About | Laravel Live Coding',
        'firstName' => 'Alessio',
        'lastName' => 'Vietri',
        'students' => $students
    ];

    return view('welcome', $informazioni);
});

Route::get('/contact', function () {
    $title = 'Contact | Laravel Live Coding';
    $firstName = 'Alessio';
    $lastName = 'Vietri';
    $students = [
        'Matteo',
        'Nicolas',
        'Federico',
        'Sergio',
        'Stefania',
        'Monica'
    ];

    $info = compact('title', 'firstName', 'lastName', 'students');

    // dd($info);

    return view('contact', $info);
});
