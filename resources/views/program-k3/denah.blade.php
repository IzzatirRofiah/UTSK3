@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="section-title">Denah Lokasi dan Tata Letak</h2>
        
        <div class="row">
            <div class="col-md-6">
                <div class="card card-k3 h-100">
                    <div class="card-body">
                        <h5 class="card-title">Zonasi Area Perusahaan</h5>
                        <div class="mb-3">
                            <h6><i class="fas fa-car me-2 text-primary"></i>Showroom</h6>
                            <p>Area display kendaraan baru dan bekas untuk pelanggan</p>
                        </div>
                        <div class="mb-3">
                            <h6><i class="fas fa-tools me-2 text-warning"></i>Bengkel Service</h6>
                            <p>Area perbaikan dan maintenance kendaraan dengan peralatan lengkap</p>
                        </div>
                        <div class="mb-3">
                            <h6><i class="fas fa-boxes me-2 text-info"></i>Gudang Sparepart</h6>
                            <p>Penyimpanan suku cadang dan komponen kendaraan</p>
                        </div>
                        <div class="mb-3">
                            <h6><i class="fas fa-users me-2 text-success"></i>Ruang Tunggu Pelanggan</h6>
                            <p>Area nyaman untuk pelanggan menunggu kendaraan diservis</p>
                        </div>
                        <div class="mb-3">
                            <h6><i class="fas fa-trash me-2 text-danger"></i>Area Limbah B3</h6>
                            <p>Penyimpanan khusus limbah berbahaya dan beracun</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-k3 h-100">
                    <div class="card-body">
                        <h5 class="card-title">Fasilitas Keselamatan</h5>
                        <div class="mb-3">
                            <h6><i class="fas fa-sign-out-alt me-2 text-danger"></i>Jalur Evakuasi</h6>
                            <p>Jalur jelas menuju titik kumpul darurat</p>
                        </div>
                        <div class="mb-3">
                            <h6><i class="fas fa-fire-extinguisher me-2 text-warning"></i>Lokasi APAR</h6>
                            <p>Alat pemadam api tersedia di titik strategis</p>
                        </div>
                        <div class="mb-3">
                            <h6><i class="fas fa-first-aid me-2 text-success"></i>Kotak P3K</h6>
                            <p>Tersedia di setiap area kerja dan ruang administrasi</p>
                        </div>
                        <div class="mb-3">
                            <h6><i class="fas fa-bell me-2 text-info"></i>Alarm Kebakaran</h6>
                            <p>Sistem peringatan dini di seluruh area</p>
                        </div>
                        <div class="mb-3">
                            <h6><i class="fas fa-map-marker-alt me-2 text-primary"></i>Titik Kumpul</h6>
                            <p>Area aman untuk berkumpul saat keadaan darurat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-k3 mt-4">
            <div class="card-body text-center">
                <h5 class="card-title">Denah Visual Perusahaan</h5>
                <p class="text-muted">[Gambar denah lokasi akan ditampilkan di sini]</p>
                <div class="bg-light py-5 rounded">
                    <i class="fas fa-map fa-3x text-muted"></i>
                    <p class="mt-3">Denah visual tata letak I2N Resec</p>
                </div>
                <p class="mt-3"><small>Anda dapat menambahkan gambar denah aktual perusahaan Anda di sini</small></p>
            </div>
        </div>
    </div>
</section>
@endsection