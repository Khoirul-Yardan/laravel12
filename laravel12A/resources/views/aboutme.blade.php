<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio pengembang web dengan spesialisasi Laravel, Tailwind CSS, dan teknologi modern.">
    <title>Tentang Saya - Web Developer Kreatif</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Inter untuk tampilan modern -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz@14..32&display=swap" rel="stylesheet">
    <!-- Font Awesome untuk ikon sosial (opsional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        /* Animasi untuk background blob */
        .blob-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            overflow: hidden;
        }
        .blob {
            position: absolute;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            filter: blur(60px);
            animation: float 10s infinite ease-in-out;
        }
        .blob1 {
            width: 400px;
            height: 400px;
            top: -100px;
            right: -100px;
            background: rgba(255,215,0,0.15);
            animation-delay: 0s;
        }
        .blob2 {
            width: 500px;
            height: 500px;
            bottom: -150px;
            left: -150px;
            background: rgba(0,255,255,0.1);
            animation-delay: -3s;
        }
        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(30px, -20px) scale(1.05); }
        }
        /* Animasi border berputar untuk avatar */
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .rotating-border {
            position: absolute;
            top: -4px;
            left: -4px;
            right: -4px;
            bottom: -4px;
            border-radius: 50%;
            background: linear-gradient(45deg, #f06, #3cf, #f06);
            background-size: 200% 200%;
            animation: rotate 4s linear infinite;
            z-index: -1;
        }
        /* Efek hover pada card proyek */
        .project-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.2), 0 10px 10px -5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 relative">

    <!-- Background Blobs -->
    <div class="blob-bg" aria-hidden="true">
        <div class="blob blob1"></div>
        <div class="blob blob2"></div>
    </div>

    <div class="w-full max-w-5xl mx-auto relative z-10">
        <!-- Kartu Profil dengan efek glass -->
        <div class="backdrop-blur-xl bg-white/30 rounded-3xl shadow-2xl overflow-hidden border border-white/20 mb-8">
            <!-- Header dengan pola gelombang -->
            <div class="relative h-48 overflow-hidden bg-gradient-to-r from-blue-600/90 to-purple-600/90">
                <svg class="absolute bottom-0 w-full h-24 text-white/20" preserveAspectRatio="none" viewBox="0 0 1440 120" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0,32L48,37.3C96,43,192,53,288,58.7C384,64,480,64,576,58.7C672,53,768,43,864,48C960,53,1056,75,1152,80C1248,85,1344,75,1392,69.3L1440,64L1440,120L1392,120C1344,120,1248,120,1152,120C1056,120,960,120,864,120C768,120,672,120,576,120C480,120,384,120,288,120C192,120,96,120,48,120L0,120Z"/>
                </svg>
            </div>

            <!-- Konten Utama -->
            <div class="px-6 sm:px-8 pb-8 -mt-20 relative">
                <!-- Avatar dengan efek border berputar -->
                <div class="flex justify-center mb-6">
                    <div class="relative w-32 h-32">
                        <div class="rotating-border"></div>
                        <div class="w-32 h-32 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full border-4 border-white shadow-xl flex items-center justify-center">
                            <span class="text-5xl" role="img" aria-label="Emoji developer">👨‍💻</span>
                        </div>
                    </div>
                </div>

                <!-- Judul dan Bio -->
                <div class="text-center mb-8">
                    <h1 class="text-5xl font-extrabold text-gray-800 mb-2">Tentang Saya</h1>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                        Web Developer yang antusias menciptakan aplikasi inovatif dengan sentuhan kreatif.
                    </p>
                </div>

                <!-- Statistik Singkat -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
                    <div class="bg-white/70 backdrop-blur-sm rounded-xl p-4 text-center shadow-md border border-white/30">
                        <div class="text-3xl font-bold text-blue-600">3+</div>
                        <div class="text-sm text-gray-600">Tahun Pengalaman</div>
                    </div>
                    <div class="bg-white/70 backdrop-blur-sm rounded-xl p-4 text-center shadow-md border border-white/30">
                        <div class="text-3xl font-bold text-blue-600">20+</div>
                        <div class="text-sm text-gray-600">Proyek Selesai</div>
                    </div>
                    <div class="bg-white/70 backdrop-blur-sm rounded-xl p-4 text-center shadow-md border border-white/30">
                        <div class="text-3xl font-bold text-blue-600">10+</div>
                        <div class="text-sm text-gray-600">Klien Puas</div>
                    </div>
                    <div class="bg-white/70 backdrop-blur-sm rounded-xl p-4 text-center shadow-md border border-white/30">
                        <div class="text-3xl font-bold text-blue-600">24/7</div>
                        <div class="text-sm text-gray-600">Dukungan</div>
                    </div>
                </div>

                <!-- Perkenalan -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <span class="w-1 h-8 bg-gradient-to-b from-blue-500 to-purple-500 mr-3 rounded-full" aria-hidden="true"></span> Perkenalan
                    </h2>
                    <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-6 border border-white/30 shadow-lg">
                        <p class="text-gray-700 leading-relaxed text-lg">
                            Saya adalah seorang pengembang yang berkomitmen untuk menghadirkan solusi web berkualitas tinggi. 
                            Dengan pengalaman dalam berbagai teknologi modern, saya berfokus pada pembuatan aplikasi yang 
                            tidak hanya berfungsi optimal tetapi juga memberikan pengalaman pengguna yang luar biasa. 
                            Saya percaya bahwa kode yang bersih dan desain yang indah dapat berjalan beriringan.
                        </p>
                    </div>
                </section>

                <!-- Keahlian (dengan ikon dan card lebih menarik) -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                        <span class="w-1 h-8 bg-gradient-to-b from-blue-500 to-purple-500 mr-3 rounded-full" aria-hidden="true"></span> Keahlian Inti
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Backend Card -->
                        <div class="group bg-gradient-to-br from-blue-50 to-blue-100/70 backdrop-blur-sm rounded-2xl p-6 border border-blue-200/50 shadow-lg hover:shadow-xl transition">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 rounded-lg bg-blue-600 text-white flex items-center justify-center mr-3 text-xl">⚙️</div>
                                <h3 class="font-bold text-blue-900 text-lg">Backend Development</h3>
                            </div>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-center"><span class="text-blue-500 mr-2">✓</span> Laravel & PHP</li>
                                <li class="flex items-center"><span class="text-blue-500 mr-2">✓</span> Database Design (MySQL, PostgreSQL)</li>
                                <li class="flex items-center"><span class="text-blue-500 mr-2">✓</span> RESTful API Development</li>
                                <li class="flex items-center"><span class="text-blue-500 mr-2">✓</span> Authentication & Security</li>
                            </ul>
                        </div>
                        <!-- Frontend Card -->
                        <div class="group bg-gradient-to-br from-purple-50 to-purple-100/70 backdrop-blur-sm rounded-2xl p-6 border border-purple-200/50 shadow-lg hover:shadow-xl transition">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 rounded-lg bg-purple-600 text-white flex items-center justify-center mr-3 text-xl">🎨</div>
                                <h3 class="font-bold text-purple-900 text-lg">Frontend Development</h3>
                            </div>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-center"><span class="text-purple-500 mr-2">✓</span> Tailwind CSS</li>
                                <li class="flex items-center"><span class="text-purple-500 mr-2">✓</span> Blade Templating</li>
                                <li class="flex items-center"><span class="text-purple-500 mr-2">✓</span> Responsive Design</li>
                                <li class="flex items-center"><span class="text-purple-500 mr-2">✓</span> UI/UX Principles</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Proyek Unggulan (Portofolio mini) -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                        <span class="w-1 h-8 bg-gradient-to-b from-blue-500 to-purple-500 mr-3 rounded-full" aria-hidden="true"></span> Proyek Terbaru
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Proyek 1 -->
                        <div class="project-card bg-white/70 backdrop-blur-sm rounded-xl overflow-hidden border border-white/30 shadow-lg">
                            <div class="h-40 bg-gradient-to-r from-blue-400 to-cyan-400 flex items-center justify-center text-5xl">🛒</div>
                            <div class="p-5">
                                <h3 class="font-bold text-gray-800 mb-1">E-Commerce App</h3>
                                <p class="text-sm text-gray-600 mb-3">Laravel, Tailwind, MySQL</p>
                                <span class="inline-block px-3 py-1 text-xs font-semibold bg-blue-100 text-blue-800 rounded-full">Selesai</span>
                            </div>
                        </div>
                        <!-- Proyek 2 -->
                        <div class="project-card bg-white/70 backdrop-blur-sm rounded-xl overflow-hidden border border-white/30 shadow-lg">
                            <div class="h-40 bg-gradient-to-r from-purple-400 to-pink-400 flex items-center justify-center text-5xl">📊</div>
                            <div class="p-5">
                                <h3 class="font-bold text-gray-800 mb-1">Dashboard Admin</h3>
                                <p class="text-sm text-gray-600 mb-3">Laravel, Livewire, Tailwind</p>
                                <span class="inline-block px-3 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">Online</span>
                            </div>
                        </div>
                        <!-- Proyek 3 -->
                        <div class="project-card bg-white/70 backdrop-blur-sm rounded-xl overflow-hidden border border-white/30 shadow-lg">
                            <div class="h-40 bg-gradient-to-r from-green-400 to-emerald-400 flex items-center justify-center text-5xl">📱</div>
                            <div class="p-5">
                                <h3 class="font-bold text-gray-800 mb-1">API Restful</h3>
                                <p class="text-sm text-gray-600 mb-3">Laravel, JWT, PostgreSQL</p>
                                <span class="inline-block px-3 py-1 text-xs font-semibold bg-blue-100 text-blue-800 rounded-full">Dokumentasi</span>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Tech Stack dengan ikon lebih hidup -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                        <span class="w-1 h-8 bg-gradient-to-b from-blue-500 to-purple-500 mr-3 rounded-full" aria-hidden="true"></span> Tech Stack Favorit
                    </h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="group bg-white/70 backdrop-blur-sm border border-white/30 rounded-xl p-5 text-center hover:bg-white/90 transition">
                            <div class="text-4xl mb-2 group-hover:scale-110 transition">🔧</div>
                            <h3 class="font-semibold text-gray-800">Laravel 12</h3>
                            <p class="text-xs text-gray-500">Backend</p>
                        </div>
                        <div class="group bg-white/70 backdrop-blur-sm border border-white/30 rounded-xl p-5 text-center hover:bg-white/90 transition">
                            <div class="text-4xl mb-2 group-hover:scale-110 transition">💨</div>
                            <h3 class="font-semibold text-gray-800">Tailwind CSS</h3>
                            <p class="text-xs text-gray-500">Styling</p>
                        </div>
                        <div class="group bg-white/70 backdrop-blur-sm border border-white/30 rounded-xl p-5 text-center hover:bg-white/90 transition">
                            <div class="text-4xl mb-2 group-hover:scale-110 transition">📊</div>
                            <h3 class="font-semibold text-gray-800">MySQL</h3>
                            <p class="text-xs text-gray-500">Database</p>
                        </div>
                        <div class="group bg-white/70 backdrop-blur-sm border border-white/30 rounded-xl p-5 text-center hover:bg-white/90 transition">
                            <div class="text-4xl mb-2 group-hover:scale-110 transition">⚙️</div>
                            <h3 class="font-semibold text-gray-800">Vite</h3>
                            <p class="text-xs text-gray-500">Build Tool</p>
                        </div>
                    </div>
                </section>

                <!-- Layanan dengan grid lebih modern -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                        <span class="w-1 h-8 bg-gradient-to-b from-blue-500 to-purple-500 mr-3 rounded-full" aria-hidden="true"></span> Layanan Unggulan
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="flex items-start bg-white/50 backdrop-blur-sm p-5 rounded-xl border border-white/30">
                            <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 text-white flex items-center justify-center text-2xl shadow-lg">⚡</div>
                            <div class="ml-4">
                                <h3 class="font-bold text-gray-800">Aplikasi Cepat</h3>
                                <p class="text-sm text-gray-600">Optimasi performa untuk pengalaman pengguna terbaik.</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-white/50 backdrop-blur-sm p-5 rounded-xl border border-white/30">
                            <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-purple-600 text-white flex items-center justify-center text-2xl shadow-lg">🎨</div>
                            <div class="ml-4">
                                <h3 class="font-bold text-gray-800">Desain Modern</h3>
                                <p class="text-sm text-gray-600">Antarmuka yang bersih, responsif, dan menarik.</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-white/50 backdrop-blur-sm p-5 rounded-xl border border-white/30">
                            <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-green-500 to-green-600 text-white flex items-center justify-center text-2xl shadow-lg">🔒</div>
                            <div class="ml-4">
                                <h3 class="font-bold text-gray-800">Keamanan Terjamin</h3>
                                <p class="text-sm text-gray-600">Praktik terbaik untuk melindungi data dan sistem.</p>
                            </div>
                        </div>
                        <div class="flex items-start bg-white/50 backdrop-blur-sm p-5 rounded-xl border border-white/30">
                            <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 text-white flex items-center justify-center text-2xl shadow-lg">📈</div>
                            <div class="ml-4">
                                <h3 class="font-bold text-gray-800">Skalabilitas</h3>
                                <p class="text-sm text-gray-600">Arsitektur yang siap tumbuh mengikuti kebutuhan bisnis.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Testimoni singkat -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                        <span class="w-1 h-8 bg-gradient-to-b from-blue-500 to-purple-500 mr-3 rounded-full" aria-hidden="true"></span> Testimoni
                    </h2>
                    <div class="bg-white/70 backdrop-blur-sm p-6 rounded-2xl border border-white/30 shadow-lg italic text-gray-700 relative">
                        <span class="absolute top-0 left-4 text-6xl text-blue-200 opacity-50" aria-hidden="true">"</span>
                        <p class="relative z-10">Bekerja dengan developer ini sangat menyenangkan. Kode bersih, komunikasi lancar, dan hasilnya melebihi ekspektasi. Sangat direkomendasikan!</p>
                        <div class="flex items-center mt-4">
                            <div class="w-10 h-10 rounded-full bg-gray-300 flex items-center justify-center text-gray-600 font-bold">A</div>
                            <div class="ml-3">
                                <p class="font-semibold text-gray-800">Andi Pratama</p>
                                <p class="text-xs text-gray-500">CEO, TechStart</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Tombol Aksi dan Sosial -->
                <div class="border-t border-white/30 pt-8 text-center">
                    <p class="text-gray-700 mb-6">Tertarik berkolaborasi atau diskusi proyek?</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="/" class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-blue-700 text-white px-8 py-3 rounded-full hover:from-blue-700 hover:to-blue-800 transition font-semibold shadow-lg">
                            <i class="fas fa-arrow-left mr-2"></i> Kembali ke Beranda
                        </a>
                        <a href="mailto:developer@example.com?subject=Kolaborasi%20Proyek" 
                           class="inline-flex items-center justify-center bg-gradient-to-r from-purple-600 to-purple-700 text-white px-8 py-3 rounded-full hover:from-purple-700 hover:to-purple-800 transition font-semibold shadow-lg">
                            <i class="fas fa-envelope mr-2"></i> Hubungi Saya
                        </a>
                    </div>
                    <!-- Ikon sosial media -->
                    <div class="flex justify-center gap-6 mt-6 text-gray-600">
                        <a href="#" class="hover:text-blue-600 transition text-2xl" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        <a href="#" class="hover:text-blue-600 transition text-2xl" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="hover:text-blue-600 transition text-2xl" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="text-center text-white mt-8 text-sm opacity-80">
            <p>© 2026 Web Developer Kreatif. Dibangun dengan Laravel 12 & Tailwind CSS.</p>
        </footer>
    </div>

</body>
</html>