@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, rgba(26,54,93,0.9) 0%, rgba(45,90,154,0.9) 100%), url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-4">Landasan Hukum K3</h1>
                    <p class="lead">Dasar hukum dan regulasi yang menjadi pedoman penerapan K3 di I2N Resec</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Regulations Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <!-- Search and Filter -->
                    <div class="card card-modern mb-4" data-aos="fade-up">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-0">
                                            <i class="fas fa-search text-muted"></i>
                                        </span>
                                        <input type="text" class="form-control border-0 bg-light" id="searchRegulations" placeholder="Cari regulasi...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select bg-light border-0" id="filterCategory">
                                        <option value="all">Semua Kategori</option>
                                        <option value="uu">Undang-Undang</option>
                                        <option value="pp">Peraturan Pemerintah</option>
                                        <option value="permen">Peraturan Menteri</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Regulations List -->
                    <div id="regulationsList">
                        @foreach($regulations as $regulation)
                        <div class="card card-modern mb-3 regulation-item" data-category="uu" data-aos="fade-up">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h5 class="card-title mb-2">{{ $regulation['title'] }}</h5>
                                        <p class="card-text text-muted mb-0">{{ $regulation['description'] }}</p>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <button class="btn btn-primary" onclick="viewPDF('{{ $regulation['title'] }}', '{{ $regulation['pdf_url'] }}')">
                                            <i class="fas fa-file-pdf me-2"></i>Lihat PDF
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- Additional Regulations -->
                        <div class="card card-modern mb-3 regulation-item" data-category="pp" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h5 class="card-title mb-2">PP No 50 Tahun 2012</h5>
                                        <p class="card-text text-muted mb-0">Tentang Penerapan Sistem Manajemen Keselamatan dan Kesehatan Kerja</p>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <button class="btn btn-primary" onclick="viewPDF('PP No 50 Tahun 2012', '#')">
                                            <i class="fas fa-file-pdf me-2"></i>Lihat PDF
                                        </button>
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
                                        <button class="btn btn-primary" onclick="viewPDF('Permenaker No 5 Tahun 2018', '#')">
                                            <i class="fas fa-file-pdf me-2"></i>Lihat PDF
                                        </button>
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