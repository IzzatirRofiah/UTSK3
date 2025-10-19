@extends('layouts2.app')

@section('content')
    <section class="hero-section" style="background: linear-gradient(135deg, rgba(120, 100, 200, 0.9) 0%, rgba(160, 180, 240, 0.9) 100%), url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="display-5 fw-bold mb-3">Pertolongan Pertama Pada Kekecalaan Kerja (P3K)</h1>
                    <p class="lead">Halaman ini membahas tentang prinsip-prinsip dasar dan teknik-teknik pertolongan pertama yang penting untuk diketahui dalam situasi darurat di tempat kerja.</p>
                </div>
            </div>
        </div>
    </section>

<section class="py-5">
    <div class="container">
        
        {{-- PRINSIP UTAMA P3K --}}
        <div class="card card-k3 mb-4 shadow-sm border-0">
            <div class="card-body py-4 px-3">
                <h4 class="card-title text-center fw-bold mb-3 prinsip-title" style="color: #1a365d; font-size: 1.75rem;">
                    🩺 Prinsip Utama P3K
                </h4>
                <div class="row text-start">
                    <div class="col-md-6 mb-3">
                        <ul class="list-unstyled ps-3 mb-0">
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
                        <ul class="list-unstyled ps-3 mb-0">
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

        <h3 class="section-title text-center mb-4 fw-bold" style="color: #1a365d;">Teknik Pertolongan Pertama</h3>

        <div class="row">
            <!-- Perdarahan Hebat -->
            <div class="col-md-6 mb-4">
                <div class="card card-k3 h-100 text-center shadow-sm border-0">
                    <div class="card-body py-4 px-3">
                        <div class="icon-circle">
                            <i class="fas fa-tint"></i>
                        </div>
                        <h5 class="text-center mb-2">Perdarahan Hebat</h5>
                        <ul class="text-start small">
                            <li>Tekan langsung dengan kain steril</li>
                            <li>Tinggikan bagian yang luka</li>
                            <li>Jangan cabut benda yang menancap</li>
                            <li>Balut dengan kuat</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Luka Bakar -->
            <div class="col-md-6 mb-4">
                <div class="card card-k3 h-100 text-center shadow-sm border-0">
                    <div class="card-body py-4 px-3">
                        <div class="icon-circle">
                            <i class="fas fa-fire"></i>
                        </div>
                        <h5 class="text-center mb-2">Luka Bakar</h5>
                        <ul class="text-start small">
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
            <!-- Cedera Otot -->
            <div class="col-md-6 mb-4">
                <div class="card card-k3 h-100 text-center shadow-sm border-0">
                    <div class="card-body py-4 px-3">
                        <div class="icon-circle">
                            <i class="fas fa-running"></i>
                        </div>
                        <h5 class="text-center mb-2">Cedera Otot (RICE Method)</h5>
                        <ul class="text-start small">
                            <li><strong>Rest</strong> - Istirahatkan bagian cedera</li>
                            <li><strong>Ice</strong> - Kompres dengan es</li>
                            <li><strong>Compression</strong> - Balut untuk mengurangi bengkak</li>
                            <li><strong>Elevation</strong> - Tinggikan posisi</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Paparan Kimia -->
            <div class="col-md-6 mb-4">
                <div class="card card-k3 h-100 text-center shadow-sm border-0">
                    <div class="card-body py-4 px-3">
                        <div class="icon-circle">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h5 class="text-center mb-2">Paparan Kimia pada Mata</h5>
                        <ul class="text-start small">
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
