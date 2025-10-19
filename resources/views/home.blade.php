@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="k3-logo">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h1 class="display-4 fw-bold mb-4">Keselamatan & Kesehatan Kerja Prioritas Kami</h1>
                    <p class="lead mb-5">I2N Resec berkomitmen menciptakan lingkungan kerja yang aman, sehat, dan nyaman bagi seluruh karyawan dan pelanggan dengan standar tertinggi.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#program-k3" class="btn btn-primary btn-lg">Pelajari K3 Kami</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Auto Service Safety" class="img-fluid rounded-3 shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section (Sekilas) -->
    <section class="py-5" id="tentang">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title">Tentang I2N Resec</h2>
                    <p class="lead">Perusahaan Jasa Service dan Retail Mobil dengan Komitmen Tinggi pada Keselamatan & Kesehatan Kerja</p>
                    
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="card-icon" style="width: 50px; height: 50px; margin: 0 1rem 0 0;">
                                    <i class="fas fa-car"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Bidang Usaha</h6>
                                    <p class="mb-0 text-muted">Otomotif</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="card-icon" style="width: 50px; height: 50px; margin: 0 1rem 0 0;">
                                    <i class="fas fa-tools"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Jenis Usaha</h6>
                                    <p class="mb-0 text-muted">Jasa Service & Retail Mobil</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="/tentang" class="btn btn-outline-primary mt-3">Lihat Detail Tentang Kami</a>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="card card-modern">
                        <div class="card-body p-4">
                            <h5 class="card-title">Visi & Misi Perusahaan</h5>
                            <div class="mb-4">
                                <h6 class="text-primary">Visi</h6>
                                <p>Menjadi perusahaan otomotif terdepan yang mengutamakan keselamatan dan kesejahteraan seluruh mekanik, staff, dan pelanggan.</p>
                            </div>
                            <div>
                                <h6 class="text-primary">Misi</h6>
                                <ul>
                                    <li>Menyediakan layanan service dan retail mobil berkualitas tinggi</li>
                                    <li>Menerapkan standar K3 tertinggi di semua operasional bengkel</li>
                                    <li>Mengembangkan sumber daya manusia yang kompeten dan berintegritas</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why K3 Important Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Mengapa K3 Penting di Bidang Otomotif?</h2>
                <p class="lead">Keselamatan dan Kesehatan Kerja adalah investasi untuk keberlangsungan bisnis dan perlindungan SDM</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-box">
                        <div class="card-icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <h4>Perlindungan Mekanik</h4>
                        <p>Melindungi tenaga kerja dari potensi bahaya kimia, mekanik, dan fisika di bengkel mobil</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-box">
                        <div class="card-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Produktivitas</h4>
                        <p>Meningkatkan efisiensi dan produktivitas kerja dengan lingkungan bengkel yang aman dan terorganisir</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-box">
                        <div class="card-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h4>Kepatuhan Hukum</h4>
                        <p>Memastikan kepatuhan terhadap regulasi dan standar nasional di industri otomotif</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Program K3 Section -->
    <section class="py-5 bg-light" id="program-k3">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Program K3 Kami</h2>
                <p class="lead">Program komprehensif untuk menjamin keselamatan dan kesehatan di lingkungan bengkel mobil</p>
            </div>
            
            <div class="row g-4">
                <!-- Pendahuluan & Sejarah K3 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card card-modern text-center h-100 program-card">
                        <a href="/program-k3/pendahuluan" class="text-decoration-none text-dark">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-history"></i>
                                </div>
                                <h5 class="card-title">Pendahuluan & Sejarah K3</h5>
                                <p class="card-text">Memahami perkembangan Keselamatan dan Kesehatan Kerja dari masa ke masa</p>
                                <span class="badge bg-primary">Sejarah</span>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Landasan Hukum -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card card-modern text-center h-100 program-card">
                        <a href="/program-k3/landasan-hukum" class="text-decoration-none text-dark">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-gavel"></i>
                                </div>
                                <h5 class="card-title">Landasan Hukum</h5>
                                <p class="card-text">Dasar hukum dan regulasi penerapan K3 di perusahaan otomotif</p>
                                <span class="badge bg-primary">Regulasi</span>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Alat Pelindung Diri -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card card-modern text-center h-100 program-card">
                        <a href="/program-k3/apd" class="text-decoration-none text-dark">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-hard-hat"></i>
                                </div>
                                <h5 class="card-title">Alat Pelindung Diri</h5>
                                <p class="card-text">Jenis dan penggunaan APD yang tepat di lingkungan bengkel mobil</p>
                                <span class="badge bg-primary">Safety Gear</span>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Denah Lokasi -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card card-modern text-center h-100 program-card">
                        <a href="/program-k3/denah" class="text-decoration-none text-dark">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-map-marked-alt"></i>
                                </div>
                                <h5 class="card-title">Denah Lokasi</h5>
                                <p class="card-text">Tata letak dan zonasi area kerja untuk optimalisasi keselamatan</p>
                                <span class="badge bg-primary">Layout</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- P3K -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="card card-modern text-center h-100 program-card">
                        <a href="/program-k3/p3k" class="text-decoration-none text-dark">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-first-aid"></i>
                                </div>
                                <h5 class="card-title">P3K</h5>
                                <p class="card-text">Pertolongan Pertama Pada Kecelakaan Kerja di lingkungan bengkel</p>
                                <span class="badge bg-primary">Emergency</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Faktor Keselamatan -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="card card-modern text-center h-100 program-card">
                        <a href="/faktor-keselamatan" class="text-decoration-none text-dark">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                                <h5 class="card-title">Faktor Keselamatan</h5>
                                <p class="card-text">Faktor-faktor yang mempengaruhi keselamatan kerja di bengkel</p>
                                <span class="badge bg-primary">Safety Factors</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection