<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K3 - I2N Resec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary: #667eea;
            --primary-dark: #764ba2;
            --secondary: #f093fb;
            --accent: #ff6b6b;
            --light: #f8f9fa;
            --dark: #2d3748;
            --success: #4fd1c7;
            --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --gradient-accent: linear-gradient(135deg, #ff6b6b 0%, #f093fb 100%);
            --gradient-secondary: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            color: var(--dark);
            background: var(--light);
        }

        /* Tambahan: background ikon seragam */
        .icon-circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.8rem;
            color: white;
            background: var(--gradient);
            box-shadow: 0 6px 15px rgba(102, 126, 234, 0.3);
            transition: all 0.3s ease;
        }

        .icon-circle:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 20px rgba(118, 75, 162, 0.4);
        }

        .navbar {
            background: white !important;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
            z-index: 2000;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--dark) !important;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Kode CSS untuk menimpa ikon mobil (jika masih muncul) */
        .navbar-brand::before {
            content: none !important;
        }

        .navbar-brand img {
            width: 55px;
            height: auto;
            object-fit: contain;
        }

        /* Navbar layout */
        .navbar-nav {
            display: flex;
            gap: 0.75rem;
            align-items: center;
            position: relative;
        }

        .nav-item {
            position: relative;
        }

        /* Nav link base */
        .nav-link {
            display: inline-block;
            font-weight: 500;
            margin: 0;
            padding: 8px 14px;
            border-radius: 8px;
            transition: color 0.18s ease;
            color: #666666 !important; /* Warna teks normal */
            background: transparent;
            z-index: 1;
            pointer-events: auto;
            -webkit-tap-highlight-color: transparent;
        }

        /* PERUBAHAN: Active: Menjadikan warna teks abu-abu normal tanpa kotak */
        .nav-link.active {
            color: #666666 !important; /* Diubah menjadi abu-abu normal */
            font-weight: 500; /* Bobot huruf normal */
            background: transparent;
            transform: none;
            box-shadow: none;
        }

        /* PERUBAHAN: Menghilangkan efek hover (transform, box-shadow, background) */
        .nav-link:hover {
            color: #444444 !important; /* Sedikit lebih gelap saat hover */
            background: transparent;
            transform: none;
            box-shadow: none;
            z-index: 1;
        }

        /* Active item should not lift on hover */
        .nav-link.active:hover {
            transform: none;
            box-shadow: none;
            color: #666666 !important; /* Pertahankan warna abu-abu normal saat active dan di-hover */
        }

        .hero-section {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.9) 0%, rgba(118, 75, 162, 0.9) 100%),
                        url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .section-title {
            position: relative;
            padding-bottom: 1rem;
            margin-bottom: 3rem;
            font-weight: 700;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--gradient);
            border-radius: 2px;
        }

        .card-modern {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            overflow: hidden;
            background: white;
        }

        .card-modern:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .card-icon { width: 80px; height: 80px; border-radius: 50%; background: var(--gradient); display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; color:white; font-size:2rem; }

        .btn-primary { background: var(--gradient); border: none; border-radius: 8px; padding: 12px 30px; font-weight: 600; transition: all 0.3s ease; color: white; }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(102,126,234,0.4); color: white; }

        .btn-accent { background: var(--gradient-accent); border: none; border-radius: 8px; padding: 12px 30px; font-weight: 600; color: white; transition: all 0.3s ease; }
        .btn-accent:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(255,107,107,0.4); color: white; }

        .footer { background: var(--dark); color: white; padding: 60px 0 30px; }

        .feature-box { text-align:center; padding:2rem; border-radius:16px; background:white; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; height:100%; }
        .feature-box:hover { transform: translateY(-5px); box-shadow:0 12px 40px rgba(0,0,0,0.15); }

        .law-card { border-left: 4px solid var(--primary); transition: all 0.3s ease; cursor: pointer; }
        .law-card:hover { border-left-color: var(--accent); transform: translateX(5px); }

        .dropdown-menu { border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.15); border-radius: 12px; padding:1rem; }
        .dropdown-item { border-radius: 8px; margin: 0.2rem 0; transition: all 0.3s ease; }
        .dropdown-item:hover { background: var(--light); transform: translateX(5px); }

        .floating-btn { position: fixed; bottom: 2rem; right: 2rem; width:60px; height:60px; border-radius:50%; background:var(--gradient-accent); color:white; border:none; box-shadow:0 8px 25px rgba(255,107,107,0.4); z-index:1000; transition: all 0.3s ease; }
        .floating-btn:hover { transform: scale(1.1); }

        .stats-number { font-size:3rem; font-weight:700; background:var(--gradient); -webkit-background-clip:text; -webkit-text-fill-color:transparent; line-height:1; }

        .k3-logo { width:80px; height:80px; background:white; border-radius:20px; display:flex; align-items:center; justify-content:center; margin:0 auto 2rem; box-shadow:0 15px 35px rgba(0,0,0,0.1); }
        .k3-logo img { width:50px; height:50px; object-fit:contain; }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <!-- Back button at far left with increased padding -->
        <div class="d-flex align-items-center">
            <a href="{{ route('home') }}" class="btn btn-outline-primary me-5">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
            <a class="navbar-brand" href="/">
                <img
                    src="{{ asset('assets/logo.png') }}"
                    alt="I2N Resec Logo"
                    onerror="this.style.display='none'"
                    style="width: 30px; height: auto;">
                I2N Resec
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('tentang') || (request()->is('/') && Str::contains(request()->getRequestUri(), '#tentang')) ? 'active' : '' }}" href="/#tentang">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('program-k3*') || (request()->is('/') && Str::contains(request()->getRequestUri(), '#program-k3')) ? 'active' : '' }}" href="/#program-k3">Program K3</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <button class="floating-btn" onclick="scrollToTop()">
        <i class="fas fa-arrow-up"></i>
    </button>

<footer class="footer" style="background: linear-gradient(135deg, rgba(120, 100, 200, 0.9) 0%, rgba(89, 0, 255, 0.9) 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <h4 class="mb-3 text-white">I2N Resec</h4>
                <p class="text-white">Perusahaan Jasa Service dan Retail Mobil yang berkomitmen pada Keselamatan dan Kesehatan Kerja dengan standar tertinggi.</p>
                <div class="mt-3">
                    <a href="#" class="text-white me-3"><i class="fab fa-whatsapp fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-facebook fa-lg"></i></a>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <h5 class="mb-3 text-white">Kontak</h5>
                <p class="text-white"><i class="fas fa-map-marker-alt me-2 text-white"></i> Malang, Jawa Timur</p>
                <p class="text-white"><i class="fas fa-phone me-2 text-white"></i> (0341) 123-4567</p>
                <p class="text-white"><i class="fas fa-envelope me-2 text-white"></i> info@i2nresec.com</p>
            </div>
            <div class="col-lg-4 mb-4">
                <h5 class="mb-3 text-white">Tim Perusahaan</h5>
                <div class="row">
                    <div class="col-6">
                        <p class="text-white mb-1">Izzatir Rofi'ah</p>
                        <p class="text-white mb-1">Nazwa Nurul Wijaya</p>
                    </div>
                    <div class="col-6">
                        <p class="text-white mb-1">M. Ircham Daffansyah</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4" style="background-color: rgba(255,255,255,0.3);">
        <div class="text-center">
            <p class="text-white mb-0">&copy; 2025 I2N Resec - Program K3. All rights reserved.</p>
        </div>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });

        // Scroll to top function
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Show/hide floating button
        window.addEventListener('scroll', function() {
            const floatingBtn = document.querySelector('.floating-btn');
            if (window.scrollY > 300) {
                floatingBtn.style.opacity = '1';
                floatingBtn.style.visibility = 'visible';
            } else {
                floatingBtn.style.opacity = '0';
                floatingBtn.style.visibility = 'hidden';
            }
        });

        // PDF viewer function
        function viewPDF(title, url) {
            alert(`Membuka PDF: ${title}\nURL: ${url}`);
        }
    </script>
</body>
</html>