@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="section-title">Pertolongan Pertama Pada Kecelakaan Kerja (P3K)</h2>
        
        <div class="card card-k3 mb-4">
            <div class="card-body">
                <h5 class="card-title">Prinsip Utama P3K</h5>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li><strong>Amankan Diri Sendiri</strong> - Pastikan area aman sebelum menolong</li>
                            <li><strong>Periksa Respon Korban</strong> - Cek kesadaran korban</li>
                            <li><strong>Minta Bantuan</strong> - Hubungi layanan medis darurat</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li><strong>Lakukan DRABC</strong> - Danger, Response, Airway, Breathing, Circulation</li>
                            <li><strong>Jangan Panik</strong> - Tetap tenang dan sistematis</li>
                            <li><strong>Gunakan APD</strong> - Pakai sarung tangan saat menangani korban</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="section-title">Teknik Pertolongan Pertama</h3>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card card-k3 h-100">
                    <div class="card-body">
                        <h5>Perdarahan Hebat</h5>
                        <ul>
                            <li>Tekan langsung dengan kain steril</li>
                            <li>Tinggikan bagian yang luka</li>
                            <li>Jangan cabut benda yang menancap</li>
                            <li>Balut dengan kuat</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card card-k3 h-100">
                    <div class="card-body">
                        <h5>Luka Bakar</h5>
                        <ul>
                            <li>Siram dengan air mengalir 15-20 menit</li>
                            <li>Lepaskan pakaian di sekitar luka</li>
                            <li>Tutup dengan kain steril longgar</li>
                            <li>Jangan olesi dengan pasta gigi/mentega</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card card-k3 h-100">
                    <div class="card-body">
                        <h5>Cedera Otot (RICE Method)</h5>
                        <ul>
                            <li><strong>Rest</strong> - Istirahatkan bagian cedera</li>
                            <li><strong>Ice</strong> - Kompres dengan es</li>
                            <li><strong>Compression</strong> - Balut untuk mengurangi bengkak</li>
                            <li><strong>Elevation</strong> - Tinggikan posisi</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card card-k3 h-100">
                    <div class="card-body">
                        <h5>Paparan Kimia pada Mata</h5>
                        <ul>
                            <li>Siram mata dengan air bersih mengalir</li>
                            <li>Dari sudut mata dalam ke luar</li>
                            <li>Lakukan minimal 15-20 menit</li>
                            <li>Segera bawa ke fasilitas kesehatan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection