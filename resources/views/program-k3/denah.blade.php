@extends('layouts.app')

@section('content')
    <section class="hero-section" style="background: linear-gradient(135deg, rgba(120, 100, 200, 0.9) 0%, rgba(160, 180, 240, 0.9) 100%), url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-4">Denah Lokasi dan Tata Letak Dealer & Service</h1>
                    <p class="lead">Memahami zonasi dan tata letak fasilitas di lingkungan Dealer & Service I2N Resec</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <!-- Gambar Denah -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card card-modern mb-5 shadow-sm">
                        <div class="card-body p-4">
                            <div class="bg-light p-4 rounded text-center">
                                <img src="{{ asset('assets/denah.png') }}" alt="Denah Visual Dealer & Service"
                                    class="img-fluid mx-auto d-block" style="max-height: 550px; width: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Keterangan Zonasi -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card card-modern shadow-sm">
                        <div class="card-body p-5">
                            <h3 class="card-title text-center mb-4">KETERANGAN ZONASI</h3>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="text-primary mb-4 mt-2">Zonasi Operasional & Pelayanan</h5>

                                    <div class="mb-4">
                                        <h6><i class="fas fa-car me-2 text-primary"></i>Showroom</h6>
                                        <p class="text-muted mb-0">Area utama untuk memamerkan dan menjual mobil kepada pelanggan.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6><i class="fas fa-building me-2 text-success"></i>Kantor Pusat</h6>
                                        <p class="text-muted mb-0">Area administrasi dan manajemen utama perusahaan.</p>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <h6><i class="fas fa-id-card me-2 text-secondary"></i>Kantor Otomotif</h6>
                                        <p class="text-muted mb-0">Area kantor terkait operasional dan pemasaran otomotif.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6><i class="fas fa-tools me-2 text-warning"></i>Area Bengkel (Service)</h6>
                                        <p class="text-muted mb-0">Area perbaikan, perawatan, dan maintenance kendaraan.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6><i class="fas fa-boxes me-2 text-info"></i>Tempat Suku Cadang</h6>
                                        <p class="text-muted mb-0">Gudang penyimpanan stok suku cadang dan komponen kendaraan.</p>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <h6><i class="fas fa-info-circle me-2 text-primary"></i>Resepsionis</h6>
                                        <p class="text-muted mb-0">Pusat informasi dan penerimaan pelanggan di dekat Kantor Pusat.</p>
                                    </div>
                                      <div class="mb-4">
                                        <h6><i class="fas fa-biohazard me-2 text-danger"></i>Penyimpanan Sementara Limbah B3</h6>
                                        <p class="text-muted mb-0">Penyimpanan khusus dan terisolasi untuk limbah berbahaya dan beracun.</p>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <h5 class="text-primary mb-4 mt-2">Fasilitas Pendukung & Keselamatan</h5>

                                    <div class="mb-4">
                                        <h6><i class="fas fa-parking me-2 text-dark"></i>Area Parkir Motor & Mobil</h6>
                                        <p class="text-muted mb-0">Area terbuka untuk parkir kendaraan pelanggan, staf, dan display.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6><i class="fas fa-couch me-2 text-info"></i>Tempat Tunggu Pelanggan</h6>
                                        <p class="text-muted mb-0">Area nyaman bagi pelanggan saat menunggu perbaikan atau proses administrasi.</p>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <h6><i class="fas fa-toilet me-2 text-secondary"></i>Toilet & Toilet Staff</h6>
                                        <p class="text-muted mb-0">Fasilitas sanitasi yang tersedia di beberapa titik strategis.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6><i class="fas fa-medkit me-2 text-success"></i>Ruang Kesehatan (P3K)</h6>
                                        <p class="text-muted mb-0">Ruangan untuk penanganan P3K dan perawatan kesehatan ringan.</p>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <h6><i class="fas fa-fire-extinguisher me-2 text-warning"></i>Lokasi APAR</h6>
                                        <p class="text-muted mb-0">Penempatan Alat Pemadam Api Ringan di titik-titik rawan kebakaran.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6><i class="fas fa-map-marker-alt me-2 text-danger"></i>Main Driver (Titik Kumpul)</h6>
                                        <p class="text-muted mb-0">Area aman terpusat untuk berkumpul saat keadaan darurat (evakuasi).</p>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <h6><i class="fas fa-shield-alt me-2 text-dark"></i>Pos Satpam</h6>
                                        <p class="text-muted mb-0">Area keamanan utama untuk memantau keluar masuknya kendaraan dan orang.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .card-modern {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            overflow: hidden;
            background: white;
        }
        
        .card-modern:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }
        
        .card-body h6 {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .card-body p {
            line-height: 1.6;
        }
    </style>
@endsection