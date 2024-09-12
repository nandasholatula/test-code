<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/api/feed', [ApiController::class, 'feed']);
route::get('/login', [HomeController::class, 'login']);
route::post('/proseslogin', [HomeController::class, 'proseslogin']);
route::get('/rekrument', [HomeController::class, 'rekrumentindex']);
route::post('/prosesrekrument', [HomeController::class, 'prosesrekrument']);
