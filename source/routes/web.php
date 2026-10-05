<?php

use App\Http\Controllers\EndUser\Landing;
use Illuminate\Support\Facades\Route;

Route::get('/', [Landing::class, "index"])->name('web.halaman_depan');
Route::group(['prefix' => 'layanan'], function () {
    Route::get('email-profesional', [Landing::class, "email_profesional"])->name('layanan.email');
    Route::get('hubungi-kami', [Landing::class, "hubungi_kami"])->name('layanan.hubungi_kami');
    Route::get('{slug}', [Landing::class, "detail"])->name('layanan.detail');
});