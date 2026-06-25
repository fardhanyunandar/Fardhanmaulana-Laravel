<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $biodata = [
            'nama' => 'Fardhan Maulana Yunandar',
            'kelas' => 'PPL',
        ];

        return view('profil', compact('biodata'));
    }
}

