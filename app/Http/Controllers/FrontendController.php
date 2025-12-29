<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeroSlide; // <--- 1. WAJIB: Tambahkan Import Model ini di paling atas
use App\Models\CompanyMenu;
use App\Models\Product;
use App\Models\Article;
use App\Models\Video;

class FrontendController extends Controller
{
    public function index(){
        // Hero Slide (Sudah ada)
        $slides = HeroSlide::where('is_active', 1)->where('type', 'home')->get();

        // 2. Ambil Produk
        $products = Product::where('is_active', 1)->get();

        // 3. Ambil Berita (Terbaru)
        $articles = Article::where('is_active', 1)->latest()->get();

        // 4. Ambil Video (Terbaru)
        $videos = Video::where('is_active', 1)->latest()->get();

        // Kirim semua ke view
        return view ('index', compact('slides', 'products', 'articles', 'videos'));
    }

    // ... function lainnya (about, products, dll) biarkan tetap sama ...
    
    public function about(){
        // 1. Ambil Slide (kode yang sebelumnya)
        $slides = HeroSlide::where('is_active', 1)
                        ->where('type', 'about')
                        ->get();
        // Kita urutkan berdasarkan sort_order agar admin bisa atur mana yg dikiri/kanan
        $menus = CompanyMenu::where('is_active', 1)
                            ->orderBy('sort_order', 'asc') 
                            ->get();

        // 3. Kirim kedua variabel ke view
        return view ('pages.about', compact('slides', 'menus'));
    }

    public function products(){
        return view ('pages.products');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function testimonials(){
        return view ('pages.testimonials');
    }

    public function blog(){
        return view ('pages.blog');
    }

    public function contact(){
        return view ('pages.contact');
    }

    public function login(){
        return view ('auth.index');
    }

    public function search(Request $request)
    {
        // ... kode search Anda biarkan tetap sama ...
        $query = trim((string) $request->input('q', ''));
        
        // (Kode array products Anda disembunyikan agar tidak terlalu panjang, biarkan saja)
        $products = [ /* ... data produk ... */ ];

        $results = [];
        if ($query !== '') {
            $q = mb_strtolower($query);
            foreach ($products as $p) {
                if (mb_stripos($p['title'] . ' ' . $p['description'], $q) !== false) {
                    $results[] = $p;
                }
            }
        }

        return view('pages.search', ['query' => $query, 'results' => $results]);
    }
}