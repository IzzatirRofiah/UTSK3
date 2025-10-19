@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, rgba(26,54,93,0.9) 0%, rgba(45,90,154,0.9) 100%), url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-4">Faktor-Faktor Keselamatan Kerja</h1>
                    <p class="lead">Dalam kegiatan service mobil di bengkel, terdapat berbagai faktor yang mempengaruhi penerapan Keselamatan dan Kesehatan Kerja (K3). 
                        Faktor-faktor ini penting untuk memastikan pekerja, pelanggan, serta aset perusahaan terlindungi dari potensi kecelakaan dan kerugian.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">

                    <!-- Faktor Utama -->
                    <div class="row g-4">
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card card-modern h-100">
                                <div class="card-body p-4">
                                    <div class="card-icon" style="width: 60px; height: 60px; margin-bottom: 1rem;">
                                        <i class="fas fa-map-signs"></i>
                                    </div>
                                    <h5 class="card-title text-center">Tata Letak dan Zonasi</h5>
                                    <p class="card-text">Area bengkel biasanya dipisahkan dari showroom, kantor administrasi, dan ruang tunggu pelanggan. Zonasi ini mencegah pelanggan terpapar langsung oleh bahaya mekanis dan kimia yang ada di area teknis.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="card card-modern h-100">
                                <div class="card-body p-4">
                                    <div class="card-icon" style="width: 60px; height: 60px; margin-bottom: 1rem;">
                                        <i class="fas fa-trash-alt"></i>
                                    </div>
                                    <h5 class="card-title text-center">Manajemen Limbah B3</h5>
                                    <p class="card-text">Bengkel mobil menghasilkan limbah bahan berbahaya dan beracun (B3), seperti oli bekas, cairan rem, aki, serta cairan pendingin. Penyimpanan khusus limbah B3 diperlukan untuk mencegah pencemaran lingkungan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="card card-modern h-100">
                                <div class="card-body p-4">
                                    <div class="card-icon" style="width: 60px; height: 60px; margin-bottom: 1rem;">
                                        <i class="fas fa-first-aid"></i>
                                    </div>
                                    <h5 class="card-title text-center">Kesiapan Keadaan Darurat</h5>
                                    <p class="card-text">Bengkel wajib memiliki titik kumpul evakuasi, jalur evakuasi jelas, dan peralatan pemadam kebakaran. Hal ini menjadi kunci saat terjadi kebakaran, ledakan, atau tumpahan zat kimia.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="card card-modern h-100">
                                <div class="card-body p-4">
                                    <div class="card-icon" style="width: 60px; height: 60px; margin-bottom: 1rem;">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <h5 class="card-title text-center">Keamanan Lingkungan</h5>
                                    <p class="card-text">Pos keamanan atau petugas satpam bertugas mengawasi keluar-masuk kendaraan dan orang. Keberadaan keamanan mencegah akses ilegal serta mengurangi potensi risiko kecelakaan lalu lintas di area bengkel.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection