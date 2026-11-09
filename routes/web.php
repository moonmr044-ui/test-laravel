<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes-fe', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'Halo anak FE! Backend Laravel udah jalan lancar di Docker!',
        'server_time' => now()->toDateTimeString(),
        'data' => [
            ['id' => 1, 'nama' => 'Produk A - Laptop Gaming', 'harga' => 15000000],
            ['id' => 2, 'nama' => 'Produk B - Monitor 144Hz', 'harga' => 2500000],
            ['id' => 3, 'nama' => 'Produk C - Mechanical Keyboard', 'harga' => 850000],
        ]
    ]);
});
