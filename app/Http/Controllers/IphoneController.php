<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\iphone;

class IphoneController extends Controller
{
    public function index(): Factory|View // Ubah tipe pengembalian hanya ke View
    {
        $iphones = iphone::get(); // Ambil semua iphone

        return view('iphone', compact('iphones')); // Kembalikan view dengan data
    }
}
