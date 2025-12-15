<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view ('index');
    }

    public function about(){
        return view ('pages.about');
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
        $query = trim((string) $request->input('q', ''));

        // Basic in-memory product dataset (matches products page)
        $products = [
            [
                'title' => 'Organic Tomatoes',
                'image' => 'assets/img/products/tomatoes.jpg',
                'price' => '$3.99/lb',
                'description' => 'Freshly picked vine-ripened tomatoes, grown without pesticides.',
                'url' => route('products') . '#tomatoes'
            ],
            [
                'title' => 'Fresh Carrots',
                'image' => 'assets/img/products/carrots.jpg',
                'price' => '$2.49/lb',
                'description' => 'Sweet and crunchy, perfect for snacks or cooking.',
                'url' => route('products') . '#carrots'
            ],
            [
                'title' => 'Organic Apples',
                'image' => 'assets/img/products/apples.jpg',
                'price' => '$1.99/lb',
                'description' => 'Crisp and juicy, available in several varieties.',
                'url' => route('products') . '#apples'
            ],
            [
                'title' => 'Farm Eggs',
                'image' => 'assets/img/products/eggs.jpg',
                'price' => '$4.99/dozen',
                'description' => 'Free-range eggs from happy, pasture-raised chickens.',
                'url' => route('products') . '#eggs'
            ],
            [
                'title' => 'Raw Honey',
                'image' => 'assets/img/products/honey.jpg',
                'price' => '$8.99/jar',
                'description' => 'Pure, unfiltered honey from our local beehives.',
                'url' => route('products') . '#honey'
            ],
            [
                'title' => 'Artisan Bread',
                'image' => 'assets/img/products/bread.jpg',
                'price' => '$5.99/loaf',
                'description' => 'Freshly baked sourdough using traditional methods.',
                'url' => route('products') . '#bread'
            ],
        ];

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
