<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeroSlide; // <--- 1. WAJIB: Tambahkan Import Model ini di paling atas
use App\Models\CompanyMenu;
use App\Models\Product;
use App\Models\Article;
use App\Models\Video;
use App\Models\ProductCategory;

class FrontendController extends Controller
{
    public function index(){
        // Hero Slide (Sudah ada)
        $slides = HeroSlide::where('is_active', 1)->where('type', 'home')->get();

        // 2. Ambil Produk
        // Ini hanya mengambil 8 produk TERBARU untuk Home Page
        $products = Product::where('is_active', 1)
                   ->latest() // Urutkan dari yang terbaru
                   ->take(8)  // Ambil cuma 8 biji
                   ->get();

        // 3. Ambil Berita (Terbaru)
        $articles = Article::select('title', 'slug', 'image_path', 'created_at')
                       ->where('is_active', 1)
                       ->latest()
                       ->take(3)
                       ->get();

        // 4. Ambil Video (Terbaru)
        $videos = Video::where('is_active', 1)->latest()->take(8)->get();

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

    public function category($slug)
    {
        // 1. Ambil data Kategori berdasarkan slug (misal: 'insektisida')
        $category = ProductCategory::where('slug', $slug)->firstOrFail();

        // 2. Ambil Produk yang kategorinya SAMA dengan nama kategori ini
        // Pastikan di tabel 'products', kolom 'category' isinya 'Insecticide' atau 'Insektisida' (sesuaikan datanya)
        $products = Product::where('category', $category->name)
                        ->where('is_active', 1)
                        ->get();

        // 3. Kirim ke view
        return view('pages.category', compact('category', 'products'));
    }

    public function productDetail($slug)
    {
        // 1. Ambil produk berdasarkan SLUG yang dikirim di URL
        $product = \App\Models\Product::where('slug', $slug)
                                    ->where('is_active', 1)
                                    ->firstOrFail(); // Error 404 jika tidak ketemu

        // 2. Ambil Produk Serupa (Kategori sama, tapi bukan produk yang sedang dibuka)
        $relatedProducts = \App\Models\Product::where('category', $product->category)
                                            ->where('id', '!=', $product->id) // Jangan tampilkan diri sendiri
                                            ->where('is_active', 1)
                                            ->take(8) // Ambil 8 saja
                                            ->get();

        return view('pages.product-detail', compact('product', 'relatedProducts'));
    }

    public function articleDetail($slug)
    {
        // 1. Ambil artikel berdasarkan slug
        // Ambil SEMUA kolom berdasarkan slug
        $article = Article::where('slug', $slug)->firstOrFail();
        
        // Fitur tambah view (opsional)
        $article->increment('views'); 

        // Ambil berita lain untuk sidebar (exclude berita yang sedang dibaca)
        $otherArticles = Article::where('id', '!=', $article->id)
                                ->latest()
                                ->take(4)
                                ->get();

        // 3. Kirim ke view
        return view('pages.detail-kegiatan', compact('article', 'otherArticles'));
    }

    // FrontendController.php

    public function kegiatan()
    {
        // 1. Ambil 1 Berita TERBARU untuk menjadi Hero (Banner Besar)
        $heroArticle = Article::where('is_active', 1)
                            ->latest()
                            ->first();

        // 2. Ambil berita sisanya (Grid) dengan pagination, KECUALI berita yang sudah jadi Hero
        // Jika tidak ada heroArticle (database kosong), ambil semua kosong
        $query = Article::where('is_active', 1)->latest();
        
        if($heroArticle) {
            $query->where('id', '!=', $heroArticle->id);
        }
        
        $articles = $query->paginate(8); // Menampilkan 8 berita per halaman

        return view('pages.kegiatan', compact('heroArticle', 'articles'));
    }

    public function products(){
        return view ('pages.products');
    }

    public function services()
    {
        // Ambil berita/kegiatan terbaru untuk ditampilkan di halaman services
        $heroArticle = Article::where('is_active', 1)
                             ->latest()
                             ->first();

        $articles = Article::where('is_active', 1)
                          ->latest()
                          ->skip(1) // Skip berita yang jadi hero
                          ->take(6)
                          ->get();

        $videos = Video::where('is_active', 1)
                      ->latest()
                      ->take(6)
                      ->get();

        return view('pages.services', compact('heroArticle', 'articles', 'videos'));
    }

    public function testimonials(){
        return view ('pages.testimonials');
    }

    public function blog(){
        // 1. Ambil 1 Berita TERBARU untuk menjadi Hero (Banner Besar)
        $heroBlog = Article::where('is_active', 1)
                            ->latest()
                            ->first();

        // 2. Ambil berita sisanya (Grid) dengan pagination, KECUALI berita yang sudah jadi Hero
        $query = Article::where('is_active', 1)->latest();
        
        if($heroBlog) {
            $query->where('id', '!=', $heroBlog->id);
        }
        
        $blogs = $query->paginate(8);

        return view('pages.blog', compact('heroBlog', 'blogs'));
    }

    public function blogDetail($slug)
    {
        // 1. Ambil artikel berdasarkan slug
        $blog = Article::where('slug', $slug)->firstOrFail();
        
        // Fitur tambah view (opsional)
        $blog->increment('views'); 

        // Ambil berita lain untuk sidebar (exclude berita yang sedang dibaca)
        $otherBlogs = Article::where('id', '!=', $blog->id)
                                ->latest()
                                ->take(4)
                                ->get();

        return view('pages.blog-detail', compact('blog', 'otherBlogs'));
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

    public function videoDetail($slug)
    {
        // 1. Ambil video berdasarkan slug
        $video = Video::where('slug', $slug)->firstOrFail();
        
        // Fitur tambah view (opsional)
        $video->increment('views');

        // Ambil video lain untuk sidebar (exclude video yang sedang ditonton)
        $video_lainnya = Video::where('id', '!=', $video->id)
                              ->where('is_active', 1)
                              ->latest()
                              ->take(8)
                              ->get();

        return view('pages.video-detail', compact('video', 'video_lainnya'));
    }

    public function video()
    {
        // Ambil semua video aktif dengan pagination
        $videos = Video::where('is_active', 1)->latest()->paginate(12);
        return view('pages.video', compact('videos'));
    }
}