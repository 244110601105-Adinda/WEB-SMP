<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>SMP Negeri 1 Buayan - Prestasi Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts - Inria Serif (wajib seperti home) -->
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
            .table-container { overflow-x: auto; }
            .siswa-table { min-width: 960px; }
        }
        @media (min-width: 769px) { .nav-menu-mobile { display: none !important; } }

        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .fade-in { animation: fadeIn 0.5s ease forwards; }

        /* ========== TABLE ========== */
        .siswa-table { width: 100%; border-collapse: collapse; }
        .siswa-table th {
            background-color: #0090EA; color: white;
            padding: 12px 12px; font-weight: 600; font-size: 12px;
            text-align: center; white-space: nowrap;
            font-family: 'Inria Serif', serif;
        }
        .siswa-table th.text-left { text-align: left; }
        .siswa-table td {
            padding: 10px 12px; border-bottom: 1px solid #e5e5e5;
            color: #333434; font-size: 13px; text-align: center; vertical-align: middle;
            font-family: 'Inria Serif', serif;
        }
        .siswa-table td.text-left { text-align: left; }
        .siswa-table tbody tr:hover td { background-color: #f0f8ff; }

        /* Badges (tetap ada untuk keperluan filter, namun tidak digunakan karena data kosong) */
        .badge {
            display: inline-block; padding: 3px 10px; border-radius: 20px;
            font-size: 11px; font-weight: 700; white-space: nowrap;
        }
        .badge-jenis   { background: #e0f2fe; color: #0369a1; }
        .badge-kelas   { background: #f3e8ff; color: #6b21a8; }
        .badge-1       { background: #fef3c7; color: #92400e; }
        .badge-2       { background: #e5e7eb; color: #374151; }
        .badge-3       { background: #fde8d8; color: #9a3412; }
        .badge-harapan { background: #d1fae5; color: #065f46; }

        /* Filter */
        .filter-select {
            background-color: white; border: 1px solid #ddd;
            border-radius: 8px; padding: 8px 32px 8px 14px;
            font-size: 13px; cursor: pointer; appearance: none; -webkit-appearance: none;
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23333434' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><polyline points='6 9 12 15 18 9'></polyline></svg>");
            background-repeat: no-repeat; background-position: right 10px center;
            transition: border-color 0.2s;
            font-family: 'Inria Serif', serif;
        }
        .filter-select:focus { outline: none; border-color: #0090EA; box-shadow: 0 0 0 2px rgba(0,144,234,0.2); }

        /* Image (tetap ada untuk kemungkinan future use) */
        .img-thumb {
            width: 48px; height: 40px; object-fit: cover;
            border-radius: 6px; cursor: pointer;
            border: 2px solid #e5e7eb; transition: border-color 0.2s;
        }
        .img-thumb:hover { border-color: #0090EA; }

        /* Modal */
        .modal-overlay {
            display: none; position: fixed; top: 0; left: 0;
            width: 100%; height: 100%; background: rgba(0,0,0,0.7);
            z-index: 2000; align-items: center; justify-content: center;
        }
        .modal-overlay.show { display: flex; }
        .modal-box {
            background: white; border-radius: 16px; padding: 24px;
            max-width: 480px; width: 90%; text-align: center;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        .modal-box img { width: 100%; border-radius: 10px; margin-bottom: 12px; }
        .modal-close {
            background: #0090EA; color: white; border: none;
            padding: 8px 24px; border-radius: 8px; cursor: pointer;
            font-size: 14px; font-weight: 600; margin-top: 8px;
            font-family: 'Inria Serif', serif;
        }

        .empty-row td { color: #9ca3af; font-style: italic; padding: 28px 14px; }
    </style>
</head>
<body>
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
                                    <a href="berita.php">Berita</a>
                                    <a href="pengumuman.php">Pengumuman</a>
                                    <a href="agenda.php">Agenda</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event,this)">
                                    Profil <i class="fa-solid fa-chevron-down text-[8px] ml-1"></i>
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
                                <button class="dropbtn" onclick="toggleDropdown(event,this)">
                                    Pendidikan <i class="fa-solid fa-chevron-down text-[8px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="struktur-kurikulum.php">Struktur Kurikulum</a>
                                    <a href="kalender-akademik.php">Kalender Akademik</a>
                                    <a href="rekap-ujian.php">Rekap Ujian Sekolah</a>
                                    <a href="ekstrakurikuler.php">Ekstrakurikuler</a>
                                </div>
                            </div>

                            <a href="peserta-didik.php" style="color:#333434;">Peserta Didik</a>

                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event,this)" style="color:#0090EA;">
                                    Prestasi <i class="fa-solid fa-chevron-down text-[8px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="prestasi-sekolah.php">Prestasi Sekolah</a>
                                    <a href="prestasi-siswa.php">Prestasi Siswa</a>
                                    <a href="prestasi-guru.php">Prestasi Guru</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event,this)">
                                    Alumni <i class="fa-solid fa-chevron-down text-[8px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="data-alumni.php">Data Alumni</a>
                                    <a href="penelusuran-alumni.php">Penelusuran Alumni</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event,this)">
                                    Galeri <i class="fa-solid fa-chevron-down text-[8px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="galeri-foto.php">Foto</a>
                                    <a href="galeri-video.php">Video</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event,this)">
                                    SIM <i class="fa-solid fa-chevron-down text-[8px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="https://siak.smpn1buayan.sch.id/" target="_blank">SIAK</a>
                                </div>
                            </div>

                            <a href="download.php" class="text-black text-sm font-bold px-3 py-1 cursor-pointer hover:text-blue-600 transition">Download</a>
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
                    <div class="mobile-dropdown active">
                        <button class="mobile-dropbtn" onclick="toggleMobileDropdown(this)" style="color:#0090EA;font-weight:700;">🏆 Prestasi</button>
                        <div class="mobile-dropdown-content">
                            <a href="prestasi-sekolah.php">Prestasi Sekolah</a>
                            <a href="prestasi-siswa.php" style="color:#0090EA;font-weight:600;">Prestasi Siswa</a>
                            <a href="prestasi-guru.php">Prestasi Guru</a>
                        </div>
                    </div>
                    <div class="mobile-dropdown">
                        <button class="mobile-dropbtn" onclick="toggleMobileDropdown(this)">👥 Alumni</button>
                        <div class="mobile-dropdown-content">
                            <a href="data-alumni.php">Data Alumni</a><a href="penelusuran-alumni.php">Penelusuran Alumni</a>
                        </div>
                    </div>
                    <div class="mobile-dropdown">
                        <button class="mobile-dropbtn" onclick="toggleMobileDropdown(this)">🖼️ Galeri</button>
                        <div class="mobile-dropdown-content"><a href="galeri-foto.php">Foto</a><a href="galeri-video.php">Video</a></div>
                    </div>
                    <div class="mobile-dropdown">
                        <button class="mobile-dropbtn" onclick="toggleMobileDropdown(this)">💻 SIM</button>
                        <div class="mobile-dropdown-content"><a href="https://siak.smpn1buayan.sch.id/" target="_blank">SIAK</a></div>
                    </div>
                    <a href="download.php" class="block px-6 py-3 text-sm font-medium cursor-pointer hover:text-blue-600 transition border-b border-gray-100" style="font-family: 'Inria Serif', serif;">⬇️ Download</a>
                </div>
                <div class="menu-overlay" id="menuOverlay" onclick="closeMobileMenu()"></div>

                <!-- ============ HALAMAN PRESTASI SISWA (TABEL KOSONG) ============ -->
                <div class="bg-[#EAF1F4] pb-12">

                    <!-- Judul PRESTASI SISWA ukuran 4xl (text-4xl) -->
                    <div class="text-center pt-8 pb-4">
                        <h1 class="text-[#333434] text-4xl font-bold tracking-wider" style="font-family: 'Inria Serif', serif;">PRESTASI SISWA</h1>
                    </div>

                    <!-- Garis -->
                    <div class="flex justify-center px-4">
                        <div class="w-[90%] h-px bg-[#636566]"></div>
                    </div>

                    <!-- Konten -->
                    <div class="max-w-6xl mx-auto px-4 mt-10">

                        <!-- Filter Bar (tetap ada untuk UI, tidak mempengaruhi data kosong) -->
                        <form method="GET" action="">
                            <div class="flex flex-wrap gap-3 items-center justify-between mb-6">
                                <div class="flex flex-wrap gap-3 items-center">
                                    <div class="flex items-center gap-2">
                                        <label class="text-[#636566] text-sm font-medium" style="font-family: 'Inria Serif', serif;">Tahun Pelajaran:</label>
                                        <select name="tahun" class="filter-select" onchange="this.form.submit()">
                                            <option value="Semua" selected>Semua</option>
                                            <option value="2025/2026">2025/2026</option>
                                            <option value="2024/2025">2024/2025</option>
                                            <option value="2023/2024">2023/2024</option>
                                        </select>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <label class="text-[#636566] text-sm font-medium" style="font-family: 'Inria Serif', serif;">Jenis:</label>
                                        <select name="jenis" class="filter-select" onchange="this.form.submit()">
                                            <option value="Semua" selected>Semua</option>
                                            <option value="Akademik">Akademik</option>
                                            <option value="Seni">Seni</option>
                                            <option value="Olahraga">Olahraga</option>
                                            <option value="Bahasa">Bahasa</option>
                                        </select>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <label class="text-[#636566] text-sm font-medium" style="font-family: 'Inria Serif', serif;">Kelas:</label>
                                        <select name="kelas" class="filter-select" onchange="this.form.submit()">
                                            <option value="Semua" selected>Semua</option>
                                            <option value="VII A">VII A</option>
                                            <option value="VII B">VII B</option>
                                            <option value="VII C">VII C</option>
                                            <option value="VIII A">VIII A</option>
                                            <option value="VIII B">VIII B</option>
                                            <option value="VIII C">VIII C</option>
                                            <option value="IX A">IX A</option>
                                            <option value="IX B">IX B</option>
                                            <option value="IX C">IX C</option>
                                        </select>
                                    </div>
                                </div>
                                <span class="text-[#636566] text-sm" style="font-family: 'Inria Serif', serif;">
                                    Menampilkan <strong>0</strong> data
                                </span>
                            </div>
                        </form>

                        <!-- Tabel (KOSONG, tidak ada data) -->
                        <div class="table-container bg-white rounded-2xl shadow-lg overflow-hidden">
                            <table class="siswa-table">
                                <thead>
                                    <tr>
                                        <th style="width:36px;">NO</th>
                                        <th style="width:80px;">TP</th>
                                        <th class="text-left" style="min-width:160px;">NAMA LOMBA</th>
                                        <th style="width:80px;">JENIS</th>
                                        <th style="width:90px;">PRESTASI</th>
                                        <th class="text-left" style="min-width:130px;">NAMA SISWA</th>
                                        <th style="width:70px;">KELAS</th>
                                        <th style="width:55px;">KAB</th>
                                        <th style="width:65px;">KRSDN</th>
                                        <th style="width:55px;">PROV</th>
                                        <th style="width:55px;">NAS</th>
                                        <th style="width:45px;">INT</th>
                                        <th style="min-width:130px;">KETERANGAN</th>
                                        <th style="width:75px;">GAMBAR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="empty-row">
                                        <td colspan="14" style="text-align: center; padding: 40px 20px;">
                                            <i class="fa-regular fa-star text-3xl mb-2 block text-[#0090EA]"></i>
                                            Belum ada data prestasi siswa.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Keterangan -->
                        <div class="mt-6 bg-white rounded-2xl shadow-md p-5">
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fa-solid fa-circle-info text-[#0090EA] text-xl"></i>
                                <h3 class="text-[#333434] font-bold" style="font-family: 'Inria Serif', serif;">Keterangan Kolom</h3>
                            </div>
                            <div class="flex flex-wrap gap-x-8 gap-y-1 text-sm text-[#636566]" style="font-family: 'Inria Serif', serif;">
                                <span><strong>TP</strong> = Tahun Pelajaran</span>
                                <span><strong>KAB</strong> = Tingkat Kabupaten</span>
                                <span><strong>KRSDN</strong> = Tingkat Kecamatan / Korwilcam</span>
                                <span><strong>PROV</strong> = Tingkat Provinsi</span>
                                <span><strong>NAS</strong> = Tingkat Nasional</span>
                                <span><strong>INT</strong> = Tingkat Internasional</span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ============ FOOTER (Font Inria Serif) ============ -->
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

    <!-- Modal Gambar (tetap ada untuk kemungkinan future use) -->
    <div class="modal-overlay" id="imgModal">
        <div class="modal-box">
            <img id="modalImg" src="" alt="Foto Prestasi">
            <p id="modalCaption" class="text-sm text-[#636566] mb-2" style="font-family: 'Inria Serif', serif;"></p>
            <button class="modal-close" onclick="closeModal()">Tutup</button>
        </div>
    </div>

    <script>
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

        function openModal(src, caption) {
            document.getElementById('modalImg').src = src;
            document.getElementById('modalCaption').textContent = caption;
            document.getElementById('imgModal').classList.add('show');
        }
        function closeModal() { document.getElementById('imgModal').classList.remove('show'); }
        document.getElementById('imgModal').addEventListener('click', function(e) {
            if(e.target === this) closeModal();
        });

        document.addEventListener('DOMContentLoaded', () => { document.body.classList.add('fade-in'); });
    </script>
</body>
</html>