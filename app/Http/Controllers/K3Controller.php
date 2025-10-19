<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class K3Controller extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function landasanHukum()
    {
        $regulations = [
            [
                'title' => 'UUD 1945 Pasal 27 Ayat (2)',
                'description' => 'Tiap-tiap warga negara berhak atas pekerjaan dan penghidupan yang layak bagi kemanusiaan',
                'pdf_url' => '#'
            ],
            [
                'title' => 'UU No 1 Tahun 1970',
                'description' => 'Tentang Keselamatan Kerja',
                'pdf_url' => '#'
            ],
            [
                'title' => 'UU No 13 Tahun 2003',
                'description' => 'Tentang Ketenagakerjaan',
                'pdf_url' => '#'
            ],
            [
                'title' => 'UU No 6 Tahun 2023',
                'description' => 'Tentang Cipta Kerja',
                'pdf_url' => '#'
            ],
            [
                'title' => 'UU No 24 Tahun 2011',
                'description' => 'Tentang Badan Penyelenggara Jaminan Sosial',
                'pdf_url' => '#'
            ]
        ];

        return view('program-k3.landasan-hukum', compact('regulations'));
    }

    public function apd()
    {
        $apdItems = [
            ['icon' => 'hard-hat', 'name' => 'Helm Safety', 'desc' => 'Melindungi kepala dari benturan'],
            ['icon' => 'glasses', 'name' => 'Kacamata Safety', 'desc' => 'Melindungi mata dari percikan'],
            ['icon' => 'hand-paper', 'name' => 'Sarung Tangan', 'desc' => 'Mencegah cedera tangan'],
            ['icon' => 'shoe-prints', 'name' => 'Sepatu Safety', 'desc' => 'Melindungi kaki dari benda berat'],
            ['icon' => 'vest', 'name' => 'Rompi Reflektif', 'desc' => 'Meningkatkan visibilitas'],
            ['icon' => 'lungs', 'name' => 'Masker/Respirator', 'desc' => 'Melindungi pernapasan'],
        ];

        return view('program-k3.apd', compact('apdItems'));
    }

    public function denah()
    {
        return view('program-k3.denah');
    }

    public function p3k()
    {
        return view('program-k3.p3k');
    }

    public function faktorKeselamatan()
    {
        return view('faktor-keselamatan');
    }
}
