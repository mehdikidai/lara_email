<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VerifyController;
use App\Services\Kidai;
use Illuminate\Support\Facades\Route;
use Psr\Container\ContainerInterface;

Route::get('/hash/{hash}', [HomeController::class, 'index']);

Route::get('/email/verify', [VerifyController::class, 'index']);

Route::get('/email/verify/{id}/{hash}', [VerifyController::class, 'verify'])->name('verify.verify');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/', function (Kidai $kidai,ContainerInterface $ci) {
    
    //return $kidai->md5('mehdi');

    $a = $ci->get(Kidai::class);
    return $a->checkmd5('7f7d49795dcf0a82605fb1103ed20d28','mehdi');

});
