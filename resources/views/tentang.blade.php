@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, rgba(26,54,93,0.9) 0%, rgba(45,90,154,0.9) 100%), url('https://images.unsplash.com/photo-1565689228866-1d7afc45b63f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-4">Tentang I2N Resec</h1>
                    <p class="lead">Perusahaan Jasa Service dan Retail Mobil dengan Komitmen Tinggi pada Keselamatan & Kesehatan Kerja</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Profile -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title">Profil Perusahaan</h2>
                    <p class="lead">I2N Resec adalah perusahaan yang bergerak di bidang otomotif dengan sistem 3S (Sales, Services, Spareparts) yang terintegrasi.</p>
                    
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

                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="card-icon" style="width: 50px; height: 50px; margin: 0 1rem 0 0;">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Lokasi</h6>
                                    <p class="mb-0 text-muted">Malang, Jawa Timur</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="card-icon" style="width: 50px; height: 50px; margin: 0 1rem 0 0;">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Tim</h6>
                                    <p class="mb-0 text-muted">3 Anggota</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="card card-modern">
                        <div class="card-body p-4">
                            <h5 class="card-title">Visi & Misi</h5>
                            <div class="mb-4">
                                <h6 class="text-primary">Visi</h6>
                                <p>Menjadi perusahaan otomotif terdepan yang mengutamakan keselamatan dan kesejahteraan seluruh stakeholder.</p>
                            </div>
                            <div>
                                <h6 class="text-primary">Misi</h6>
                                <ul>
                                    <li>Menyediakan layanan service dan retail mobil berkualitas tinggi</li>
                                    <li>Menerapkan standar K3 tertinggi di semua operasional</li>
                                    <li>Mengembangkan sumber daya manusia yang kompeten dan berintegritas</li>
                                    <li>Berkontribusi positif bagi masyarakat dan lingkungan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title d-inline-block">Tim Kami</h2>
                <p class="lead">Professional muda yang berdedikasi dalam mengembangkan perusahaan</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card card-modern text-center">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-primary d-inline-flex align-items-center justify-content-center text-white mb-3" style="width: 100px; height: 100px;">
                                <i class="fas fa-user fa-2x"></i>
                            </div>
                            <h5 class="card-title">Izzatir Rofi'ah</h5>
                            <p class="text-muted">Co-Founder & Operations Manager</p>
                            <p class="card-text">Bertanggung jawab atas operasional perusahaan dan implementasi K3.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card card-modern text-center">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-primary d-inline-flex align-items-center justify-content-center text-white mb-3" style="width: 100px; height: 100px;">
                                <i class="fas fa-user fa-2x"></i>
                            </div>
                            <h5 class="card-title">M. Ircham Daffansyah</h5>
                            <p class="text-muted">Co-Founder & Technical Director</p>
                            <p class="card-text">Ahli dalam technical service dan pengembangan sistem keselamatan.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card card-modern text-center">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-primary d-inline-flex align-items-center justify-content-center text-white mb-3" style="width: 100px; height: 100px;">
                                <i class="fas fa-user fa-2x"></i>
                            </div>
                            <h5 class="card-title">Nazwa Nurul Wijaya</h5>
                            <p class="text-muted">Co-Founder & Marketing Manager</p>
                            <p class="card-text">Mengelola pemasaran dan hubungan dengan pelanggan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Description -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto" data-aos="fade-up">
                    <div class="card card-modern">
                        <div class="card-body p-5">
                            <h3 class="card-title text-center mb-4">Deskripsi Bisnis</h3>
                            <p class="card-text">
                                Perusahaan yang kami pilih terfokus pada otomotif dengan sistem 3S (Sales, Services, Spareparts). 
                                Kegiatan operasionalnya tidak hanya terbatas pada penjualan unit kendaraan, tetapi juga mencakup 
                                layanan purna jual yang kompleks di area bengkel (workshop).
                            </p>
                            <p class="card-text">
                                Area servis inilah yang menjadi pusat kegiatan teknis dengan berbagai potensi risiko kecelakaan 
                                dan penyakit akibat kerja, mulai dari bahaya mekanik, kimiawi, hingga ergonomis. Oleh karena itu, 
                                penerapan sistem Keselamatan dan Kesehatan Kerja (K3) yang komprehensif menjadi faktor krusial 
                                untuk melindungi tenaga kerja dan memastikan kelancaran operasional perusahaan.
                            </p>
                            <div class="text-center mt-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-icon mx-auto" style="width: 70px; height: 70px;">
                                            <i class="fas fa-shopping-cart"></i>
                                        </div>
                                        <h6 class="mt-3">Sales</h6>
                                        <p class="text-muted">Penjualan Mobil</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-icon mx-auto" style="width: 70px; height: 70px;">
                                            <i class="fas fa-tools"></i>
                                        </div>
                                        <h6 class="mt-3">Services</h6>
                                        <p class="text-muted">Layanan Service</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-icon mx-auto" style="width: 70px; height: 70px;">
                                            <i class="fas fa-cogs"></i>
                                        </div>
                                        <h6 class="mt-3">Spareparts</h6>
                                        <p class="text-muted">Suku Cadang</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection