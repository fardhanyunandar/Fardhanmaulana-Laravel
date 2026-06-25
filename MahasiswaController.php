<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama' => 'Fardhan Maulana Yunandar',
            'jurusan' => 'Pengembangan Perangkat Lunak',
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}

