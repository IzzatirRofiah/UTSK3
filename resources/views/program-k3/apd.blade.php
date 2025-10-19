@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, rgba(26,54,93,0.9) 0%, rgba(45,90,154,0.9) 100%), url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-4">Alat Pelindung Diri (APD)</h1>
                    <p class="lead">Perlengkapan wajib untuk melindungi pekerja dari potensi bahaya di tempat kerja</p>
                </div>
            </div>
        </div>
    </section>

    <!-- APD Overview -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h2 class="section-title">Jenis APD di I2N Resec</h2>
                    <p class="lead">Setiap APD memiliki fungsi spesifik untuk melindungi bagian tubuh tertentu dari bahaya yang mungkin terjadi</p>
                </div>
            </div>

            <!-- APD Grid -->
            <div class="row g-4" id="apdGrid">
                @foreach($apdItems as $item)
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="card card-modern text-center h-100 apd-card" data-category="all">
                        <div class="card-body p-4">
                            <div class="card-icon">
                                <i class="fas fa-{{ $item['icon'] }}"></i>
                            </div>
                            <h5 class="card-title">{{ $item['name'] }}</h5>
                            <p class="card-text">{{ $item['desc'] }}</p>
                            <button class="btn btn-outline-primary btn-sm" onclick="showAPDDetail('{{ $item['name'] }}')">
                                Detail & Cara Pakai
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Filter Buttons -->
            <div class="text-center mt-5" data-aos="fade-up">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-primary active" onclick="filterAPD('all')">Semua</button>
                    <button type="button" class="btn btn-outline-primary" onclick="filterAPD('wajib')">Wajib</button>
                    <button type="button" class="btn btn-outline-primary" onclick="filterAPD('tambahan')">Tambahan</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Responsibility Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6 mb-4" data-aos="fade-right">
                            <div class="card card-modern h-100">
                                <div class="card-body p-4">
                                    <div class="card-icon" style="width: 60px; height: 60px; margin-bottom: 1rem;">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <h4 class="card-title">Tanggung Jawab Perusahaan</h4>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Menyediakan APD sesuai standar</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Memeriksa kelayakan APD berkala</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Mengganti APD yang rusak</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Memberikan pelatihan penggunaan</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Menyediakan APD gratis</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4" data-aos="fade-left">
                            <div class="card card-modern h-100">
                                <div class="card-body p-4">
                                    <div class="card-icon" style="width: 60px; height: 60px; margin-bottom: 1rem;">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <h4 class="card-title">Tanggung Jawab Pekerja</h4>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Menggunakan APD sesuai prosedur</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Tidak melepas APD selama kerja</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Menjaga APD dalam kondisi baik</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Melaporkan APD yang rusak</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Mengikuti pelatihan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- APD Detail Modal -->
    <div class="modal fade" id="apdDetailModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="apdModalTitle">Detail APD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="card-icon mx-auto mb-3" id="apdModalIcon">
                                <i class="fas fa-hard-hat"></i>
                            </div>
                            <h5 id="apdModalName">Helm Safety</h5>
                        </div>
                        <div class="col-md-8">
                            <h6>Fungsi & Manfaat:</h6>
                            <p id="apdModalFunction">Melindungi kepala dari benturan, benda jatuh, dan bahaya lainnya.</p>
                            
                            <h6 class="mt-3">Cara Penggunaan:</h6>
                            <ul id="apdModalUsage">
                                <li>Pastikan ukuran sesuai dengan kepala</li>
                                <li>Atur tali pengikat dengan nyaman</li>
                                <li>Periksa kondisi helm sebelum digunakan</li>
                            </ul>
                            
                            <h6 class="mt-3">Perawatan:</h6>
                            <p id="apdModalMaintenance">Bersihkan secara berkala dan simpan di tempat yang kering.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // APD Data
        const apdData = {
            'Helm Safety': {
                icon: 'hard-hat',
                function: 'Melindungi kepala dari benturan, benda jatuh, dan bahaya mekanis lainnya di area bengkel.',
                usage: [
                    'Pastikan ukuran helm sesuai dengan kepala pengguna',
                    'Atur tali pengikat dengan nyaman dan pas',
                    'Periksa kondisi helm sebelum digunakan',
                    'Ganti helm yang sudah retak atau rusak'
                ],
                maintenance: 'Bersihkan secara berkala dengan air sabun, hindari bahan kimia keras, simpan di tempat kering dan terhindar dari sinar matahari langsung.'
            },
            'Kacamata Safety': {
                icon: 'glasses',
                function: 'Melindungi mata dari percikan cairan kimia, debu, partikel logam, dan radiasi.',
                usage: [
                    'Pastikan kacamata pas dan nyaman di wajah',
                    'Periksa lensa tidak tergores atau rusak',
                    'Gunakan untuk semua pekerjaan yang berisiko',
                    'Bersihkan lensa secara teratur'
                ],
                maintenance: 'Bersihkan dengan air dan sabun lembut, keringkan dengan kain lembut, simpan dalam case yang aman.'
            },
            'Sarung Tangan': {
                icon: 'hand-paper',
                function: 'Melindungi tangan dari benda tajam, panas, bahan kimia, dan gesekan.',
                usage: [
                    'Pilih jenis sarung tangan sesuai pekerjaan',
                    'Pastikan ukuran pas dan tidak terlalu longgar',
                    'Periksa kondisi sebelum digunakan',
                    'Ganti jika terdapat kerusakan atau sobek'
                ],
                maintenance: 'Cuci bersih setelah digunakan, keringkan secara alami, simpan di tempat kering.'
            }
        };

        function showAPDDetail(apdName) {
            const data = apdData[apdName];
            if (data) {
                document.getElementById('apdModalTitle').textContent = `Detail ${apdName}`;
                document.getElementById('apdModalName').textContent = apdName;
                document.getElementById('apdModalIcon').innerHTML = `<i class="fas fa-${data.icon}"></i>`;
                document.getElementById('apdModalFunction').textContent = data.function;
                
                const usageList = document.getElementById('apdModalUsage');
                usageList.innerHTML = '';
                data.usage.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = item;
                    usageList.appendChild(li);
                });
                
                document.getElementById('apdModalMaintenance').textContent = data.maintenance;
                
                const modal = new bootstrap.Modal(document.getElementById('apdDetailModal'));
                modal.show();
            }
        }

        function filterAPD(category) {
            const cards = document.querySelectorAll('.apd-card');
            const buttons = document.querySelectorAll('.btn-group .btn');
            
            // Update active button
            buttons.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            
            // Filter cards
            cards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.parentElement.style.display = 'block';
                } else {
                    card.parentElement.style.display = 'none';
                }
            });
        }
    </script>

    <style>
        .apd-card {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .apd-card:hover {
            transform: translateY(-5px);
        }
        
        .btn-group .btn.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }
    </style>
@endsection