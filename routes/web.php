<?php

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
    return view('welcome',[
        'title' => 'From Web.php'
    ]);
});

Route::get('/page', function () {
    return view('page',
        [
            'title' => "Page 2 - A little about the Author",
            'author' => json_encode([
                    "name" => "Fisayo Afolayan",
                    "role" => "Software Enginner",
                    "code" => "Always keeping it clean"
            ])
        ]
    );
});
