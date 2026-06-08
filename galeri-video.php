<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>SMP Negeri 1 Buayan - Galeri Video</title>
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
            .video-grid { grid-template-columns: repeat(2, 1fr) !important; gap: 14px !important; }
        }
        @media (max-width: 480px) {
            .video-grid { grid-template-columns: 1fr !important; }
        }
        @media (min-width: 769px) { .nav-menu-mobile { display: none !important; } }

        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .fade-in { animation: fadeIn 0.5s ease forwards; }

        /* ========== VIDEO GRID ========== */
        .video-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        /* Video card */
        .video-card {
            background: white;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0,144,234,0.18);
        }

        /* Thumbnail wrapper */
        .video-thumb {
            position: relative;
            width: 100%;
            aspect-ratio: 16/9;
            overflow: hidden;
            background: #111;
        }
        .video-thumb img {
            width: 100%; height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }
        .video-card:hover .video-thumb img {
            transform: scale(1.05);
        }

        /* Play button overlay */
        .play-btn {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0,0,0,0.15);
            transition: background 0.3s;
        }
        .video-card:hover .play-btn {
            background: rgba(0,0,0,0.3);
        }
        .play-icon {
            width: 58px; height: 58px;
            background: #FF0000;
            border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 20px rgba(255,0,0,0.4);
        }
        .video-card:hover .play-icon {
            transform: scale(1.12);
            box-shadow: 0 6px 28px rgba(255,0,0,0.55);
        }
        .play-icon svg {
            width: 26px; height: 26px;
            fill: white;
            margin-left: 4px;
        }

        /* Card body */
        .video-info {
            padding: 12px 14px 14px;
        }
        .video-title {
            font-size: 13px;
            font-weight: 700;
            color: #222;
            line-height: 1.45;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-family: 'Inria Serif', serif;
        }
        .video-meta {
            margin-top: 6px;
            font-size: 11px;
            color: #9ca3af;
            display: flex;
            align-items: center;
            gap: 6px;
            font-family: 'Inria Serif', serif;
        }

        /* ========== MODAL YOUTUBE ========== */
        .yt-modal {
            display: none;
            position: fixed; inset: 0;
            background: rgba(0,0,0,0.88);
            z-index: 3000;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .yt-modal.show { display: flex; }
        .yt-modal-box {
            background: #000;
            border-radius: 14px;
            overflow: hidden;
            width: 100%;
            max-width: 860px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.6);
            position: relative;
        }
        .yt-modal-box .yt-frame-wrap {
            position: relative;
            width: 100%;
            padding-top: 56.25%; /* 16:9 */
        }
        .yt-modal-box iframe {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            border: none;
        }
        .yt-modal-title {
            background: #111;
            color: white;
            padding: 12px 48px 12px 16px;
            font-size: 14px;
            font-weight: 600;
            line-height: 1.4;
            font-family: 'Inria Serif', serif;
        }
        .yt-modal-close {
            position: absolute;
            top: 10px; right: 12px;
            background: rgba(255,255,255,0.15);
            border: none; color: white;
            font-size: 18px; cursor: pointer;
            width: 36px; height: 36px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            transition: background 0.2s;
            z-index: 10;
        }
        .yt-modal-close:hover { background: rgba(255,255,255,0.3); }

        /* Empty state */
        .empty-state {
            text-align: center; padding: 60px 20px;
            color: #9ca3af;
        }
        .empty-state i { font-size: 3rem; margin-bottom: 12px; display: block; opacity: 0.3; }
        .empty-state p { font-family: 'Inria Serif', serif; }
    </style>
</head>
<body>
    <?php
    // ============================================
    // DATA VIDEO YOUTUBE
    // 'id' = YouTube Video ID (bagian setelah ?v= atau youtu.be/)
    // Contoh: https://www.youtube.com/watch?v=ABC123 → id = 'ABC123'
    // ============================================
    $videos = [

        [
            'id'    => '640UcgMsuoc',
            'judul' => '10 Lulusan Terbaik Kelas IX SMPN 1 Buayan Tahun Ajaran 2025/2026',
            'tahun' => '04 Juni 2026',
        ],
        [
            'id'    => 'PJ1z11SQy5E',
            'judul' => 'Opening Ceremony "Wayang Ki Indra tanpa jid"',
            'tahun' => '04 Juni 2026',
        ],
        [
            'id'    => '_uIOpnHfwFY',
            'judul' => 'Kirab Guru, Karyawan, dan Komite SMPN 1 Buayan pada acara Purna Siswa KElas IX SMPN 1 Buayan',
            'tahun' => '04 Juni2026',
        ],
        [   
            'id'    => 'C_19GlPHRlY',
            'judul' => 'SOSIALISASI PENGGUNAAN OBAT DARI MAHASISWA UNIMUGO',
            'tahun' => '23 Mei 2026',
        ],
        [
            'id'    => '91nkN_8UhAU',
            'judul' => 'MEMORI PURNASISWA TAHUN 2024/2025',
            'tahun' => '23 Mei 2026',
        ],
        [
            'id'    => 'pN0w55VV3zU',
            'judul' => 'MENDUKUNG GEOPARK KARANGSAMBUNG-KARANGBOLONG GO INTERNASIONAL',
            'tahun' => '20 Mei 2026',
        ],
        [
            'id'    => 'hXA2i3PRggc',
            'judul' => 'MEMORI LOMBA MAPSI',
            'tahun' => '20 Mei 2026',
        ],
        [
            'id'    => '9oY7_OGz9UQ',
            'judul' => 'MEMORI DRUMBAND 2016',
            'tahun' => '20 Mei 2026',
        ],
        [
            'id'    => 'rQ8BHFSQdqA',
            'judul' => 'GLADI PURNA SISWA TAHUN AJARAN 2023/2024',
            'tahun' => '20 Mei 2026',
        ],
        [
            'id'    => 'nlKwBMZskHM',
            'judul' => 'MEMORI TAHUN 2012 "MOS"',
            'tahun' => '19 Mei 2026',
        ],
        [
            'id'    => 'xvwAMkfJE6Y',
            'judul' => 'PERPUSTAKAAN "GUMREGAH" SMPN 1 BUAYAN',
            'tahun' => '19 Mei 2026',
        ],
        [
            'id'    => 'h0kd11wBI6M',
            'judul' => 'PEMILIHAN PENGURUS PGRI RANTING SMPN 1 BUAYAN',
            'tahun' => '19 Mei 2026',
        ],
    ];
    // Thumbnail YouTube: https://img.youtube.com/vi/{ID}/hqdefault.jpg
    ?>

    <div class="flex flex-col bg-white">
        <div class="flex flex-col items-start self-stretch bg-[#EAF1F4]">
            <div class="self-stretch">

                <!-- ============ NAVBAR (dengan icon chevron seperti home) ============ -->
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
                        <div class="nav-menu-desktop">
                            <a href="home.php" style="color:#333434;">Home</a>
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event,this)">
                                    Berita <i class="fa-solid fa-chevron-down text-[8px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="berita.php">📰 Berita</a>
                                    <a href="pengumuman.php">📢 Pengumuman</a>
                                    <a href="agenda.php">📅 Agenda</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event,this)">
                                    Profil <i class="fa-solid fa-chevron-down text-[8px] ml-1"></i>
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
                                <button class="dropbtn" onclick="toggleDropdown(event,this)">
                                    Pendidikan <i class="fa-solid fa-chevron-down text-[8px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="struktur-kurikulum.php">📖 Struktur Kurikulum</a>
                                    <a href="kalender-akademik.php">📆 Kalender Akademik</a>
                                    <a href="rekap-ujian.php">📊 Rekap Ujian Sekolah</a>
                                    <a href="ekstrakurikuler.php">⚽ Ekstrakurikuler</a>
                                </div>
                            </div>
                            <a href="peserta-didik.php" style="color:#333434;">Peserta Didik</a>
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event,this)">
                                    Prestasi <i class="fa-solid fa-chevron-down text-[8px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="prestasi-sekolah.php">🏆 Prestasi Sekolah</a>
                                    <a href="prestasi-siswa.php">⭐ Prestasi Siswa</a>
                                    <a href="prestasi-guru.php">👨‍🏫 Prestasi Guru</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event,this)">
                                    Alumni <i class="fa-solid fa-chevron-down text-[8px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="data-alumni.php">📋 Data Alumni</a>
                                    <a href="penelusuran-alumni.php">🔍 Penelusuran Alumni</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event,this)" style="color:#0090EA;">
                                    Galeri <i class="fa-solid fa-chevron-down text-[8px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="galeri-foto.php">📸 Foto</a>
                                    <a href="galeri-video.php">🎥 Video</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event,this)">
                                    SIM <i class="fa-solid fa-chevron-down text-[8px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="https://siak.smpn1buayan.sch.id/" target="_blank">💻 SIAK</a>
                                </div>
                            </div>
                           <a href="download.php" style="color:#333434;">Download</a>
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
                            <a href="galeri-foto.php">Foto</a>
                            <a href="galeri-video.php" style="color:#0090EA;font-weight:600;">Video</a>
                        </div>
                    </div>
                    <div class="mobile-dropdown">
                        <button class="mobile-dropbtn" onclick="toggleMobileDropdown(this)">💻 SIM</button>
                        <div class="mobile-dropdown-content"><a href="https://siak.smpn1buayan.sch.id/" target="_blank">SIAK</a></div>
                    </div>
                    <a href="download.php" class="block px-6 py-3 text-sm font-medium cursor-pointer hover:text-blue-600 transition border-b border-gray-100" style="font-family: 'Inria Serif', serif;">⬇️ Download</a>
                </div>
                <div class="menu-overlay" id="menuOverlay" onclick="closeMobileMenu()"></div>

                <!-- ============ HALAMAN GALERI VIDEO ============ -->
                <div class="bg-[#EAF1F4] pb-14">

                    <!-- Breadcrumb back -->
                    <div class="max-w-5xl mx-auto px-6 pt-8">
                        <a href="galeri-foto.php"
                           class="inline-flex items-center gap-2 text-[#636566] text-sm hover:text-[#0090EA] transition mb-4" style="font-family: 'Inria Serif', serif;">
                            <i class="fa-solid fa-arrow-left"></i>
                            <span>Kembali</span>
                        </a>
                    </div>

                    <!-- Judul ukuran 4xl -->
                    <div class="text-center pb-4">
                        <h1 class="text-[#333434] text-4xl font-bold tracking-wider" style="font-family: 'Inria Serif', serif;">GALERI VIDEO</h1>
                    </div>
                    <div class="flex justify-center px-4 mb-10">
                        <div class="w-[90%] h-px bg-[#636566]"></div>
                    </div>

                    <!-- Video Grid -->
                    <div class="max-w-5xl mx-auto px-6">
                        <?php if (empty($videos)): ?>
                        <div class="empty-state">
                            <i class="fa-brands fa-youtube"></i>
                            <p class="text-lg">Belum ada video tersedia.</p>
                        </div>
                        <?php else: ?>
                        <div class="video-grid">
                            <?php foreach ($videos as $i => $video):
                                $thumb = "https://img.youtube.com/vi/{$video['id']}/hqdefault.jpg";
                            ?>
                            <div class="video-card" onclick="openVideo('<?= htmlspecialchars($video['id']) ?>', '<?= htmlspecialchars(addslashes($video['judul'])) ?>')">
                                <div class="video-thumb">
                                    <img src="<?= $thumb ?>"
                                         alt="<?= htmlspecialchars($video['judul']) ?>"
                                         loading="lazy"
                                         onerror="this.style.display='none'; this.parentElement.style.background='#1a1a2e';">
                                    <div class="play-btn">
                                        <div class="play-icon">
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 5v14l11-7z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="video-info">
                                    <div class="video-title"><?= htmlspecialchars($video['judul']) ?></div>
                                    <div class="video-meta">
                                        <i class="fa-brands fa-youtube" style="color:#FF0000;"></i>
                                        <span><?= htmlspecialchars($video['tahun']) ?></span>
                                    </div>
                                </div>
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

    <!-- ========== YOUTUBE MODAL ========== -->
    <div class="yt-modal" id="ytModal">
        <div class="yt-modal-box">
            <div class="yt-frame-wrap">
                <iframe id="ytFrame"
                    src=""
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
            <div class="yt-modal-title" id="ytTitle"></div>
            <button class="yt-modal-close" onclick="closeVideo()">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
    </div>

    <script>
        function openVideo(id, title) {
            document.getElementById('ytFrame').src =
                'https://www.youtube.com/embed/' + id + '?autoplay=1&rel=0';
            document.getElementById('ytTitle').textContent = title;
            document.getElementById('ytModal').classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function closeVideo() {
            document.getElementById('ytFrame').src = '';
            document.getElementById('ytModal').classList.remove('show');
            document.body.style.overflow = '';
        }

        document.getElementById('ytModal').addEventListener('click', function(e) {
            if (e.target === this) closeVideo();
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeVideo();
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