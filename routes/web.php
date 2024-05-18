<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/buku', function () {
    
    $data = [];
    $data['poin'] = 83;
    $data['flag'] = '2';
    $data['sub_judul']= 'latihan parsing data di view';
    $data['buku'] = ['buku 1', 'buku 2', 'buku 3', 'buku 4', 'buku 5'];
    return view('buku/list', $data);
});

Route::view('/biodata', 'biodata');