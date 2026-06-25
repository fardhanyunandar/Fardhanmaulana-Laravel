<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = [
            'nama_produk' => 'Handphone',
            'harga' => 'Rp 100.000',
        ];

        return view('produk', compact('produk'));
    }
}

