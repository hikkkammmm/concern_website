<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
<meta name="description" content="Concern – Software House Yogyakarta spesialis custom web app, mobile app, AI solution, dan UI/UX design. Tepat waktu, clean code, support panjang.">
<meta name="keywords" content="software house yogyakarta, custom software, mobile app development, AI solution, web development indonesia">
<meta name="author" content="Concern">

<!-- Open Graph untuk share LinkedIn/FB/IG -->
<meta property="og:title" content="Concern – Software House Yogyakarta">
<meta property="og:description" content="Membangun software custom yang berdampak untuk bisnis Anda.">
<meta property="og:image" content="https://concern.dev/assets/images/og-image.jpg"> <!-- buat gambar 1200x630 -->
<meta property="og:url" content="https://concern.dev">
<meta property="og:type" content="website">

<!-- Favicon (upload ke assets/images/) -->
<link rel="icon" href="assets/images/apple_touch_icon.jpg" type="image/x-icon">
<link rel="apple-touch-icon" href="assets/images/apple_touch_icon.png">

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Concern</title>
  
  <!-- Tailwind CSS CDN (paling mudah untuk mulai) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'system-ui', 'sans-serif'],
            display: ['Manrope', 'sans-serif'],
          },
          colors: {
            'concern-primary':   '#6366f1',   // indigo
            'concern-accent':    '#06b6d4',   // cyan
            'concern-dark':      '#0f172a',
            'concern-darker':    '#020617',
          }
        }
      }
    }
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Manrope:wght@500;600;700&display=swap" rel="stylesheet">

  <!-- AOS untuk animasi scroll (opsional tapi bagus) -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-concern-darker text-slate-200 min-h-screen font-sans antialiased">

  <!-- ================= NAVBAR ================= -->
  <?php include 'includes/header.php'; ?>

  <!-- ================= HERO SECTION ================= -->
  <section class="relative min-h-screen flex items-center justify-center px-6 py-20 overflow-hidden">
    <!-- background gradient subtle -->
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-950/20 via-concern-darker to-cyan-950/10 pointer-events-none"></div>

    <div class="relative z-10 max-w-5xl mx-auto text-center" data-aos="fade-up" data-aos-duration="900">
      <h1 class="text-5xl sm:text-6xl md:text-7xl font-bold tracking-tight leading-tight mb-6">
        Concern
        <span class="text-concern-accent">membangun</span><br>
        software yang <span class="text-concern-primary">berdampak</span>
      </h1>

      <p class="text-lg sm:text-xl md:text-2xl text-slate-400 max-w-3xl mx-auto mb-10 leading-relaxed">
        Custom web & mobile apps, sistem bisnis, solusi AI — <strong>tepat waktu</strong>, kode bersih, dan dukungan berkelanjutan.
      </p>

      <div class="flex flex-col sm:flex-row gap-5 justify-center items-center">
        <a href="#kontak" 
           class="px-8 py-4 bg-concern-primary hover:bg-indigo-500 text-white font-semibold rounded-lg text-lg transition-all duration-300 shadow-lg shadow-indigo-900/30 hover:shadow-indigo-700/50">
          Mulai Proyekmu Sekarang
        </a>
        <a href="#portfolio" 
           class="px-8 py-4 border-2 border-slate-600 hover:border-slate-400 text-slate-300 hover:text-white font-semibold rounded-lg text-lg transition-all duration-300">
          Lihat Portfolio
        </a>
      </div>
    </div>
  </section>

    <!-- ================= TENTANG KAMI ================= -->
<section id="about" class="py-20 px-6">
  <div class="max-w-5xl mx-auto text-center">
    <h2 class="text-4xl md:text-5xl font-bold mb-8" data-aos="fade-up">Concern</h2>
    <p class="text-xl text-slate-300 leading-relaxed max-w-4xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="200">
      Concern adalah software house berbasis di Yogyakarta yang fokus membangun solusi digital berkualitas tinggi untuk bisnis lokal & internasional. 
      Dengan tim berpengalaman lebih dari 5 tahun di industri, kami mengutamakan clean code, pengiriman tepat waktu, dan dukungan purna jual yang solid.
    </p>

    <div class="grid md:grid-cols-3 gap-8 text-left">
      <div data-aos="fade-up" data-aos-delay="100">
        <div class="text-5xl mb-4 text-concern-accent">98%</div>
        <p class="text-slate-400">Tingkat kepuasan klien</p>
      </div>
      <div data-aos="fade-up" data-aos-delay="200">
        <div class="text-5xl mb-4 text-concern-accent">30+</div>
        <p class="text-slate-400">Proyek selesai</p>
      </div>
      <div data-aos="fade-up" data-aos-delay="300">
        <div class="text-5xl mb-4 text-concern-accent">7+</div>
        <p class="text-slate-400">Tahun pengalaman tim</p>
      </div>
    </div>
  </div>
</section>

  <!-- ================= SERVICES (4 kolom) ================= -->
  <section id="services" class="py-20 px-6 bg-concern-dark">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-4xl md:text-5xl font-bold text-center mb-16" data-aos="fade-up">Apa yang Kami Kerjakan</h2>

      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="p-8 bg-slate-800/40 rounded-xl border border-slate-700 hover:border-concern-primary/60 transition-all group" data-aos="fade-up" data-aos-delay="100">
          <div class="text-6xl mb-6 text-concern-accent group-hover:scale-110 transition-transform">🌐</div>
          <h3 class="text-2xl font-semibold mb-4">Web Application</h3>
          <p class="text-slate-400">Dashboard, ERP, CRM, sistem internal perusahaan</p>
        </div>

        <div class="p-8 bg-slate-800/40 rounded-xl border border-slate-700 hover:border-concern-primary/60 transition-all group" data-aos="fade-up" data-aos-delay="200">
          <div class="text-6xl mb-6 text-concern-accent group-hover:scale-110 transition-transform">📱</div>
          <h3 class="text-2xl font-semibold mb-4">Mobile Apps</h3>
          <p class="text-slate-400">Aplikasi iOS & Android (Flutter / React Native / Native)</p>
        </div>

        <div class="p-8 bg-slate-800/40 rounded-xl border border-slate-700 hover:border-concern-primary/60 transition-all group" data-aos="fade-up" data-aos-delay="300">
          <div class="text-6xl mb-6 text-concern-accent group-hover:scale-110 transition-transform">🤖</div>
          <h3 class="text-2xl font-semibold mb-4">AI & Automation</h3>
          <p class="text-slate-400">Chatbot, prediksi, computer vision, RPA</p>
        </div>

        <div class="p-8 bg-slate-800/40 rounded-xl border border-slate-700 hover:border-concern-primary/60 transition-all group" data-aos="fade-up" data-aos-delay="400">
          <div class="text-6xl mb-6 text-concern-accent group-hover:scale-110 transition-transform">🎨</div>
          <h3 class="text-2xl font-semibold mb-4">UI/UX Design</h3>
          <p class="text-slate-400">Desain modern, prototipe, user flow yang intuitif</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= PLACEHOLDER untuk bagian lain =================
  <section id="portfolio" class="py-20 px-6">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-4xl md:text-5xl font-bold mb-8" data-aos="fade-up">Portfolio</h2>
      <p class="text-xl text-slate-400 mb-12" data-aos="fade-up" data-aos-delay="200">
        Segera ditampilkan beberapa proyek terbaik kami...
      </p> -->
      <!-- nanti kita tambah grid portfolio di sini -->
    <!-- </div>
  </section> -->



    <!-- ================= PROSES KERJA ================= -->
    <section class="py-16 px-6 bg-concern-dark">
      <div class="max-w-5xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-12" data-aos="fade-up">Bagaimana Kami Bekerja</h2>

        <div class="relative space-y-12 md:space-y-16">
          <!-- Garis vertikal hanya di desktop, di mobile hilang atau ganti jadi garis samping -->
          <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-slate-700 top-0 bottom-0"></div>

          <!-- Step 1 -->
          <div class="relative flex flex-col md:flex-row items-start md:items-center gap-6 md:gap-0" data-aos="fade-up">
            <div class="flex items-center justify-center md:justify-end w-full md:w-1/2 md:pr-12 z-10">
              <div class="w-14 h-14 md:w-16 md:h-16 rounded-full bg-concern-primary flex items-center justify-center text-2xl font-bold text-white flex-shrink-0">
                1
              </div>
            </div>
            <div class="w-full md:w-1/2 md:pl-12">
              <h3 class="text-2xl font-semibold mb-3 text-center md:text-left">Discovery</h3>
              <p class="text-slate-400 text-center md:text-left">Diskusi kebutuhan, goal bisnis, dan scope proyek.</p>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="relative flex flex-col md:flex-row-reverse items-start md:items-center gap-6 md:gap-0" data-aos="fade-up" data-aos-delay="100">
            <div class="flex items-center justify-center md:justify-start w-full md:w-1/2 md:pl-12 z-10">
              <div class="w-14 h-14 md:w-16 md:h-16 rounded-full bg-concern-primary flex items-center justify-center text-2xl font-bold text-white flex-shrink-0">
                2
              </div>
            </div>
            <div class="w-full md:w-1/2 md:pr-12">
              <h3 class="text-2xl font-semibold mb-3 text-center md:text-left">Design & Prototype</h3>
              <p class="text-slate-400 text-center md:text-left">UI/UX design + clickable prototype untuk approval.</p>
            </div>
          </div>

          <!-- Step 3 (ulangi pola sama untuk step 3-5, ganti md:flex-row / md:flex-row-reverse bergantian) -->
          <!-- ... copy paste step di atas, ganti nomor & konten ... -->

          <!-- Step 5 contoh -->
          <div class="relative flex flex-col md:flex-row items-start md:items-center gap-6 md:gap-0" data-aos="fade-up" data-aos-delay="400">
            <div class="flex items-center justify-center md:justify-end w-full md:w-1/2 md:pr-12 z-10">
              <div class="w-14 h-14 md:w-16 md:h-16 rounded-full bg-concern-primary flex items-center justify-center text-2xl font-bold text-white flex-shrink-0">
                5
              </div>
            </div>
            <div class="w-full md:w-1/2 md:pl-12">
              <h3 class="text-2xl font-semibold mb-3 text-center md:text-left">Deployment & Support</h3>
              <p class="text-slate-400 text-center md:text-left">Pengiriman aplikasi ke lingkungan produksi dan dukungan teknis pasca-pengiriman.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

        

        <!-- Tambah step 3-5 serupa: Development, Testing & QA, Deployment & Support -->
      </div>
    </div>
  </div>
</section>

  <!-- ================= PORTFOLIO GRID ================= -->
<section id="portfolio" class="py-20 px-6 bg-concern-dark">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-4xl md:text-5xl font-bold text-center mb-4" data-aos="fade-up">Portfolio Kami</h2>
    <p class="text-xl text-slate-400 text-center mb-16 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
      Beberapa proyek yang telah kami kerjakan dengan bangga — dari web app hingga solusi AI.
    </p>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Project 1 -->
      <div class="group relative overflow-hidden rounded-xl bg-slate-800/40 border border-slate-700 hover:border-concern-accent transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
        <div class="aspect-[4/3] overflow-hidden">
          <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80&w=800" 
               alt="Project 1 - Dashboard Analitik" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Dashboard Analitik Bisnis</h3>
          <p class="text-slate-400 mb-4">Web app real-time monitoring dengan integrasi API & chart interaktif.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">React</span>
            <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Node.js</span>
            <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Chart.js</span>
          </div>
        </div>
        <!-- Overlay hover -->
        <div class="absolute inset-0 bg-gradient-to-t from-concern-primary/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-8">
          <a href="#" class="px-6 py-3 bg-white text-concern-dark font-semibold rounded-lg hover:bg-slate-200 transition">
            Lihat Detail
          </a>
        </div>
      </div>

      <!-- Project 2 (copy-paste & ganti gambar/deskripsi) -->
      <div class="group relative overflow-hidden rounded-xl bg-slate-800/40 border border-slate-700 hover:border-concern-accent transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
        <div class="aspect-[4/3] overflow-hidden">
          <img src="assets/images/pproject1.jpg" 
               alt="Project 2 - Mobile App" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Aplikasi Manajemen Toko</h3>
          <p class="text-slate-400 mb-4">Flutter cross-platform untuk owner & staff.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Flutter</span>
            <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Firebase</span>
          </div>
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-concern-primary/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-8">
          <a href="#" class="px-6 py-3 bg-white text-concern-dark font-semibold rounded-lg hover:bg-slate-200 transition">
            Lihat Detail
          </a>
        </div>
      </div>


      <!-- project 3 -->
       <div class="group relative overflow-hidden rounded-xl bg-slate-800/40 border border-slate-700 hover:border-concern-accent transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
        <div class="aspect-[4/3] overflow-hidden">
          <img src="https://images.unsplash.com/photo-1551650975-60cb5c8b0b7e?auto=format&fit=crop&q=80&w=800" 
               alt="Project 2 - Mobile App" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Aplikasi Manajemen Toko</h3>
          <p class="text-slate-400 mb-4">Flutter cross-platform untuk owner & staff.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Flutter</span>
            <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Firebase</span>
          </div>
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-concern-primary/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-8">
          <a href="#" class="px-6 py-3 bg-white text-concern-dark font-semibold rounded-lg hover:bg-slate-200 transition">
            Lihat Detail
          </a>
        </div>
      </div>

      <!-- project 5 -->
       <div class="group relative overflow-hidden rounded-xl bg-slate-800/40 border border-slate-700 hover:border-concern-accent transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
        <div class="aspect-[4/3] overflow-hidden">
          <img src="https://images.unsplash.com/photo-1551650975-60cb5c8b0b7e?auto=format&fit=crop&q=80&w=800" 
               alt="Project 2 - Mobile App" 
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Aplikasi Manajemen Toko</h3>
          <p class="text-slate-400 mb-4">Flutter cross-platform untuk owner & staff.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Flutter</span>
            <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Firebase</span>
          </div>
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-concern-primary/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-8">
          <a href="#" class="px-6 py-3 bg-white text-concern-dark font-semibold rounded-lg hover:bg-slate-200 transition">
            Lihat Detail
          </a>
        </div>
      </div>

      <!-- Tambahkan 1-4 project lagi sesuai kebutuhan, copy struktur di atas -->
      <!-- Contoh project 3 & 4 bisa kamu tambah sendiri -->

    </div>
  </div>


</section>
<!-- ================= KONTAK ================= -->
<section id="kontak" class="py-20 px-6 bg-concern-darker">
  <div class="max-w-5xl mx-auto">
    <h2 class="text-4xl md:text-5xl font-bold text-center mb-4" data-aos="fade-up">Hubungi Kami</h2>
    <p class="text-xl text-slate-400 text-center mb-12 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
      Pilih cara yang paling nyaman untuk diskusi proyekmu — kami balas cepat!
    </p>

    <!-- Pilihan Kontak Cepat -->
    <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-4 gap-6 mb-16" data-aos="fade-up" data-aos-delay="300">
      <!-- Email -->
      <a href="mailto:cemengsableng@gmail.com" 
         class="group flex flex-col items-center p-6 bg-slate-800/50 border border-slate-700 rounded-xl hover:border-concern-accent hover:bg-slate-800/80 transition-all duration-300">
        <svg class="w-12 h-12 mb-4 text-concern-accent group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
          <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
        </svg>
        <span class="font-semibold text-lg">Email</span>
        <span class="text-sm text-slate-400 mt-1">cemengsableng@gmail.com</span>
      </a>

      <!-- WhatsApp -->
      <a href="https://wa.me/6281234567890?text=Halo%20Concern,%20saya%20mau%20konsultasi%20proyek" 
         target="_blank" rel="noopener noreferrer"
         class="group flex flex-col items-center p-6 bg-slate-800/50 border border-slate-700 rounded-xl hover:border-concern-accent hover:bg-slate-800/80 transition-all duration-300">
        <svg class="w-12 h-12 mb-4 text-concern-accent group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.198-.347.223-.644.075-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.297-.497.099-.198.05-.371-.025-.52-.074-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 2C6.488 2 2 6.487 2 12.05c0 2.122.583 4.157 1.688 5.948l-1.974 7.201 7.355-1.93c1.724.94 3.66 1.436 5.634 1.436h.004c5.562 0 10.05-4.487 10.05-10.05 0-2.682-1.048-5.213-2.957-7.11z"/>
        </svg>
        <span class="font-semibold text-lg">WhatsApp</span>
        <span class="text-sm text-slate-400 mt-1">+62 852-1143-5617</span>
      </a>

      <!-- Instagram -->
      <a href="https://www.instagram.com/hikkammm_" 
         target="_blank" rel="noopener noreferrer"
         class="group flex flex-col items-center p-6 bg-slate-800/50 border border-slate-700 rounded-xl hover:border-concern-accent hover:bg-slate-800/80 transition-all duration-300">
        <svg class="w-12 h-12 mb-4 text-concern-accent group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.332.014 7.052.072 2.579.227.227 2.579.072 7.052.014 8.332 0 8.741 0 12c0 3.259.014 3.668.072 4.948.155 4.473 2.507 6.825 6.98 6.98C8.332 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.473-.155 6.825-2.507 6.98-6.98.058-1.28.072-1.689.072-4.948 0-3.259-.014-3.668-.072-4.948-.155-4.473-2.507-6.825-6.98-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 11-2.881 0 1.44 1.44 0 012.881 0z"/>
        </svg>
        <span class="font-semibold text-lg">Instagram</span>
        <span class="text-sm text-slate-400 mt-1">@hikkammm_</span>
      </a>

      <!-- Telegram -->
      <a href="https://t.me/concerndev" 
         target="_blank" rel="noopener noreferrer"
         class="group flex flex-col items-center p-6 bg-slate-800/50 border border-slate-700 rounded-xl hover:border-concern-accent hover:bg-slate-800/80 transition-all duration-300">
        <svg class="w-12 h-12 mb-4 text-concern-accent group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 0C5.925 0 1 4.925 1 11c0 2.653.94 5.076 2.504 6.986L2 24l6.336-1.355A10.845 10.845 0 0012 22c6.075 0 11-4.925 11-11S18.075 0 12 0zm5.896 7.312c-.164.462-1.003 2.148-1.265 2.562-.262.414-.51.464-.923.3-.413-.164-1.746-.68-3.326-2.046-.488-.355-.916-.53-1.272-.552-.356-.022-.777.084-1.262.32-.485.236-1.03.576-1.03 1.368 0 .792.499 1.182 1.04 1.418.541.236 1.212.458 1.803.636.591.178 1.102.383 1.493.636.391.253.737.596.737 1.182 0 .586-.492 1.084-1.182 1.182-.69.098-1.378-.022-1.968-.36-.59-.338-1.084-.822-1.968-1.418l-.984-.636c-.262-.178-.524-.356-.738-.636-.214-.28-.378-.636-.378-1.084 0-.448.164-.822.492-1.122.328-.3.738-.498 1.182-.636.444-.138.886-.2 1.328-.2.442 0 .886.062 1.328.2.442.138.822.378 1.122.738.3.36.524.822.636 1.378.112.556.112 1.122 0 1.678-.112.556-.336 1.038-.636 1.378l-.984.984c-.262.262-.524.486-.822.636-.298.15-.636.236-.984.236-.348 0-.686-.086-.984-.236-.298-.15-.56-.374-.822-.636l-1.182-1.182c-.262-.262-.486-.524-.636-.822-.15-.298-.236-.636-.236-.984 0-.348.086-.686.236-.984.15-.298.374-.56.636-.822l.984-.984c.262-.262.524-.486.822-.636.298-.15.636-.236.984-.236.348 0 .686.086.984.236.298.15.56.374.822.636l1.182 1.182c.262.262.486.524.636.822.15.298.236.636.236.984 0 .348-.086.686-.236.984z"/>
        </svg>
        <span class="font-semibold text-lg">Telegram</span>
        <span class="text-sm text-slate-400 mt-1">@concerndev</span>
      </a>
    </div>

    <!-- Form Pengiriman Pesan (tetap seperti sebelumnya) -->
    <div class="mt-12">
      <h3 class="text-2xl font-semibold text-center mb-8">Atau Kirim Pesan Langsung</h3>

      <?php
      if (isset($_GET['status'])) {
          if ($_GET['status'] === 'success') {
              echo '<div class="mb-8 p-4 bg-green-900/50 border border-green-700 rounded-lg text-green-300 text-center">Pesan berhasil dikirim! Kami akan segera balas.</div>';
          } elseif ($_GET['status'] === 'error') {
              $msg = $_GET['msg'] ?? 'Terjadi kesalahan. Coba lagi.';
              echo '<div class="mb-8 p-4 bg-red-900/50 border border-red-700 rounded-lg text-red-300 text-center">' . htmlspecialchars($msg) . '</div>';
          }
      }
      ?>

      <form action="process/contact.php" method="POST" class="grid md:grid-cols-2 gap-6" data-aos="fade-up" data-aos-delay="400">
        <div>
          <label for="name" class="block text-sm font-medium mb-2">Nama Lengkap</label>
          <input type="text" id="name" name="name" required class="w-full px-4 py-3 bg-slate-800 border border-slate-700 rounded-lg focus:outline-none focus:border-concern-accent">
        </div>
        <div>
          <label for="email" class="block text-sm font-medium mb-2">Email</label>
          <input type="email" id="email" name="email" required class="w-full px-4 py-3 bg-slate-800 border border-slate-700 rounded-lg focus:outline-none focus:border-concern-accent">
        </div>
        <div class="md:col-span-2">
          <label for="phone" class="block text-sm font-medium mb-2">Nomor Telepon / WA</label>
          <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 bg-slate-800 border border-slate-700 rounded-lg focus:outline-none focus:border-concern-accent">
        </div>
        <div class="md:col-span-2">
          <label for="message" class="block text-sm font-medium mb-2">Ceritakan Proyekmu</label>
          <textarea id="message" name="message" rows="6" required class="w-full px-4 py-3 bg-slate-800 border border-slate-700 rounded-lg focus:outline-none focus:border-concern-accent"></textarea>
        </div>
        <div class="md:col-span-2 text-center">
          <button type="submit" class="px-10 py-4 bg-concern-primary hover:bg-indigo-600 text-white font-semibold rounded-lg transition shadow-lg shadow-indigo-900/30">
            Kirim Pesan
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
  <!-- ================= FOOTER ================= -->
  <?php include 'includes/footer.php'; ?>

  <!-- Scripts -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true,
      easing: 'ease-out'
    });
  </script>

</body>
</html>