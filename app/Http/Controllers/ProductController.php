<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View; // Pastikan untuk mengimpor View

class ProductController extends Controller
{
    public function index(): View // Ubah tipe pengembalian hanya ke View
    {
        $products = Product::get(); // Ambil semua produk

        return view('product', compact('products')); // Kembalikan view dengan data
    }
}
