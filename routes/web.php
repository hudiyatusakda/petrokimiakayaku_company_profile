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

Route::get('/fasilitas-perusahaan-2', function () {
    return view('profile.fasilitas-perusahaan');
})->name('fasilitas.perusahaan');

Route::get('/detail-pabrik', function () {
    return view('profile.detail-pabrik');
})->name('detail.pabrik');

Route::get('/pemasaran', function () {
    return view('profile.pemasaran');
})->name('pemasaran.perusahaan');

Route::get('/riset', function () {
    return view('profile.riset');
})->name('riset.perusahaan');

Route::get('/komisaris', function () {
    return view('profile.komisaris');
})->name('komisaris');

Route::get('/direksi', function () {
    return view('profile.direksi');
})->name('direksi');

Route::get('/video', function () {
    return view('pages.video');
})->name('video');

Route::get('/kegiatan', function () {
    return view('pages.kegiatan');
})->name('kegiatan');

Route::get('/detail-kegiatan', function () {
    return view('pages.detail-kegiatan');
})->name('detail-kegiatan');
Route::prefix('kategori')->group(function () {

    Route::get('/insektisida', function () {
        return view('kategori.insektisida');
    })->name('kategori.insektisida');

    Route::get('/herbisida', function () {
        return view('kategori.herbisida');
    })->name('kategori.herbisida');

    Route::get('/fungisida', function () {
        return view('kategori.fungisida');
    })->name('kategori.fungisida');

    Route::get('/rodentisida', function () {
        return view('kategori.rodentisida');
    })->name('kategori.rodentisida');

    Route::get('/fumigan', function () {
        return view('kategori.fumigan');
    })->name('kategori.fumigan');

    Route::get('/moluskisida', function () {
        return view('kategori.moluskisida');
    })->name('kategori.moluskisida');

    Route::get('/atraktan', function () {
        return view('kategori.atraktan');
    })->name('kategori.atraktan');

    Route::get('/pupuk-cair', function () {
        return view('kategori.pupuk_cair');
    })->name('kategori.pupuk_cair');

    Route::get('/zpt', function () {
        return view('kategori.zpt');
    })->name('kategori.zpt');

    Route::get('/pupuk-hayati', function () {
        return view('kategori.pupuk_hayati');
    })->name('kategori.pupuk_hayati');

    Route::get('/bio-fungisida', function () {
        return view('kategori.bio_fungisida');
    })->name('kategori.bio_fungisida');

    Route::get('/probiotik', function () {
        return view('kategori.probiotik');
    })->name('kategori.probiotik');

});

Route::get('/produk/insektisida/bassa-500-ec', function () {
    return view('kategori.insektisida.bassa');
})->name('insektisida.bassa');

 Route::get('/ceba', function () {
        return view('kategori.insektisida.ceba');
    })->name('insektisida.ceba');

Route::get('/solusi', function () {
    return view('pages.solusi');
})->name('pages.solusi');

Route::get('/konsultasi', function () {
    return view('pages.konsultasi');
})->name('konsultasi');

Route::get('/forum', function () {
    return view('pages.forum');
})->name('forum');

Route::get('/karir', function () {
    return view('pages.karir');
})->name('karir');

