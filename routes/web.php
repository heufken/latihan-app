<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/hello', function () {
//     return view('hello');
// });
Route::view('/hello', 'hello');

Route::get('/coba/{id}', function (string $id) {
    return view('coba', ['id' => $id]);
});

Route::view('/biodata', 'biodata');

Route::post('/biodata', function (Request $request) {
    $output = "nama: . $request->nama. <br>
    Email: . $request->email. <br>
    No. HP: $request->no_hp.";
    return $output;
});