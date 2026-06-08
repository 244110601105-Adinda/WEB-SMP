<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>SMP Negeri 1 Buayan - Pengumuman</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts - Inria Serif -->
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inria Serif', serif;
        }
        
        .gradient-blue-vertical {
            background: linear-gradient(180deg, #0090EA, #005184);
        }
        
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .toast-notification {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #333434;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            z-index: 1000;
            animation: slideIn 0.3s ease;
        }
        
        @keyframes slideIn {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes slideOut {
            from { transform: translateX(0); opacity: 1; }
            to { transform: translateX(100%); opacity: 0; }
        }
        
        /* Line clamp for text */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        /* ========== DROPDOWN MENU STYLES ========== */
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        .dropbtn {
            background: transparent;
            color: #333434;
            padding: 8px 12px;
            font-size: 14px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            font-family: 'Inria Serif', serif;
            border-radius: 6px;
            transition: all 0.3s ease;
        }
        
        .dropbtn:hover {
            color: #0090EA;
            background-color: #f0f0f0;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 240px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.15);
            z-index: 1000;
            border-radius: 10px;
            top: 100%;
            left: 0;
            margin-top: 5px;
            overflow: hidden;
            border: 1px solid #e5e5e5;
        }
        
        .dropdown-content a {
            color: #333434;
            padding: 12px 18px;
            text-decoration: none;
            display: block;
            font-size: 13px;
            font-weight: 500;
            border-bottom: 1px solid #f0f0f0;
            transition: all 0.2s ease;
            font-family: 'Inria Serif', serif;
        }
        
        .dropdown-content a:last-child {
            border-bottom: none;
        }
        
        .dropdown-content a:hover {
            background-color: #0090EA;
            color: white;
            padding-left: 24px;
        }
        
        .dropdown.show .dropdown-content {
            display: block;
        }
        
        /* Mobile menu styles */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #333434;
            padding: 8px;
            z-index: 1001;
            position: relative;
        }
        
        .mobile-menu-btn:hover {
            color: #0090EA;
        }
        
        .menu-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 998;
        }
        
        .menu-overlay.show {
            display: block;
        }
        
        .desktop-nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            padding: 8px 20px;
            flex-wrap: wrap;
        }
        
        .logo-area {
            display: flex;
            align-items: center;
        }
        
        .nav-menu-desktop {
            display: flex;
            align-items: center;
            gap: 5px;
            flex-wrap: wrap;
        }
        
        .nav-menu-desktop a {
            text-decoration: none;
            white-space: nowrap;
            font-weight: bold;
            font-size: 14px;
            padding: 8px 12px;
            border-radius: 6px;
            transition: all 0.3s ease;
            font-family: 'Inria Serif', serif;
        }
        
        .nav-menu-desktop a:hover {
            color: #0090EA;
            background-color: #f0f0f0;
        }
        
        /* Mobile menu - sidebar */
        .nav-menu-mobile {
            position: fixed;
            top: 0;
            left: -300px;
            width: 280px;
            height: 100%;
            background: white;
            flex-direction: column;
            align-items: flex-start !important;
            padding: 70px 0 20px 0 !important;
            margin: 0 !important;
            box-shadow: 2px 0 15px rgba(0,0,0,0.15);
            z-index: 999;
            transition: left 0.3s ease;
            gap: 0 !important;
            overflow-y: auto;
        }
        
        .nav-menu-mobile.show {
            left: 0;
        }
        
        .nav-menu-mobile a, .nav-menu-mobile .mobile-dropdown > .mobile-dropbtn {
            width: 100%;
            text-align: left;
            padding: 14px 25px !important;
            margin: 0 !important;
            font-size: 15px !important;
            font-weight: 500 !important;
            color: #333434;
            text-decoration: none;
            display: block;
            border-bottom: 1px solid #f0f0f0;
            transition: all 0.3s ease;
            cursor: pointer;
            background: none;
            border: none;
            font-family: 'Inria Serif', serif;
        }
        
        .nav-menu-mobile a:hover, .nav-menu-mobile .mobile-dropdown > .mobile-dropbtn:hover {
            background-color: #f5f5f5;
            color: #0090EA;
            padding-left: 30px !important;
        }
        
        .mobile-dropdown-content {
            display: none;
            background-color: #f9f9f9;
            padding-left: 0;
        }
        
        .mobile-dropdown-content a {
            padding: 12px 25px 12px 40px !important;
            font-size: 13px !important;
            border-bottom: 1px solid #e5e5e5;
            background-color: #f9f9f9;
            font-family: 'Inria Serif', serif;
        }
        
        .mobile-dropdown-content a:hover {
            background-color: #e8e8e8;
            color: #0090EA;
            padding-left: 45px !important;
        }
        
        .mobile-dropdown.active .mobile-dropdown-content {
            display: block;
        }
        
        .mobile-dropdown > .mobile-dropbtn {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .mobile-dropdown > .mobile-dropbtn:after {
            content: " ▼";
            font-size: 10px;
        }
        
        .mobile-dropdown.active > .mobile-dropbtn:after {
            content: " ▲";
        }
        
        .close-menu-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            background: none;
            border: none;
            font-size: 22px;
            cursor: pointer;
            color: #666;
            padding: 8px;
            z-index: 1000;
            font-family: 'Inria Serif', serif;
        }
        
        .close-menu-btn:hover {
            color: #0090EA;
        }
        
        .menu-title {
            font-size: 18px;
            font-weight: bold;
            color: #0090EA;
            padding: 0 25px 15px 25px;
            margin-bottom: 10px;
            border-bottom: 2px solid #0090EA;
            display: inline-block;
            width: auto;
            font-family: 'Inria Serif', serif;
        }
        
        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
                order: -1;
                margin-left: 10px;
            }
            
            .desktop-nav {
                justify-content: space-between;
                position: relative;
                padding: 8px 15px;
            }
            
            .logo-area {
                flex: 1;
                justify-content: center;
            }
            
            .nav-menu-desktop {
                display: none !important;
            }
            
            .footer-content {
                flex-direction: column;
                gap: 20px;
                margin-left: 20px !important;
                margin-right: 20px !important;
            }
            .footer-content .flex-1 {
                display: none;
            }
            .footer-content .ml-8 {
                margin-left: 0 !important;
            }
        }
        
        @media (min-width: 769px) {
            .nav-menu-mobile {
                display: none !important;
            }
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease forwards;
        }
        
        /* Card pengumuman styles - lebih pendek seperti card berita */
        .announcement-card {
            transition: all 0.3s ease;
        }
        
        .announcement-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
        }
    </style>
</head>
<body>
    <?php
    // DATA PENGUMUMAN
    $pengumumanList = [
        [
            'id' => 1,
            'judul' => 'JAGA TUNAS BANGSA DEMI KEDAULATAN NEGARA',
            'tanggal' => '20 Mei 2026',
            'kategori' => 'Hari Kebangkitan Nasional',
            'konten' => 'Rabu, 20 Mei 2026 merupakan Hari Kebangkitan Nasional Ke-118 dengan tema "Jaga Tunas Bangsa Demi Kedaulatan Negara".',
            'gambar' => 'https://figma-alpha-api.s3.us-west-2.amazonaws.com/images/7e1c8bd3-3cb4-425a-a373-28f054aeffa7'
        ]
    ];
    ?>
    
    <!-- Modal Detail Pengumuman -->
    <div id="announcementModal" class="modal" style="display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.7);">
        <div style="background-color: white; margin: 10% auto; padding: 20px; border-radius: 15px; width: 90%; max-width: 500px; position: relative;">
            <span onclick="closeModal()" style="position: absolute; right: 15px; top: 10px; font-size: 24px; cursor: pointer; color: #636566;">&times;</span>
            <h2 id="modalTitle" class="text-xl font-bold text-[#333434] mb-3" style="font-family: 'Inria Serif', serif;"></h2>
            <p id="modalDate" class="text-[#636566] text-xs mb-3" style="font-family: 'Inria Serif', serif;"></p>
            <p id="modalCategory" class="text-[#0090EA] text-xs mb-3" style="font-family: 'Inria Serif', serif;"></p>
            <img id="modalImage" class="w-full h-40 object-cover rounded-lg mb-4" src="" alt="">
            <p id="modalContent" class="text-[#636566] text-sm leading-relaxed" style="font-family: 'Inria Serif', serif;"></p>
        </div>
    </div>

    <div class="flex flex-col bg-white">
        <div class="flex flex-col items-start self-stretch bg-[#EAF1F4]">
            <div class="self-stretch">
                <!-- ============================================ -->
                <!-- HEADER & NAVBAR -->
                <!-- ============================================ -->
                <div class="bg-white shadow-sm">
                    <div class="desktop-nav">
                        <div class="logo-area">
                            <img src="https://figma-alpha-api.s3.us-west-2.amazonaws.com/images/8099c8a7-96f3-4300-a78c-734c3122cf26" 
                                 class="w-10 h-10 object-contain"
                                 alt="School Logo">
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
                                    <a href="berita.php">Berita</a>
                                    <a href="pengumuman.php">Pengumuman</a>
                                    <a href="agenda.php">Agenda</a>
                                </div>
                            </div>
                            
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event, this)">
                                    Profil <i class="fa-solid fa-chevron-down text-[9px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="profil.php">Profil Sekolah</a>
                                    <a href="sejarah.php">Sejarah</a>
                                    <a href="visi-misi.php">Visi & Misi</a>
                                    <a href="struktur-organisasi.php">Struktur Organisasi</a>
                                    <a href="tenaga-edukatif.php">Tenaga Edukatif</a>
                                    <a href="tenaga-non-edukatif.php">Tenaga Non Edukatif</a>
                                    <a href="sarana-prasarana.php">Sarana Prasarana</a>
                                </div>
                            </div>
                            
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event, this)">
                                    Pendidikan <i class="fa-solid fa-chevron-down text-[9px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="struktur-kurikulum.php">Struktur Kurikulum</a>
                                    <a href="kalender-akademik.php">Kalender Akademik</a>
                                    <a href="rekap-ujian.php">Rekap Ujian Sekolah</a>
                                    <a href="ekstrakurikuler.php">Ekstrakurikuler</a>
                                </div>
                            </div>
                            
                            <a href="peserta-didik.php" style="font-family: 'Inria Serif', serif;">Peserta Didik</a>
                            
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event, this)">
                                    Prestasi <i class="fa-solid fa-chevron-down text-[9px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="prestasi-sekolah.php">Prestasi Sekolah</a>
                                    <a href="prestasi-siswa.php">Prestasi Siswa</a>
                                    <a href="prestasi-guru.php">Prestasi Guru</a>
                                </div>
                            </div>
                            
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event, this)">
                                    Alumni <i class="fa-solid fa-chevron-down text-[9px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="data-alumni.php">Data Alumni</a>
                                    <a href="penelusuran-alumni.php">Penelusuran Alumni</a>
                                </div>
                            </div>
                            
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event, this)">
                                    Galeri <i class="fa-solid fa-chevron-down text-[9px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="galeri-foto.php">Foto</a>
                                    <a href="galeri-video.php">Video</a>
                                </div>
                            </div>
                            
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event, this)">
                                    SIM <i class="fa-solid fa-chevron-down text-[9px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="https://siak.smpn1buayan.sch.id/">SIAK</a>
                                </div>
                            </div>
                            <a href="download.php" style="color:#333434; font-family: 'Inria Serif', serif;">Download</a>
                        </div>
                    </div>
                </div>
                
                <!-- Mobile Navigation Menu dengan Dropdown Accordion -->
                <div class="nav-menu-mobile" id="navMenuMobile">
                    <button class="close-menu-btn" onclick="closeMobileMenu()">
                        <i class="fa-solid fa-times"></i>
                    </button>
                    <div style="padding: 0 25px;">
                        <div class="menu-title">Menu Navigasi</div>
                    </div>
                    <a href="home.php">🏠 Home</a>
                    
                    <div class="mobile-dropdown">
                        <button class="mobile-dropbtn" onclick="toggleMobileDropdown(this)">📰 Berita</button>
                        <div class="mobile-dropdown-content">
                            <a href="berita.php">Berita</a>
                            <a href="pengumuman.php">Pengumuman</a>
                            <a href="agenda.php">Agenda</a>
                        </div>
                    </div>
                    
                    <div class="mobile-dropdown">
                        <button class="mobile-dropbtn" onclick="toggleMobileDropdown(this)">🏫 Profil</button>
                        <div class="mobile-dropdown-content">
                            <a href="profil.php">Profil Sekolah</a>
                            <a href="sejarah.php">Sejarah</a>
                            <a href="visi-misi.php">Visi & Misi</a>
                            <a href="struktur-organisasi.php">Struktur Organisasi</a>
                            <a href="tenaga-edukatif.php">Tenaga Edukatif</a>
                            <a href="tenaga-non-edukatif.php">Tenaga Non Edukatif</a>
                            <a href="sarana-prasarana.php">Sarana Prasarana</a>
                        </div>
                    </div>
                    
                    <div class="mobile-dropdown">
                        <button class="mobile-dropbtn" onclick="toggleMobileDropdown(this)">📚 Pendidikan</button>
                        <div class="mobile-dropdown-content">
                            <a href="struktur-kurikulum.php">Struktur Kurikulum</a>
                            <a href="kalender-akademik.php">Kalender Akademik</a>
                            <a href="rekap-ujian.php">Rekap Ujian Sekolah</a>
                            <a href="ekstrakurikuler.php">Ekstrakurikuler</a>
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
                            <a href="data-alumni.php">Data Alumni</a>
                            <a href="penelusuran-alumni.php">Penelusuran Alumni</a>
                        </div>
                    </div>
                    
                    <div class="mobile-dropdown">
                        <button class="mobile-dropbtn" onclick="toggleMobileDropdown(this)">🖼️ Galeri</button>
                        <div class="mobile-dropdown-content">
                            <a href="galeri-foto.php">Foto</a>
                            <a href="galeri-video.php">Video</a>
                        </div>
                    </div>
                    
                    <div class="mobile-dropdown">
                        <button class="mobile-dropbtn" onclick="toggleMobileDropdown(this)">💻 SIM</button>
                        <div class="mobile-dropdown-content">
                            <a href="https://siak.smpn1buayan.sch.id/" target="_blank">SIAK</a>
                        </div>
                    </div>
                    
                    <a href="download.php" class="block px-6 py-3 text-sm font-medium cursor-pointer hover:text-blue-600 transition border-b border-gray-100">⬇️ Download</a>
                </div>
                
                <div class="menu-overlay" id="menuOverlay" onclick="closeMobileMenu()"></div>

                
                <!-- ============================================ -->
                <!-- HALAMAN PENGUMUMAN -->
                <!-- ============================================ -->
                <div class="bg-[#EAF1F4] pb-12">
                    
                    <!-- Judul PENGUMUMAN -->
                    <div class="text-center pt-8 pb-4">
                        <h1 class="text-[#333434] text-4xl font-bold tracking-wider" style="font-family: 'Inria Serif', serif;">PENGUMUMAN</h1>
                    </div>
                    
                    <!-- Garis pemisah -->
                    <div class="flex justify-center px-4">
                        <div class="w-[90%] h-px bg-[#636566]"></div>
                    </div>
                    
                    <!-- Daftar Pengumuman - Card pendek seperti card berita -->
                    <div class="max-w-6xl mx-auto px-6 mt-10">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <?php foreach($pengumumanList as $index => $pengumuman): ?>
                            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer hover:-translate-y-1 announcement-card"
                                 onclick="showAnnouncementDetail(<?= $index ?>)">
                                <div class="w-full h-44 overflow-hidden">
                                    <img src="<?= $pengumuman['gambar'] ?>" 
                                         class="w-full h-full object-cover hover:scale-105 transition duration-300"
                                         alt="<?= $pengumuman['judul'] ?>">
                                </div>
                                <div class="p-4">
                                    <div class="text-[#636566] text-xs mb-2" style="font-family: 'Inria Serif', serif;">📅 <?= $pengumuman['tanggal'] ?></div>
                                    <h2 class="text-[#333434] text-base font-bold mb-2 line-clamp-2" style="font-family: 'Inria Serif', serif;"><?= $pengumuman['judul'] ?></h2>
                                    <p class="text-[#636566] text-xs leading-relaxed line-clamp-3 mb-3" style="font-family: 'Inria Serif', serif;"><?= $pengumuman['konten'] ?></p>
                                    <button class="text-[#0090EA] text-xs font-semibold hover:text-[#005184] transition flex items-center gap-1"
                                            onclick="event.stopPropagation(); showAnnouncementDetail(<?= $index ?>)">
                                        Lihat Detail →
                                    </button>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                </div>
                
                <!-- ============================================ -->
                <!-- FOOTER -->
                <!-- ============================================ -->
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
                                <button onclick="showToast('Membuka YouTube')" class="bg-white/20 px-3 py-1 rounded-lg text-white text-xs hover:bg-white/30 transition" style="font-family: 'Inria Serif', serif;">YouTube</button>
                                <button onclick="showToast('Membuka Twitter')" class="bg-white/20 px-3 py-1 rounded-lg text-white text-xs hover:bg-white/30 transition" style="font-family: 'Inria Serif', serif;">Twitter</button>
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
    
    <script>
        const pengumumanData = <?= json_encode($pengumumanList) ?>;
        
        function showToast(message) {
            let toast = document.querySelector('.toast-notification');
            if(toast) toast.remove();
            toast = document.createElement('div');
            toast.className = 'toast-notification';
            toast.innerHTML = message;
            document.body.appendChild(toast);
            setTimeout(() => {
                toast.style.animation = 'slideOut 0.3s ease';
                setTimeout(() => toast.remove(), 300);
            }, 2000);
        }
        
        function showAnnouncementDetail(index) {
            const pengumuman = pengumumanData[index];
            if(!pengumuman) return;
            document.getElementById('modalTitle').textContent = pengumuman.judul;
            document.getElementById('modalDate').innerHTML = '📅 ' + pengumuman.tanggal;
            document.getElementById('modalCategory').innerHTML = '🏷️ ' + pengumuman.kategori;
            document.getElementById('modalImage').src = pengumuman.gambar;
            document.getElementById('modalContent').textContent = pengumuman.konten;
            document.getElementById('announcementModal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }
        
        function closeModal() {
            document.getElementById('announcementModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }
        
        window.onclick = function(e) {
            if(e.target === document.getElementById('announcementModal')) closeModal();
        }
        document.addEventListener('keydown', (e) => { if(e.key === 'Escape') closeModal(); });
        
        // ============================================
        // DESKTOP DROPDOWN - KLIK UNTUK BUKA/TUTUP
        // ============================================
        function toggleDropdown(event, button) {
            event.stopPropagation();
            const dropdown = button.closest('.dropdown');
            const allDropdowns = document.querySelectorAll('.dropdown');
            allDropdowns.forEach(dd => {
                if (dd !== dropdown) {
                    dd.classList.remove('show');
                }
            });
            dropdown.classList.toggle('show');
        }
        
        document.addEventListener('click', function(event) {
            const allDropdowns = document.querySelectorAll('.dropdown');
            allDropdowns.forEach(dropdown => {
                if (!dropdown.contains(event.target)) {
                    dropdown.classList.remove('show');
                }
            });
        });
        
        // ============================================
        // MOBILE DROPDOWN - ACCORDION
        // ============================================
        function toggleMobileDropdown(button) {
            const parent = button.closest('.mobile-dropdown');
            parent.classList.toggle('active');
        }
        
        // ============================================
        // MOBILE MENU
        // ============================================
        function toggleMobileMenu() {
            const navMenu = document.getElementById('navMenuMobile');
            const overlay = document.getElementById('menuOverlay');
            navMenu.classList.toggle('show');
            overlay.classList.toggle('show');
            if (navMenu.classList.contains('show')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        }
        
        function closeMobileMenu() {
            const navMenu = document.getElementById('navMenuMobile');
            const overlay = document.getElementById('menuOverlay');
            navMenu.classList.remove('show');
            overlay.classList.remove('show');
            document.body.style.overflow = '';
        }
        
        // Animasi fade-in
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('fade-in');
            const menuLinks = document.querySelectorAll('#navMenuMobile a, #navMenuMobile .mobile-dropdown-content a');
            menuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth <= 768) {
                        closeMobileMenu();
                    }
                });
            });
        });
        
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                const navMenu = document.getElementById('navMenuMobile');
                const overlay = document.getElementById('menuOverlay');
                navMenu.classList.remove('show');
                overlay.classList.remove('show');
                document.body.style.overflow = '';
            }
        });
    </script>
</body>
</html>