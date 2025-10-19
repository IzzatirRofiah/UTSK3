@extends('layouts2.app')

@section('content')
    <!-- Hero Section -->
<section class="hero-section" style="background: linear-gradient(135deg, rgba(120, 100, 200, 0.9) 0%, rgba(160, 180, 240, 0.9) 100%), url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">   
         <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-4">Landasan Hukum K3</h1>
                    <p class="lead">Dasar hukum dan regulasi yang menjadi pedoman penerapan K3 di I2N Resec</p>
                </div>
            </div>
        </div>
    </section>
     
    <!-- beri jarak ekstra sebelum section regulasi -->
    <section class="py-5 bg-light" style="margin-top:1.5rem;">
        <div class="container">
        </div>
    </section>

     <!-- Partner Logos & Intro Paragraph -->
    <section class="py-5" id="partners-intro">
        <div class="container">
            <!-- Logo section with increased padding -->
            <div class="text-center mb-5 py-4" data-aos="fade-up">
                <div class="d-flex justify-content-center align-items-center gap-5 px-4">
                    <img src="{{ asset('assets/g1.png') }}"
                         alt="Logo K3" class="img-fluid" style="max-width:200px;">
                    <img src="{{ asset('assets/g2.png') }}"
                         alt="Logo 2" class="img-fluid" style="max-width:160px;">
                </div>
            </div>

            <!-- Text section with increased padding -->
            <div class="row justify-content-center">
                <div class="col-lg-10 px-4 py-4">
                    <div class="text-content px-md-5">
                        <p class="lead text-center fs-4 fw-bold mb-4" data-aos="fade-up" data-aos-delay="100">
                            Perusahaan kami telah menerapkan K3 sesuai dengan peraturan yang tercantum di bawah ini; komitmen ini diwujudkan melalui kebijakan operasional dan manajemen risiko yang memastikan setiap pekerjaan dilakukan dengan prinsip keselamatan.
                        </p>
                        <p class="text-center  fs-4 fw-bold mb-4" data-aos="fade-up" data-aos-delay="150">
                            Pelaksanaan meliputi identifikasi bahaya, penilaian dan pengendalian risiko, penyediaan alat pelindung diri, serta pelatihan berkala bagi seluruh tenaga kerja untuk meminimalkan kecelakaan dan gangguan kesehatan kerja.
                        </p>
                        <p class="text-center fs-4 fw-bold mb-4" data-aos="fade-up" data-aos-delay="200">
                            Dokumentasi, audit internal, dan pelaporan insiden dilakukan secara rutin agar implementasi K3 dapat dipertanggungjawabkan; kami juga berkolaborasi dengan pihak terkait untuk perbaikan berkelanjutan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <
     <!-- Regulations Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                 

                    

<!-- Regulations List -->
<div id="regulationsList">
    <div class="card card-modern mb-3 regulation-item" data-category="uu" data-aos="fade-up">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h5 class="card-title mb-2">UUD 1945 Pasal 27 Ayat (2)</h5>
                    <p class="card-text text-muted mb-0">Tiap-tiap warga negara berhak atas pekerjaan dan penghidupan yang layak bagi kemanusiaan</p>
                </div>
                <div class="col-md-4 text-end">
                    <a href="https://www.mkri.id/public/content/infoumum/regulation/pdf/UUD45%20ASLI.pdf" 
                       target="_blank" 
                       class="btn btn-primary">
                        <i class="fas fa-file-pdf me-2"></i>Lihat PDF
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-modern mb-3 regulation-item" data-category="uu" data-aos="fade-up">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h5 class="card-title mb-2">UU No 1 Tahun 1970</h5>
                    <p class="card-text text-muted mb-0">Tentang Keselamatan Kerja</p>
                </div>
                <div class="col-md-4 text-end">
                    <a href="https://jdih.esdm.go.id/common/dokumen-external/uu-01-1970.pdf" 
                       target="_blank" 
                       class="btn btn-primary">
                        <i class="fas fa-file-pdf me-2"></i>Lihat PDF
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-modern mb-3 regulation-item" data-category="uu" data-aos="fade-up">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h5 class="card-title mb-2">UU No 13 Tahun 2003</h5>
                    <p class="card-text text-muted mb-0">Tentang Ketenagakerjaan</p>
                </div>
                <div class="col-md-4 text-end">
                    <a href="https://kemenperin.go.id/kompetensi/UU_13_2003.pdf" 
                       target="_blank" 
                       class="btn btn-primary">
                        <i class="fas fa-file-pdf me-2"></i>Lihat PDF
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-modern mb-3 regulation-item" data-category="uu" data-aos="fade-up">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h5 class="card-title mb-2">UU No 6 Tahun 2023</h5>
                    <p class="card-text text-muted mb-0">Tentang Cipta Kerja</p>
                </div>
                <div class="col-md-4 text-end">
                    <a href="https://jdih.maritim.go.id/cfind/source/files/uu/2023/uu-nomor-6-tahun-2023.pdf" 
                       target="_blank" 
                       class="btn btn-primary">
                        <i class="fas fa-file-pdf me-2"></i>Lihat PDF
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-modern mb-3 regulation-item" data-category="uu" data-aos="fade-up">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h5 class="card-title mb-2">UU No 24 Tahun 2011</h5>
                    <p class="card-text text-muted mb-0">Tentang Badan Penyelenggara Jaminan Sosial</p>
                </div>
                <div class="col-md-4 text-end">
                    <a href="https://www.bpjsketenagakerjaan.go.id/assets/uploads/peraturan/09012015_101207_uu_24_11_bpjs.pdf" 
                       target="_blank" 
                       class="btn btn-primary">
                        <i class="fas fa-file-pdf me-2"></i>Lihat PDF
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Regulations -->
    <div class="card card-modern mb-3 regulation-item" data-category="pp" data-aos="fade-up" data-aos-delay="100">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h5 class="card-title mb-2">PP No 50 Tahun 2012</h5>
                    <p class="card-text text-muted mb-0">Tentang Penerapan Sistem Manajemen Keselamatan dan Kesehatan Kerja</p>
                </div>
                <div class="col-md-4 text-end">
                    <a href="https://temank3.kemnaker.go.id/public/media/files/PENERAPAN_SISTEM_MANAJEMEN_KESELAMATAN_DAN_KESEHATAN_KERJA.pdf" 
                       target="_blank" 
                       class="btn btn-primary">
                        <i class="fas fa-file-pdf me-2"></i>Lihat PDF
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-modern mb-3 regulation-item" data-category="permen" data-aos="fade-up" data-aos-delay="200">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h5 class="card-title mb-2">Permenaker No 5 Tahun 2018</h5>
                    <p class="card-text text-muted mb-0">Tentang Keselamatan dan Kesehatan Kerja Lingkungan Kerja</p>
                </div>
                <div class="col-md-4 text-end">
                    <a href="https://temank3.kemnaker.go.id/public/media/files/20200630082003.pdf" 
                       target="_blank" 
                       class="btn btn-primary">
                        <i class="fas fa-file-pdf me-2"></i>Lihat PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
                    <!-- PDF Modal -->
                    <div class="modal fade" id="pdfModal" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="pdfModalTitle">Document PDF</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <div id="pdfViewer">
                                        <div class="py-5">
                                            <i class="fas fa-file-pdf fa-5x text-danger mb-3"></i>
                                            <h5>Preview PDF</h5>
                                            <p class="text-muted" id="pdfFileName">Nama file akan ditampilkan di sini</p>
                                            <p class="text-muted">Fitur PDF viewer akan diintegrasikan dengan PDF.js</p>
                                            <button class="btn btn-primary mt-3" onclick="downloadPDF()">
                                                <i class="fas fa-download me-2"></i>Download PDF
                                            </button>
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
    <script>
        // Search functionality
        document.getElementById('searchRegulations').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const items = document.querySelectorAll('.regulation-item');
            
            items.forEach(item => {
                const title = item.querySelector('.card-title').textContent.toLowerCase();
                const description = item.querySelector('.card-text').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || description.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });

        // Filter functionality
        document.getElementById('filterCategory').addEventListener('change', function(e) {
            const category = e.target.value;
            const items = document.querySelectorAll('.regulation-item');
            
            items.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });

        // Enhanced PDF viewer function
        function viewPDF(title, url) {
            document.getElementById('pdfModalTitle').textContent = title;
            document.getElementById('pdfFileName').textContent = title;
            
            // In real implementation, you would use PDF.js here
            // For now, we'll show a modal with download option
            const pdfModal = new bootstrap.Modal(document.getElementById('pdfModal'));
            pdfModal.show();
            
            // Store current PDF info for download
            window.currentPDF = { title, url };
        }

        function downloadPDF() {
            if (window.currentPDF) {
                alert(`Mengunduh: ${window.currentPDF.title}`);
                // In real implementation: window.location.href = window.currentPDF.url;
            }
        }
    </script>
@endsection