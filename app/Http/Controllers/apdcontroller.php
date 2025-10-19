<?php
namespace App\Http\Controllers;
{
    $apdItems = [
        [
            'name' => 'Helm Safety',
            'desc' => 'Melindungi kepala dari benturan',
            'image' => 'helm.png'
        ],
        [
            'name' => 'Kacamata Safety',
            'desc' => 'Melindungi mata dari percikan',
            'image' => 'kacamata.png'
        ],
        [
            'name' => 'Sarung Tangan',
            'desc' => 'Mencegah cedera tangan',
            'image' => 'tangan.png'
        ],
        [
            'name' => 'Masker/Respirator',
            'desc' => 'Melindungi pernapasan',
            'image' => 'masker.png'
        ],
        [
            'name' => 'Sepatu Safety',
            'desc' => 'Melindungi kaki dari benda berat',
            'image' => 'sepatu.png'
        ],
        [
            'name' => 'Rompi Reflektif',
            'desc' => 'Meningkatkan visibilitas',
            'image' => 'kerneja.png'
        ]
    ];

    return view('program-k3.apd', compact('apdItems'));
}