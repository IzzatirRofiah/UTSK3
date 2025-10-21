@extends('layouts2.app')

@section('content')
    <!-- Hero Section -->
   <section class="hero-section" style="background: linear-gradient(135deg, rgba(120, 100, 200, 0.9) 0%, rgba(160, 180, 240, 0.9) 100%), url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-4 text-white">Alat Pelindung Diri (APD)</h1>
                    <p class="lead text-light">
                        Perlengkapan wajib untuk melindungi pekerja dari potensi bahaya di tempat kerja
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- APD Grid -->
    <section class="py-5" style="padding: 120px 0;">
        <div class="container">
            <div class="row g-4 justify-content-center" id="apdGrid">
                @foreach($apdItems as $item)
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="card card-modern text-center h-100 apd-card" data-category="all">
                        <div class="card-body p-4">
                            <div class="card-icon mb-3">
                                <i class="fas fa-{{ $item['icon'] }} fa-3x text-primary"></i>
                            </div>
                            <h5 class="card-title">{{ $item['name'] }}</h5>
                            <p class="card-text">{{ $item['desc'] }}</p>
                            <button class="btn btn-outline-primary btn-sm"
                                onclick="showAPDDetail('{{ $item['name'] }}')">
                                Detail & Cara Pakai
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Responsibility Section -->
    <section class="py-5 bg-light" style="padding: 120px 0;">
        <div class="container text-center">
            <!-- Judul di tengah -->
            <h2 class="fw-bold mb-5 text-primary">Tanggung Jawab Pekerja</h2>
            <!-- Card di tengah -->
            <div class="col-lg-8 mx-auto">
                <div class="card card-modern text-center shadow-sm" data-aos="fade-up">
                    <div class="card-body p-5">
                        <div class="card-icon mb-4" style="width: 60px; height: 60px; margin: 0 auto;">
                            <i class="fas fa-user fa-2x text-primary"></i>
                        </div>
                        <ul class="list-unstyled mt-3 text-start d-inline-block text-left">
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
    </section>

    <!-- APD Detail Modal -->
    <div class="modal fade" id="apdDetailModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content text-center p-4" style="max-width: 800px; margin: auto;">
                <div class="modal-header justify-content-center border-0">
                    <h5 class="modal-title fw-bold" id="apdModalTitle">Detail APD</h5>
                    <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body px-5">
                    <div class="card-icon mx-auto mb-3" id="apdModalIcon" style="font-size: 3rem; color: #2d5a9a;">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h5 id="apdModalName" class="mb-3 fw-semibold">Helm Safety</h5>
                    <div class="text-start">
                        <h6>Fungsi & Manfaat:</h6>
                        <p id="apdModalFunction">Melindungi kepala dari benturan, benda jatuh, dan bahaya lainnya.</p>
                        
                        <h6 class="mt-3">Cara Penggunaan:</h6>
                        <ul id="apdModalUsage"></ul>
                        
                        <h6 class="mt-3">Perawatan:</h6>
                        <p id="apdModalMaintenance"></p>
                    </div>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script>
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
            },
            'Sepatu Safety': {
                icon: 'shoe-prints',
                function: 'Melindungi kaki dari benda berat, tajam, lantai licin, dan tumpahan bahan kimia.',
                usage: [
                    'Pastikan ukuran sepatu sesuai dan nyaman',
                    'Ikat tali sepatu dengan kuat dan rapi',
                    'Periksa sol sepatu tidak aus atau rusak',
                    'Gunakan untuk semua aktivitas di bengkel'
                ],
                maintenance: 'Bersihkan dengan sikat dan air sabun, keringkan di tempat teduh, beri semir khusus sepatu safety.'
            },
            'Rompi Reflektif': {
                icon: 'vest',
                function: 'Meningkatkan visibilitas pekerja di area bengkel yang gelap atau ramai kendaraan.',
                usage: [
                    'Kenakan rompi di atas pakaian kerja',
                    'Pastikan bagian reflektif tidak tertutup',
                    'Tutup resleting atau kancing dengan rapat',
                    'Gunakan terutama di area parkir dan jalan keluar-masuk'
                ],
                maintenance: 'Cuci dengan air dingin dan deterjen lembut, jangan gunakan pemutih, keringkan di tempat teduh.'
            },
            'Masker/Respirator': {
                icon: 'lungs',
                function: 'Melindungi sistem pernapasan dari debu, asap, uap kimia, dan partikel berbahaya.',
                usage: [
                    'Pilih jenis masker sesuai tingkat paparan',
                    'Pastikan masker menutup hidung dan mulut dengan rapat',
                    'Ganti filter secara berkala sesuai petunjuk',
                    'Lakukan fit test untuk memastikan kebocoran'
                ],
                maintenance: 'Ganti masker sekali pakai setelah digunakan, bersihkan masker reusable dengan alkohol, simpan dalam wadah tertutup.'
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

                new bootstrap.Modal(document.getElementById('apdDetailModal')).show();
            }
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
        .hero-section {
            color: #fff;
        }
        .apd-card .card-icon i {
            color: #2d5a9a;
        }
        .modal-content {
            border-radius: 1rem;
        }
        .btn-group .btn.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }
        /* === Ikon APD Seragam (lingkaran gradasi seperti contoh) === */
        .apd-card .card-icon {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: var(--gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            box-shadow: 0 6px 15px rgba(102, 126, 234, 0.3);
            transition: all 0.3s ease;
        }

        .apd-card .card-icon i {
            color: white !important;
            font-size: 2rem;
        }

        .apd-card .card-icon:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(118, 75, 162, 0.4);
        }
    </style>
@endsection