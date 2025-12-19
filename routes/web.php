<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;


Route::get('/', [FrontendController::class,'index'])->name('home');
Route::get('/about-us', [FrontendController::class,'about'])->name('about');
Route::get('/products', [FrontendController::class,'products'])->name('products');
Route::get('/services', [FrontendController::class,'services'])->name('services');
Route::get('/testimonials', [FrontendController::class,'testimonials'])->name('testimonials');
Route::get('/blog', [FrontendController::class,'blog'])->name('blog');
Route::get('/contact', [FrontendController::class,'contact'])->name('contact');
Route::get('/login', [FrontendController::class,'login'])->name('login');
Route::get('/search', [FrontendController::class,'search'])->name('search');
Route::get('/tentang-perusahaan', function () {
    return view('profile.tentang');
})->name('tentang');

Route::get('/manajemen-perusahaan', function () {
    return view('profile.manajemen');
})->name('manajemen');

Route::get('/fasilitas-perusahaan', function () {
    return view('profile.fasilitas');
})->name('fasilitas');

Route::get('/komisaris', function () {
    return view('profile.komisaris');
})->name('komisaris');

Route::get('/direksi', function () {
    return view('profile.direksi');
})->name('direksi');

Route::prefix('produk')->group(function () {

    Route::get('/insektisida', function () {
        return view('produk.insektisida');
    })->name('produk.insektisida');

    Route::get('/herbisida', function () {
        return view('produk.herbisida');
    })->name('produk.herbisida');

    Route::get('/fungisida', function () {
        return view('produk.fungisida');
    })->name('produk.fungisida');

    Route::get('/rodentisida', function () {
        return view('produk.rodentisida');
    })->name('produk.rodentisida');

    Route::get('/fumigan', function () {
        return view('produk.fumigan');
    })->name('produk.fumigan');

    Route::get('/moluskisida', function () {
        return view('produk.moluskisida');
    })->name('produk.moluskisida');

    Route::get('/atraktan', function () {
        return view('produk.atraktan');
    })->name('produk.atraktan');

    Route::get('/pupuk-cair', function () {
        return view('produk.pupuk_cair');
    })->name('produk.pupuk_cair');

    Route::get('/zpt', function () {
        return view('produk.zpt');
    })->name('produk.zpt');

    Route::get('/pupuk-hayati', function () {
        return view('produk.pupuk_hayati');
    })->name('produk.pupuk_hayati');

    Route::get('/bio-fungisida', function () {
        return view('produk.bio_fungisida');
    })->name('produk.bio_fungisida');

    Route::get('/probiotik', function () {
        return view('produk.probiotik');
    })->name('produk.probiotik');

});
