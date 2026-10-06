<?php

use App\Http\Controllers\EndUser\Landing;
use Illuminate\Support\Facades\Route;

Route::get('/', [Landing::class, "index"])->name('web.halaman_depan');
Route::get('syarat-ketentuan', [Landing::class, "syarat_ketentuan"])->name('legal.syarat');
Route::get('kebijakan-privasi', [Landing::class, "kebijakan_privasi"])->name('legal.privasi');
Route::get('kebijakan-pengembalian-dana', [Landing::class, "kebijakan_refund"])->name('legal.refund');
Route::group(['prefix' => 'layanan'], function () {
    Route::get('email-profesional', [Landing::class, "email_profesional"])->name('layanan.email');
    Route::get('hubungi-kami', [Landing::class, "hubungi_kami"])->name('layanan.hubungi_kami');
    Route::redirect('pengembangan-aplikasi', '/layanan/erp', 301);
    Route::get('{slug}', [Landing::class, "detail"])->name('layanan.detail');
});