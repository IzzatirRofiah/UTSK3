@extends('layouts.app')

@section('content')
    <section class="hero-section" style="background: linear-gradient(135deg, rgba(26,54,93,0.9) 0%, rgba(45,90,154,0.9) 100%), url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-4">Pertolongan Pertama Pada kekecalaan Kerja (P3K)</h1>
                    <p class="lead">Halaman ini membahas tentang prinsip-prinsip dasar dan teknik-teknik pertolongan pertama yang penting untuk diketahui dalam situasi darurat di tempat kerja.</p>
                </div>
            </div>
        </div>
    </section>

<section class="py-5">
    <div class="container">
        
        {{-- PRINSIP UTAMA P3K --}}
        <div class="card card-k3 mb-4 shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title text-center fw-bold mb-4" style="color: #1a365d;">
                    🩺 Prinsip Utama P3K
                </h5>
                <div class="row text-start">
                    <div class="col-md-6 mb-3">
                        <ul class="list-unstyled ps-3">
                            <li class="mb-2">
                                🛡️ <strong>Amankan Diri Sendiri</strong> - Pastikan area aman sebelum menolong
                            </li>
                            <li class="mb-2">
                                ❤️ <strong>Periksa Respon Korban</strong> - Cek kesadaran korban
                            </li>
                            <li class="mb-2">
                                ☎️ <strong>Minta Bantuan</strong> - Hubungi layanan medis darurat
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 mb-3">
                        <ul class="list-unstyled ps-3">
                            <li class="mb-2">
                                ⚕️ <strong>Lakukan DRABC</strong> - Danger, Response, Airway, Breathing, Circulation
                            </li>
                            <li class="mb-2">
                                😌 <strong>Jangan Panik</strong> - Tetap tenang dan sistematis
                            </li>
                            <li class="mb-2">
                                🧤 <strong>Gunakan APD</strong> - Pakai sarung tangan saat menangani korban
                            </li>
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