<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>SMP Negeri 1 Buayan - Galeri Foto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts - Inria Serif -->
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inria Serif', serif; }
        .gradient-blue-vertical { background: linear-gradient(180deg, #0090EA, #005184); }

        /* ========== DROPDOWN (chevron seperti home) ========== */
        .dropdown { position: relative; display: inline-block; }
        .dropbtn {
            background: transparent; color: #333434; padding: 8px 12px;
            font-size: 14px; font-weight: bold; border: none; cursor: pointer;
            font-family: 'Inria Serif', serif; border-radius: 6px; transition: all 0.3s ease;
        }
        .dropbtn:hover { color: #0090EA; background-color: #f0f0f0; }
        .dropdown-content {
            display: none; position: absolute; background-color: white;
            min-width: 240px; box-shadow: 0px 8px 20px rgba(0,0,0,0.15);
            z-index: 1000; border-radius: 10px; top: 100%; left: 0;
            margin-top: 5px; overflow: hidden; border: 1px solid #e5e5e5;
        }
        .dropdown-content a {
            color: #333434; padding: 12px 18px; text-decoration: none;
            display: block; font-size: 13px; font-weight: 500;
            border-bottom: 1px solid #f0f0f0; transition: all 0.2s ease;
            font-family: 'Inria Serif', serif;
        }
        .dropdown-content a:last-child { border-bottom: none; }
        .dropdown-content a:hover { background-color: #0090EA; color: white; padding-left: 24px; }
        .dropdown.show .dropdown-content { display: block; }

        /* ========== NAV ========== */
        .mobile-menu-btn {
            display: none; background: none; border: none; font-size: 24px;
            cursor: pointer; color: #333434; padding: 8px; z-index: 1001; position: relative;
        }
        .mobile-menu-btn:hover { color: #0090EA; }
        .menu-overlay {
            display: none; position: fixed; top: 0; left: 0;
            width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 998;
        }
        .menu-overlay.show { display: block; }
        .desktop-nav {
            display: flex; align-items: center; justify-content: space-between;
            width: 100%; padding: 8px 20px; flex-wrap: wrap;
        }
        .logo-area { display: flex; align-items: center; }
        .nav-menu-desktop { display: flex; align-items: center; gap: 5px; flex-wrap: wrap; }
        .nav-menu-desktop a {
            text-decoration: none; white-space: nowrap; font-weight: bold;
            font-size: 14px; padding: 8px 12px; border-radius: 6px; transition: all 0.3s ease;
            font-family: 'Inria Serif', serif;
        }
        .nav-menu-desktop a:hover { color: #0090EA; background-color: #f0f0f0; }

        /* ========== MOBILE SIDEBAR ========== */
        .nav-menu-mobile {
            position: fixed; top: 0; left: -300px; width: 280px; height: 100%;
            background: white; flex-direction: column; align-items: flex-start !important;
            padding: 70px 0 20px 0 !important; margin: 0 !important;
            box-shadow: 2px 0 15px rgba(0,0,0,0.15); z-index: 999;
            transition: left 0.3s ease; gap: 0 !important; overflow-y: auto;
        }
        .nav-menu-mobile.show { left: 0; }
        .nav-menu-mobile a, .nav-menu-mobile .mobile-dropdown > .mobile-dropbtn {
            width: 100%; text-align: left; padding: 14px 25px !important;
            margin: 0 !important; font-size: 15px !important; font-weight: 500 !important;
            color: #333434; text-decoration: none; display: block;
            border-bottom: 1px solid #f0f0f0; transition: all 0.3s ease;
            cursor: pointer; background: none; border: none;
            font-family: 'Inria Serif', serif;
        }
        .nav-menu-mobile a:hover, .nav-menu-mobile .mobile-dropdown > .mobile-dropbtn:hover {
            background-color: #f5f5f5; color: #0090EA; padding-left: 30px !important;
        }
        .mobile-dropdown-content { display: none; background-color: #f9f9f9; }
        .mobile-dropdown-content a {
            padding: 12px 25px 12px 40px !important; font-size: 13px !important;
            border-bottom: 1px solid #e5e5e5; background-color: #f9f9f9;
            font-family: 'Inria Serif', serif;
        }
        .mobile-dropdown-content a:hover { background-color: #e8e8e8; color: #0090EA; padding-left: 45px !important; }
        .mobile-dropdown.active .mobile-dropdown-content { display: block; }
        .mobile-dropdown > .mobile-dropbtn { display: flex; justify-content: space-between; align-items: center; }
        .mobile-dropdown > .mobile-dropbtn:after { content: " ▼"; font-size: 10px; }
        .mobile-dropdown.active > .mobile-dropbtn:after { content: " ▲"; }
        .close-menu-btn {
            position: absolute; top: 15px; right: 20px; background: none;
            border: none; font-size: 22px; cursor: pointer; color: #666; padding: 8px; z-index: 1000;
            font-family: 'Inria Serif', serif;
        }
        .close-menu-btn:hover { color: #0090EA; }
        .menu-title {
            font-size: 18px; font-weight: bold; color: #0090EA;
            padding: 0 25px 15px 25px; margin-bottom: 10px;
            border-bottom: 2px solid #0090EA; display: inline-block; width: auto;
            font-family: 'Inria Serif', serif;
        }

        @media (max-width: 768px) {
            .mobile-menu-btn { display: block; order: -1; margin-left: 10px; }
            .desktop-nav { justify-content: space-between; position: relative; padding: 8px 15px; }
            .logo-area { flex: 1; justify-content: center; }
            .nav-menu-desktop { display: none !important; }
            .footer-content { flex-direction: column; gap: 20px; margin-left: 20px !important; margin-right: 20px !important; }
            .footer-content .flex-1 { display: none; }
            .photo-grid { grid-template-columns: repeat(2, 1fr) !important; }
        }
        @media (min-width: 769px) { .nav-menu-mobile { display: none !important; } }

        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .fade-in { animation: fadeIn 0.5s ease forwards; }

        /* ========== PHOTO GRID ========== */
        .photo-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }

        .photo-item {
            border-radius: 14px;
            overflow: hidden;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }
        .photo-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 28px rgba(0,144,234,0.18);
        }
        .photo-item img {
            width: 100%;
            aspect-ratio: 4/3;
            object-fit: cover;
            display: block;
        }
        .photo-item .photo-overlay {
            position: absolute; inset: 0;
            background: rgba(0,144,234,0);
            display: flex; align-items: center; justify-content: center;
            transition: background 0.3s ease;
        }
        .photo-item:hover .photo-overlay {
            background: rgba(0,144,234,0.22);
        }
        .photo-item .photo-overlay i {
            color: white; font-size: 2rem;
            opacity: 0; transition: opacity 0.3s ease;
        }
        .photo-item:hover .photo-overlay i { opacity: 1; }

        /* Placeholder foto kosong */
        .photo-placeholder {
            width: 100%; aspect-ratio: 4/3;
            background: linear-gradient(135deg, #e0f2fe, #bae6fd);
            display: flex; flex-direction: column; align-items: center; justify-content: center;
            gap: 8px; color: #0369a1; font-size: 12px;
            font-family: 'Inria Serif', serif;
        }
        .photo-placeholder i { font-size: 2rem; opacity: 0.5; }

        /* Caption bawah foto */
        .photo-caption {
            padding: 8px 12px 10px;
            font-size: 12px;
            color: #636566;
            text-align: center;
            border-top: 1px solid #f0f0f0;
            font-family: 'Inria Serif', serif;
        }

        /* ========== LIGHTBOX ========== */
        .lightbox {
            display: none; position: fixed; inset: 0;
            background: rgba(0,0,0,0.92); z-index: 3000;
            align-items: center; justify-content: center;
            flex-direction: column;
        }
        .lightbox.show { display: flex; }
        .lightbox-img {
            max-width: 90vw; max-height: 80vh;
            border-radius: 12px; object-fit: contain;
            box-shadow: 0 0 60px rgba(0,0,0,0.5);
        }
        .lightbox-caption {
            color: white; font-size: 14px; margin-top: 14px;
            text-align: center; max-width: 600px; padding: 0 20px;
            font-family: 'Inria Serif', serif;
        }
        .lightbox-close {
            position: absolute; top: 20px; right: 28px;
            background: rgba(255,255,255,0.15); border: none;
            color: white; font-size: 24px; cursor: pointer;
            width: 44px; height: 44px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            transition: background 0.2s;
        }
        .lightbox-close:hover { background: rgba(255,255,255,0.3); }
        .lightbox-nav {
            position: absolute; top: 50%; transform: translateY(-50%);
            background: rgba(255,255,255,0.15); border: none;
            color: white; font-size: 22px; cursor: pointer;
            width: 48px; height: 48px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            transition: background 0.2s;
        }
        .lightbox-nav:hover { background: rgba(255,255,255,0.3); }
        .lightbox-prev { left: 20px; }
        .lightbox-next { right: 20px; }
        .lightbox-counter {
            position: absolute; bottom: 20px;
            color: rgba(255,255,255,0.7); font-size: 13px;
            font-family: 'Inria Serif', serif;
        }
    </style>
</head>
<body>
    <?php
    // ============================================
    // DATA FOTO PER KATEGORI
    // Untuk menambah foto: isi array 'fotos' dengan path gambar & keterangan
    // ============================================
    $kategoriData = [
        'prestasi' => [
            'label' => 'PRESTASI',
            'icon'  => '🏆',
            'fotos' => [
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/4b68152a5d5ed5a105e102ae7d11b30a.jpeg', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/f5e1aebcd1316b60426d77af749de763.jpeg', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/fd624b98600f1358632304411fb8a96d.jpeg', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/2b96ad8b7ff09bee1655fd13c8d03185.jpeg', 'keterangan' => ''],
            ],
        ],
        'guru-karyawan' => [
            'label' => 'GURU/KARYAWAN',
            'icon'  => '👨‍🏫',
            'fotos' => [
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/93c85d783c6d9a3fb29719506df85da5.png', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/501fd0d0501a266c6340deb2645d2377.png', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/015fb258c7dd03df2e0282f08a7da4a9.png', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/b7559170daf6dec941388ea0b8a1b2c1.png', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/3cbdc83e2c08267da9a3817bdfc87162.png', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/db10d5884df5ad8e1d11119f72690fab.png', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/a6abde6793be801906c1b7b7d5dade0f.png', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/d130f251b5a34eccc8b7f4fa5496d23d.png', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/d5f46c9cacc7adc761f99cbf413eedfb.png', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/719c5075ffb2c3b674569353936fda2a.png', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/99df530e0e2b6c12fdaf20b4f093f2d8.png', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/1756a04ac8ca45a9e075ea46841ee726.png', 'keterangan' => ''],
            ],
        ],
        'sarpras' => [
            'label' => 'SARPRAS',
            'icon'  => '🏫',
            'fotos' => [
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/ee3fe693c3247e52a283cf06e905454d.jpg', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/e3941ffbcc1258e1e8f9f29370c79068.jpg', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/9c903f7827d49136fc4b6e477d3b2f0c.jpg', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/e8c24b7ac87eb25ca08099a6a56f1464.JPG', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/a9e00b87773fd867db7fc19226d9fccb.JPG', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/43bbeb3e79d27b554ba96324204dd148.jpg', 'keterangan' => ''],
            ],
        ],
        'rapat' => [
            'label' => 'RAPAT',
            'icon'  => '🤝',
            'fotos' => [
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/b0abb7bff0b33be6b9dc7caa98bb19d6.JPG', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/32cf6e6397db5fffd8970e3f52940b5b.JPG', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/6a4e79a1bb40ed5a183c49c031dadbb1.JPG', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/a9ad359ed8d12a307387de7f0cbfc1b9.JPG', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/e6feab6e9086c3dbed82767d88d1e0d8.JPG', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/40ed1725a38bf9978c51f71ad3cd1257.JPG', 'keterangan' => ''],
            ],
        ],
        'umum' => [
            'label' => 'UMUM',
            'icon'  => '📷',
            'fotos' => [
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/fa89ec5bd56ade68abfe2745a67be0df.png', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/c5f6062fdf592dfad5bdb7804d5692c9.png', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/95ee558d46003669271d989671d3430e.png', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/34b54d09cc8a0320dc6fbb26a1b44045.jpeg', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/439c1c6971e555206b4a77b3dfb1b464.jpeg', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/77c5e056b4dc09444e7909bfe94a7227.jpeg', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/fa2f94ad78aa4b87594b575aa37e59f7.jpg', 'keterangan' => ''],
            ],
        ],
        'osis' => [
            'label' => 'OSIS',
            'icon'  => '⭐',
            'fotos' => [
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/4c686f745925da67a36d0c3f6a6040c6.png', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/d60565a0bd9355b4c4f499115f93a68c.JPG', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/c0bc6fe3de3aeabbdbfdcd99d1a02207.JPG', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/82d9bb984998a76c2dac345c560695fe.JPG', 'keterangan' => ''],
                ['src' => 'https://www.smpn1buayan.sch.id/assets/img/foto/317b5b18b49f21e74c5e288d38b74c29.JPG', 'keterangan' => ''],
            ],
        ],
        'mpls' => [
            'label' => 'MPLS',
            'icon'  => '🎓',
            'fotos' => [],
        ],
        'ekstrakurikuler' => [
            'label' => 'EKSTRAKURIKULER',
            'icon'  => '⚽',
            'fotos' => [],
        ],
    ];

    // Ambil kategori dari GET
    $slug = isset($_GET['kategori']) ? $_GET['kategori'] : 'prestasi';
    if (!isset($kategoriData[$slug])) {
        header('Location: galeri-foto.php');
        exit;
    }
    $current = $kategoriData[$slug];
    $fotos   = $current['fotos'];
    ?>

    <div class="flex flex-col bg-white">
        <div class="flex flex-col items-start self-stretch bg-[#EAF1F4]">
            <div class="self-stretch">

                <!-- ============ NAVBAR (sama persis dengan halaman home dan lainnya) ============ -->
                <div class="bg-white shadow-sm">
                    <div class="desktop-nav">
                        <div class="logo-area">
                            <img src="https://figma-alpha-api.s3.us-west-2.amazonaws.com/images/8099c8a7-96f3-4300-a78c-734c3122cf26"
                                 class="w-10 h-10 object-contain" alt="School Logo">
                            <div class="flex flex-col shrink-0 items-start ml-2">
                                <span class="text-black text-sm font-bold" style="font-family: 'Inria Serif', serif;">SMP Negeri 1</span>
                                <span class="text-black text-xs" style="font-family: 'Inria Serif', serif;">Buayan</span>
                            </div>
                        </div>
                        
                        <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        
                        <!-- Desktop Navigation Menu dengan Dropdown -->
                        <div class="nav-menu-desktop">
                            <a href="home.php" style="font-family: 'Inria Serif', serif;">Home</a>
                            
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event, this)">
                                    Berita <i class="fa-solid fa-chevron-down text-[9px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="berita.php">📰 Berita</a>
                                    <a href="pengumuman.php">📢 Pengumuman</a>
                                    <a href="agenda.php">📅 Agenda</a>
                                </div>
                            </div>
                            
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event, this)">
                                    Profil <i class="fa-solid fa-chevron-down text-[9px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="profil.php">🏫 Profil Sekolah</a>
                                    <a href="sejarah.php">📜 Sejarah</a>
                                    <a href="visi-misi.php">🎯 Visi & Misi</a>
                                    <a href="struktur-organisasi.php">📊 Struktur Organisasi</a>
                                    <a href="tenaga-edukatif.php">👨‍🏫 Tenaga Edukatif</a>
                                    <a href="tenaga-non-edukatif.php">👩‍💼 Tenaga Non Edukatif</a>
                                    <a href="sarana-prasarana.php">🏢 Sarana Prasarana</a>
                                </div>
                            </div>
                            
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event, this)">
                                    Pendidikan <i class="fa-solid fa-chevron-down text-[9px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="struktur-kurikulum.php">📖 Struktur Kurikulum</a>
                                    <a href="kalender-akademik.php">📆 Kalender Akademik</a>
                                    <a href="rekap-ujian.php">📊 Rekap Ujian Sekolah</a>
                                    <a href="ekstrakurikuler.php">⚽ Ekstrakurikuler</a>
                                </div>
                            </div>
                            
                            <a href="peserta-didik.php" style="font-family: 'Inria Serif', serif;">Peserta Didik</a>
                            
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event, this)">
                                    Prestasi <i class="fa-solid fa-chevron-down text-[9px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="prestasi-sekolah.php">🏆 Prestasi Sekolah</a>
                                    <a href="prestasi-siswa.php">⭐ Prestasi Siswa</a>
                                    <a href="prestasi-guru.php">👨‍🏫 Prestasi Guru</a>
                                </div>
                            </div>
                            
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event, this)">
                                    Alumni <i class="fa-solid fa-chevron-down text-[9px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="data-alumni.php">📋 Data Alumni</a>
                                    <a href="penelusuran-alumni.php">🔍 Penelusuran Alumni</a>
                                </div>
                            </div>
                            
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event, this)" style="color:#0090EA;">
                                    Galeri <i class="fa-solid fa-chevron-down text-[9px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="galeri-foto.php">📸 Foto</a>
                                    <a href="galeri-video.php">🎥 Video</a>
                                </div>
                            </div>
                            
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event, this)">
                                    SIM <i class="fa-solid fa-chevron-down text-[9px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="https://siak.smpn1buayan.sch.id/" target="_blank">💻 SIAK</a>
                                </div>
                            </div>
                            <a href="download.php" style="color:#333434; font-family: 'Inria Serif', serif;">Download</a>
                        </div>
                    </div>
                </div>

                <!-- Mobile Sidebar -->
                <div class="nav-menu-mobile" id="navMenuMobile">
                    <button class="close-menu-btn" onclick="closeMobileMenu()"><i class="fa-solid fa-times"></i></button>
                    <div style="padding:0 25px;"><div class="menu-title">Menu Navigasi</div></div>
                    <a href="home.php">🏠 Home</a>
                    <div class="mobile-dropdown">
                        <button class="mobile-dropbtn" onclick="toggleMobileDropdown(this)">📰 Berita</button>
                        <div class="mobile-dropdown-content">
                            <a href="berita.php">Berita</a><a href="pengumuman.php">Pengumuman</a><a href="agenda.php">Agenda</a>
                        </div>
                    </div>
                    <div class="mobile-dropdown">
                        <button class="mobile-dropbtn" onclick="toggleMobileDropdown(this)">🏫 Profil</button>
                        <div class="mobile-dropdown-content">
                            <a href="profil.php">Profil Sekolah</a><a href="sejarah.php">Sejarah</a>
                            <a href="visi-misi.php">Visi & Misi</a><a href="struktur-organisasi.php">Struktur Organisasi</a>
                            <a href="tenaga-edukatif.php">Tenaga Edukatif</a><a href="tenaga-non-edukatif.php">Tenaga Non Edukatif</a>
                            <a href="sarana-prasarana.php">Sarana Prasarana</a>
                        </div>
                    </div>
                    <div class="mobile-dropdown">
                        <button class="mobile-dropbtn" onclick="toggleMobileDropdown(this)">📚 Pendidikan</button>
                        <div class="mobile-dropdown-content">
                            <a href="struktur-kurikulum.php">Struktur Kurikulum</a><a href="kalender-akademik.php">Kalender Akademik</a>
                            <a href="rekap-ujian.php">Rekap Ujian Sekolah</a><a href="ekstrakurikuler.php">Ekstrakurikuler</a>
                        </div>
                    </div>
                    <a href="peserta-didik.php">👨‍🎓 Peserta Didik</a>
                    <div class="mobile-dropdown">
                        <button class="mobile-dropbtn" onclick="toggleMobileDropdown(this)">🏆 Prestasi</button>
                        <div class="mobile-dropdown-content">
                            <a href="prestasi-sekolah.php">Prestasi Sekolah</a>
                            <a href="prestasi-siswa.php">Prestasi Siswa</a>
                            <a href="prestasi-guru.php">Prestasi Guru</a>
                        </div>
                    </div>
                    <div class="mobile-dropdown">
                        <button class="mobile-dropbtn" onclick="toggleMobileDropdown(this)">👥 Alumni</button>
                        <div class="mobile-dropdown-content">
                            <a href="data-alumni.php">Data Alumni</a><a href="penelusuran-alumni.php">Penelusuran Alumni</a>
                        </div>
                    </div>
                    <div class="mobile-dropdown active">
                        <button class="mobile-dropbtn" onclick="toggleMobileDropdown(this)" style="color:#0090EA;font-weight:700;">🖼️ Galeri</button>
                        <div class="mobile-dropdown-content">
                            <a href="galeri-foto.php" style="color:#0090EA;font-weight:600;">Foto</a>
                            <a href="galeri-video.php">Video</a>
                        </div>
                    </div>
                    <div class="mobile-dropdown">
                        <button class="mobile-dropbtn" onclick="toggleMobileDropdown(this)">💻 SIM</button>
                        <div class="mobile-dropdown-content"><a href="https://siak.smpn1buayan.sch.id/" target="_blank">SIAK</a></div>
                    </div>
                    <a href="download.php" class="block px-6 py-3 text-sm font-medium cursor-pointer hover:text-blue-600 transition border-b border-gray-100" style="font-family: 'Inria Serif', serif;">⬇️ Download</a>
                </div>
                <div class="menu-overlay" id="menuOverlay" onclick="closeMobileMenu()"></div>

                <!-- ============ HALAMAN DETAIL GALERI ============ -->
                <div class="bg-[#EAF1F4] pb-14">

                    <!-- Breadcrumb + Judul -->
                    <div class="max-w-5xl mx-auto px-6 pt-8">
                        <a href="galeri-foto.php"
                           class="inline-flex items-center gap-2 text-[#636566] text-sm hover:text-[#0090EA] transition mb-4" style="font-family: 'Inria Serif', serif;">
                            <i class="fa-solid fa-arrow-left"></i>
                            <span>Kembali ke Galeri Foto</span>
                        </a>
                    </div>

                    <!-- Judul ukuran lebih kecil (text-2xl md:text-3xl lg:text-4xl) -->
                    <div class="text-center pb-4">
                        <h1 class="text-[#333434] text-2xl md:text-3xl lg:text-4xl font-bold tracking-wider" style="font-family: 'Inria Serif', serif;">
                            <?= htmlspecialchars($current['label']) ?>
                        </h1>
                    </div>
                    <div class="flex justify-center px-4 mb-10">
                        <div class="w-[90%] h-px bg-[#636566]"></div>
                    </div>

                    <!-- Grid Foto -->
                    <div class="max-w-5xl mx-auto px-6">
                        <?php if (empty($fotos)): ?>
                        <div class="text-center py-20 text-[#9ca3af]" style="font-family: 'Inria Serif', serif;">
                            <i class="fa-solid fa-image text-5xl mb-4 block opacity-30"></i>
                            <p class="text-lg">Belum ada foto dalam kategori ini.</p>
                        </div>
                        <?php else: ?>
                        <div class="photo-grid">
                            <?php foreach ($fotos as $i => $foto): ?>
                            <div class="photo-item" onclick="openLightbox(<?= $i ?>)">
                                <?php if (!empty($foto['src'])): ?>
                                    <img src="<?= htmlspecialchars($foto['src']) ?>"
                                         alt="<?= htmlspecialchars($foto['keterangan']) ?>">
                                    <div class="photo-overlay">
                                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                                    </div>
                                <?php else: ?>
                                    <div class="photo-placeholder">
                                        <i class="fa-solid fa-image"></i>
                                        <span>Foto <?= $i + 1 ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($foto['keterangan'])): ?>
                                    <div class="photo-caption"><?= htmlspecialchars($foto['keterangan']) ?></div>
                                <?php endif; ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>

                </div>

                <!-- ============ FOOTER ============ -->
                <div class="self-stretch py-6 gradient-blue-vertical">
                    <div class="flex items-start self-stretch mb-8 ml-4 md:ml-8 mr-4 md:mr-8 footer-content flex-wrap">
                        <div class="flex flex-col shrink-0 items-start gap-2 w-full md:w-auto">
                            <div class="flex items-center gap-2">
                                <img src="https://figma-alpha-api.s3.us-west-2.amazonaws.com/images/08cafdde-6002-4e6b-b9c5-eb9071ba285b"
                                     class="w-8 h-10 object-fill" alt="School Logo">
                                <div>
                                    <span class="text-white text-base font-bold" style="font-family: 'Inria Serif', serif;">SMP Negeri 1</span>
                                    <span class="text-white text-xs block" style="font-family: 'Inria Serif', serif;">Buayan</span>
                                </div>
                            </div>
                            <span class="text-white text-xs font-bold w-full md:w-80 leading-relaxed" style="font-family: 'Inria Serif', serif;">
                                Sekolah Menengah Pertama Negeri 1 Buayan - Unggul dalam Mutu, Terampil, Santun dalam Perilaku, Berwawasan Lingkungan, Berdasarkan Iman dan Taqwa
                            </span>
                        </div>
                        <div class="flex-1 hidden md:block"></div>
                        <div class="flex flex-col shrink-0 items-start my-1 gap-3 w-full md:w-auto">
                            <span class="text-white text-sm font-bold ml-0 md:ml-8" style="font-family: 'Inria Serif', serif;">Kontak</span>
                            <div class="flex flex-col items-start gap-2">
                                <div class="flex items-center gap-1 flex-wrap">
                                    <span class="text-white text-xs" style="font-family: 'Inria Serif', serif;">📍</span>
                                    <span class="text-white text-xs font-bold" style="font-family: 'Inria Serif', serif;">Jl. Karangbolong, Kec. Buayan, Kab. Kebumen</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <span class="text-white text-xs" style="font-family: 'Inria Serif', serif;">✉️</span>
                                    <span class="text-white text-xs font-bold" style="font-family: 'Inria Serif', serif;">smpnbuayan01@gmail.com</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <span class="text-white text-xs" style="font-family: 'Inria Serif', serif;">📞</span>
                                    <span class="text-white text-xs font-bold" style="font-family: 'Inria Serif', serif;">(0287) 4760162</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <span class="text-white text-xs" style="font-family: 'Inria Serif', serif;">📱</span>
                                    <span class="text-white text-xs font-bold" style="font-family: 'Inria Serif', serif;">088238063441</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 hidden md:block"></div>
                        <div class="flex flex-col shrink-0 items-start mt-4 md:mt-0 gap-2 w-full md:w-auto">
                            <span class="text-white text-sm font-bold" style="font-family: 'Inria Serif', serif;">Media Sosial</span>
                            <div class="flex items-center gap-2">
                                <button onclick="showToast('Membuka Facebook')" class="bg-white/20 px-3 py-1 rounded-lg text-white text-xs hover:bg-white/30 transition" style="font-family: 'Inria Serif', serif;">Facebook</button>
                                <button onclick="showToast('Membuka Instagram')" class="bg-white/20 px-3 py-1 rounded-lg text-white text-xs hover:bg-white/30 transition" style="font-family: 'Inria Serif', serif;">Instagram</button>
                                <button onclick="showToast('Membuka Twitter')" class="bg-white/20 px-3 py-1 rounded-lg text-white text-xs hover:bg-white/30 transition" style="font-family: 'Inria Serif', serif;">Twitter</button>
                                <button onclick="showToast('Membuka YouTube')" class="bg-white/20 px-3 py-1 rounded-lg text-white text-xs hover:bg-white/30 transition" style="font-family: 'Inria Serif', serif;">YouTube</button>
                            </div>
                        </div>
                    </div>
                    <div class="self-stretch bg-[#FFFFFFCC] h-px my-4 mx-4 md:mx-5"></div>
                    <div class="flex flex-col items-center self-stretch">
                        <span class="text-white text-xs font-bold text-center px-4" style="font-family: 'Inria Serif', serif;">Copyright © 2021 - <?= date('Y') ?> SMP NEGERI 1 BUAYAN</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ========== LIGHTBOX ========== -->
    <div class="lightbox" id="lightbox">
        <button class="lightbox-close" onclick="closeLightbox()"><i class="fa-solid fa-xmark"></i></button>
        <button class="lightbox-nav lightbox-prev" onclick="changeLightbox(-1)"><i class="fa-solid fa-chevron-left"></i></button>
        <img class="lightbox-img" id="lightboxImg" src="" alt="">
        <p class="lightbox-caption" id="lightboxCaption"></p>
        <span class="lightbox-counter" id="lightboxCounter"></span>
        <button class="lightbox-nav lightbox-next" onclick="changeLightbox(1)"><i class="fa-solid fa-chevron-right"></i></button>
    </div>

    <script>
        // ---- Foto data untuk lightbox ----
        const fotos = <?php
            $jsData = array_map(function($f) {
                return ['src' => $f['src'], 'keterangan' => $f['keterangan']];
            }, $fotos);
            echo json_encode($jsData);
        ?>;
        let currentIndex = 0;

        function openLightbox(index) {
            currentIndex = index;
            updateLightbox();
            document.getElementById('lightbox').classList.add('show');
            document.body.style.overflow = 'hidden';
        }
        function closeLightbox() {
            document.getElementById('lightbox').classList.remove('show');
            document.body.style.overflow = '';
        }
        function changeLightbox(dir) {
            currentIndex = (currentIndex + dir + fotos.length) % fotos.length;
            updateLightbox();
        }
        function updateLightbox() {
            const foto = fotos[currentIndex];
            const img = document.getElementById('lightboxImg');
            const cap = document.getElementById('lightboxCaption');
            const counter = document.getElementById('lightboxCounter');
            img.src = foto.src || '';
            img.alt = foto.keterangan;
            cap.textContent = foto.keterangan;
            counter.textContent = (currentIndex + 1) + ' / ' + fotos.length;
            if (!foto.src) {
                img.style.display = 'none';
            } else {
                img.style.display = 'block';
            }
        }
        document.getElementById('lightbox').addEventListener('click', function(e) {
            if (e.target === this) closeLightbox();
        });
        document.addEventListener('keydown', function(e) {
            if (!document.getElementById('lightbox').classList.contains('show')) return;
            if (e.key === 'ArrowLeft')  changeLightbox(-1);
            if (e.key === 'ArrowRight') changeLightbox(1);
            if (e.key === 'Escape')     closeLightbox();
        });

        // ---- Nav & Misc ----
        function showToast(msg) {
            let t = document.querySelector('.toast-notification');
            if(t) t.remove();
            t = document.createElement('div');
            t.style.cssText = 'position:fixed;bottom:20px;right:20px;background:#333;color:white;padding:10px 20px;border-radius:8px;z-index:9999;font-size:13px;font-family:"Inria Serif",serif;';
            t.textContent = msg;
            document.body.appendChild(t);
            setTimeout(() => { if(t) t.remove(); }, 2000);
        }
        function toggleDropdown(event, button) {
            event.stopPropagation();
            const dd = button.closest('.dropdown');
            document.querySelectorAll('.dropdown').forEach(d => { if(d !== dd) d.classList.remove('show'); });
            dd.classList.toggle('show');
        }
        document.addEventListener('click', () => {
            document.querySelectorAll('.dropdown').forEach(d => d.classList.remove('show'));
        });
        function toggleMobileDropdown(btn) { btn.closest('.mobile-dropdown').classList.toggle('active'); }
        function toggleMobileMenu() {
            document.getElementById('navMenuMobile').classList.toggle('show');
            document.getElementById('menuOverlay').classList.toggle('show');
            document.body.style.overflow = document.getElementById('navMenuMobile').classList.contains('show') ? 'hidden' : '';
        }
        function closeMobileMenu() {
            document.getElementById('navMenuMobile').classList.remove('show');
            document.getElementById('menuOverlay').classList.remove('show');
            document.body.style.overflow = '';
        }
        window.addEventListener('resize', () => { if(window.innerWidth > 768) closeMobileMenu(); });
        document.addEventListener('DOMContentLoaded', () => { document.body.classList.add('fade-in'); });
    </script>
</body>
</html>