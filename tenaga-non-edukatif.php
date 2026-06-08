<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>SMP Negeri 1 Buayan - Tenaga Non Edukatif</title>
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
        
        .gradient-blue {
            background: linear-gradient(180deg, #0090EA, #005184);
        }
        
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
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
            
            .table-container {
                overflow-x: auto;
            }
            .staff-table {
                min-width: 600px;
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
        
        /* Toast notification */
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
        
        /* Table styles */
        .staff-table th {
            background-color: #0090EA;
            color: white;
            padding: 12px 16px;
            font-weight: 600;
            text-align: left;
            font-family: 'Inria Serif', serif;
        }
        
        .staff-table td {
            padding: 10px 16px;
            border-bottom: 1px solid #e5e5e5;
            color: #333434;
            font-family: 'Inria Serif', serif;
        }
        
        .staff-table tr:hover {
            background-color: #f5f5f5;
        }
        
        /* Search input */
        .search-input {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 8px 16px;
            width: 250px;
            font-size: 14px;
            transition: all 0.3s ease;
            font-family: 'Inria Serif', serif;
        }
        
        .search-input:focus {
            outline: none;
            border-color: #0090EA;
            box-shadow: 0 0 0 2px rgba(0, 144, 234, 0.2);
        }
    </style>
</head>
<body>
    <?php
    // DATA TENAGA NON EDUKATIF
    $tenagaNonEdukatif = [
        ['nama' => 'Slamet Riyadi', 'nip' => '197501012005011001', 'nuptk' => '1234567890123456', 'alamat' => 'Karanggayam, Kebumen'],
        ['nama' => 'Siti Fatimah', 'nip' => '197802152006012002', 'nuptk' => '2345678901234567', 'alamat' => 'Kuwarasan, Kebumen'],
        ['nama' => 'Ahmad Budiman', 'nip' => '198003202007011003', 'nuptk' => '3456789012345678', 'alamat' => 'Gombong, Kebumen'],
        ['nama' => 'Dewi Lestari', 'nip' => '198105252008012004', 'nuptk' => '4567890123456789', 'alamat' => 'Buayan, Kebumen'],
        ['nama' => 'Eko Prasetyo', 'nip' => '198307152009011005', 'nuptk' => '5678901234567890', 'alamat' => 'Sempor, Kebumen'],
        ['nama' => 'Rina Yulianti', 'nip' => '198412202010012006', 'nuptk' => '6789012345678901', 'alamat' => 'Adimulyo, Kebumen'],
        ['nama' => 'Bambang Supriyadi', 'nip' => '198602102011011007', 'nuptk' => '7890123456789012', 'alamat' => 'Puring, Kebumen'],
        ['nama' => 'Nur Hidayati', 'nip' => '198708152012012008', 'nuptk' => '8901234567890123', 'alamat' => 'Prembun, Kebumen'],
        ['nama' => 'Joko Susilo', 'nip' => '198910202013011009', 'nuptk' => '9012345678901234', 'alamat' => 'Kebumen Kota'],
    ];
    ?>
    
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
                        
                        <!-- Desktop Navigation Menu dengan Dropdown (icon chevron) -->
                        <div class="nav-menu-desktop">
                            <a href="home.php" style="font-family: 'Inria Serif', serif;">Home</a>
                            
                            <!-- Dropdown Berita -->
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
                            
                            <!-- Dropdown Profil -->
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
                            
                            <!-- Dropdown Pendidikan -->
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
                            
                            <!-- Dropdown Prestasi -->
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
                            
                            <!-- Dropdown Alumni -->
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event, this)">
                                    Alumni <i class="fa-solid fa-chevron-down text-[9px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="data-alumni.php">📋 Data Alumni</a>
                                    <a href="penelusuran-alumni.php">🔍 Penelusuran Alumni</a>
                                </div>
                            </div>
                            
                            <!-- Dropdown Galeri -->
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event, this)">
                                    Galeri <i class="fa-solid fa-chevron-down text-[9px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="galeri-foto.php">📸 Foto</a>
                                    <a href="galeri-video.php">🎥 Video</a>
                                </div>
                            </div>
                            
                            <!-- Dropdown SIM -->
                            <div class="dropdown">
                                <button class="dropbtn" onclick="toggleDropdown(event, this)">
                                    SIM <i class="fa-solid fa-chevron-down text-[9px] ml-1"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="https://siak.smpn1buayan.sch.id/" target="_blank">💻 SIAK</a>
                                </div>
                            </div>
                            
                            <a href="download.php" class="text-black text-sm font-bold px-3 py-1 cursor-pointer hover:text-blue-600 transition" style="font-family: 'Inria Serif', serif;">Download</a>
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
                <!-- HALAMAN TENAGA NON EDUKATIF -->
                <!-- ============================================ -->
                <div class="bg-[#EAF1F4] pb-12">
                    
                    <!-- Judul TENAGA NON EDUKATIF (text-4xl) -->
                    <div class="text-center pt-8 pb-4">
                        <h1 class="text-[#333434] text-4xl font-bold tracking-wider" style="font-family: 'Inria Serif', serif;">TENAGA NON EDUKATIF</h1>
                    </div>
                    
                    <!-- Garis pemisah -->
                    <div class="flex justify-center px-4">
                        <div class="w-[90%] h-px bg-[#636566]"></div>
                    </div>
                    
                    <!-- Tabel Tenaga Non Edukatif -->
                    <div class="max-w-6xl mx-auto px-4 mt-10">
                        <!-- Search Box -->
                        <div class="flex justify-end mb-6">
                            <div class="relative">
                                <i class="fa-solid fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-[#636566] text-sm"></i>
                                <input type="text" id="searchInput" class="search-input pl-9" placeholder="Cari nama, NIP, atau NUPTK..." onkeyup="searchTable()">
                            </div>
                        </div>
                        
                        <!-- Tabel -->
                        <div class="table-container bg-white rounded-2xl shadow-lg overflow-hidden">
                            <table class="staff-table w-full">
                                <thead>
                                    <tr>
                                        <th class="w-12">No</th>
                                        <th>NAMA</th>
                                        <th>NIP</th>
                                        <th>NUPTK</th>
                                        <th>ALAMAT</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody">
                                    <?php foreach($tenagaNonEdukatif as $index => $staff): ?>
                                    <tr class="staff-row">
                                        <td class="text-center"><?= $index + 1 ?></td>
                                        <td class="font-medium"><?= htmlspecialchars($staff['nama']) ?></td>
                                        <td><?= htmlspecialchars($staff['nip']) ?></td>
                                        <td><?= htmlspecialchars($staff['nuptk']) ?></td>
                                        <td><?= htmlspecialchars($staff['alamat'] ?: '-') ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Keterangan jumlah data -->
                        <div class="mt-4 text-right text-[#636566] text-sm" style="font-family: 'Inria Serif', serif;">
                            Total Tenaga Non Edukatif: <span id="totalCount"><?= count($tenagaNonEdukatif) ?></span> orang
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
                                <button onclick="showToast('Membuka Facebook')" class="bg-white/20 px-3 py-1 rounded-lg text-white text-xs hover:bg-white/30" style="font-family: 'Inria Serif', serif;">Facebook</button>
                                <button onclick="showToast('Membuka Instagram')" class="bg-white/20 px-3 py-1 rounded-lg text-white text-xs hover:bg-white/30" style="font-family: 'Inria Serif', serif;">Instagram</button>
                                <button onclick="showToast('Membuka Twitter')" class="bg-white/20 px-3 py-1 rounded-lg text-white text-xs hover:bg-white/30" style="font-family: 'Inria Serif', serif;">Twitter</button>
                                <button onclick="showToast('Membuka YouTube')" class="bg-white/20 px-3 py-1 rounded-lg text-white text-xs hover:bg-white/30" style="font-family: 'Inria Serif', serif;">YouTube</button>
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
        
        // ============================================
        // SEARCH FUNCTION
        // ============================================
        function searchTable() {
            const input = document.getElementById('searchInput');
            const filter = input.value.toLowerCase();
            const rows = document.querySelectorAll('#tableBody .staff-row');
            let visibleCount = 0;
            
            rows.forEach(row => {
                const name = row.cells[1].textContent.toLowerCase();
                const nip = row.cells[2].textContent.toLowerCase();
                const nuptk = row.cells[3].textContent.toLowerCase();
                if (name.includes(filter) || nip.includes(filter) || nuptk.includes(filter)) {
                    row.style.display = '';
                    visibleCount++;
                } else {
                    row.style.display = 'none';
                }
            });
            
            document.getElementById('totalCount').textContent = visibleCount;
        }
        
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