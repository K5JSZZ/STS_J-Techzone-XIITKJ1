<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DataController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('user.home', compact('products'));
    }


    public function produk()
    {

        $produk = [
            'nama' => 'Laptop ASUS TUF GAMING F15',
            'harga' => 12999000,
            'harga_diskon' => 15999000,
            'rating' => 4.8,
            'ulasan' => 1236,
            'deskripsi' => 'Nikmati performa gaming maksimal dengan prosesor Intel, layar 144Hz, kartu grafis RTX, dan desain tahan banting khas TUF.',
            'gambar' => [
                'img/oang-2.jpg',
                'img/orang-1.jpg',
                'img/orang-3.jpg',
                'img/orang-4.jpg',
            ]
        ];

        return view('detail', compact('produk'));
    }


    public function shop(Request $request)
    {
        $search = $request->input('search');

        $products = Product::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%$search%");
        })->get();

        return view('produk.shop', compact('products'));
    }

    public function checkout(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        $user = auth()->user();   // <— ini yang wajib
        $cart = [$product];       // contoh, diganti kalau kamu punya cart beneran
        $subtotal = $product->price;

        return view('produk.checkout', compact('product', 'user', 'cart', 'subtotal'));
    }




    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('produk.detail', compact('product'));
    }



}
