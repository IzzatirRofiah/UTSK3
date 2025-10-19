@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, rgba(26,54,93,0.9) 0%, rgba(45,90,154,0.9) 100%), url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-4">Pendahuluan & Sejarah K3</h1>
                    <p class="lead">Memahami perkembangan Keselamatan dan Kesehatan Kerja dari masa ke masa</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- Introduction -->
                    <div class="card card-modern mb-5" data-aos="fade-up">
                        <div class="card-body p-5">
                            <h3 class="card-title mb-4">Apa itu K3?</h3>
                            <p class="card-text">
                                <strong>Keselamatan dan Kesehatan Kerja (K3)</strong> adalah segala kegiatan untuk menjamin dan 
                                melindungi keselamatan dan kesehatan tenaga kerja melalui upaya pencegahan kecelakaan kerja 
                                dan penyakit akibat kerja.
                            </p>
                            <p class="card-text">
                                K3 tidak hanya tentang mematuhi peraturan, tetapi juga tentang menciptakan budaya keselamatan 
                                di tempat kerja dimana setiap orang bertanggung jawab atas keselamatan diri sendiri dan orang lain.
                            </p>
                        </div>
                    </div>

                    <!-- History Timeline -->
                    <div class="card card-modern mb-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-body p-5">
                            <h3 class="card-title mb-4">Sejarah Perkembangan K3</h3>
                            
                            <div class="timeline">
                                <div class="timeline-item mb-4">
                                    <div class="timeline-marker bg-primary rounded-circle"></div>
                                    <div class="timeline-content">
                                        <h5 class="mb-2">Era Pra-Industrial</h5>
                                        <p class="text-muted">Konsep keselamatan kerja sudah dikenal sejak peradaban kuno dengan pembagian kerja dan alat sederhana.</p>
                                    </div>
                                </div>
                                
                                <div class="timeline-item mb-4">
                                    <div class="timeline-marker bg-primary rounded-circle"></div>
                                    <div class="timeline-content">
                                        <h5 class="mb-2">Revolusi Industri (1760-1840)</h5>
                                        <p class="text-muted">Munculnya mesin uap dan pabrik menciptakan kondisi kerja yang berbahaya, memicu kesadaran akan perlunya perlindungan pekerja.</p>
                                    </div>
                                </div>
                                
                                <div class="timeline-item mb-4">
                                    <div class="timeline-marker bg-primary rounded-circle"></div>
                                    <div class="timeline-content">
                                        <h5 class="mb-2">Awal Abad 20</h5>
                                        <p class="text-muted">Diterbitkannya undang-undang keselamatan kerja pertama di berbagai negara dan munculnya organisasi K3 profesional.</p>
                                    </div>
                                </div>
                                
                                <div class="timeline-item mb-4">
                                    <div class="timeline-marker bg-primary rounded-circle"></div>
                                    <div class="timeline-content">
                                        <h5 class="mb-2">UU No. 1 Tahun 1970 (Indonesia)</h5>
                                        <p class="text-muted">Landasan hukum formal K3 di Indonesia yang mengatur keselamatan kerja di semua tempat kerja.</p>
                                    </div>
                                </div>
                                
                                <div class="timeline-item">
                                    <div class="timeline-marker bg-primary rounded-circle"></div>
                                    <div class="timeline-content">
                                        <h5 class="mb-2">Era Modern</h5>
                                        <p class="text-muted">Pengembangan Sistem Manajemen K3 (SMK3), integrasi teknologi, dan pendekatan holistik untuk keselamatan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Importance of K3 -->
                    <div class="card card-modern" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body p-5">
                            <h3 class="card-title mb-4">Mengapa K3 Penting di I2N Resec?</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex">
                                        <div class="card-icon me-3" style="width: 50px; height: 50px;">
                                            <i class="fas fa-user-shield"></i>
                                        </div>
                                        <div>
                                            <h6>Perlindungan Pekerja</h6>
                                            <p class="text-muted mb-0">Melindungi mekanik dari bahaya kimia, mekanik, dan fisika</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex">
                                        <div class="card-icon me-3" style="width: 50px; height: 50px;">
                                            <i class="fas fa-chart-line"></i>
                                        </div>
                                        <div>
                                            <h6>Produktivitas</h6>
                                            <p class="text-muted mb-0">Lingkungan kerja aman meningkatkan efisiensi operasional</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex">
                                        <div class="card-icon me-3" style="width: 50px; height: 50px;">
                                            <i class="fas fa-balance-scale"></i>
                                        </div>
                                        <div>
                                            <h6>Kepatuhan Hukum</h6>
                                            <p class="text-muted mb-0">Mematuhi regulasi pemerintah tentang K3</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex">
                                        <div class="card-icon me-3" style="width: 50px; height: 50px;">
                                            <i class="fas fa-hand-holding-usd"></i>
                                        </div>
                                        <div>
                                            <h6>Keuntungan Bisnis</h6>
                                            <p class="text-muted mb-0">Mengurangi biaya akibat kecelakaan kerja</p>
                                        </div>
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
        .timeline {
            position: relative;
            padding-left: 2rem;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: var(--primary);
        }
        
        .timeline-item {
            position: relative;
            display: flex;
            align-items: flex-start;
        }
        
        .timeline-marker {
            position: absolute;
            left: -2rem;
            width: 12px;
            height: 12px;
            border: 3px solid white;
            box-shadow: 0 0 0 3px var(--primary);
        }
        
        .timeline-content {
            flex: 1;
            padding-left: 1rem;
        }
    </style>
@endsection