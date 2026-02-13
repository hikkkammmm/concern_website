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
<link rel="icon" href="assets\images\icon-concern-dev.jpeg" type="image/x-icon">
<link rel="apple-touch-icon" href="assets\images\icon-concern-dev.jpeg">

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
        Custom web & mobile apps, sistem bisnis, kode bersih, dan dukungan berkelanjutan.
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


 
    <!-- about us -->
    <?php include 'about.php'; ?>
<!-- 
    services -->
    <?php include 'services.php'; ?>

    <!-- ================= PROSES KERJA ================= -->
    <section class="py-16 px-6 bg-concern-dark">
      <div class="max-w-5xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-12" data-aos="fade-up">workflow</h2>

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

            <!-- Step 3 -->
          <div class="relative flex flex-col md:flex-row items-start md:items-center gap-6 md:gap-0" data-aos="fade-up">
            <div class="flex items-center justify-center md:justify-end w-full md:w-1/2 md:pr-12 z-10">
              <div class="w-14 h-14 md:w-16 md:h-16 rounded-full bg-concern-primary flex items-center justify-center text-2xl font-bold text-white flex-shrink-0">
                3
              </div>
            </div>
            <div class="w-full md:w-1/2 md:pl-12">
              <h3 class="text-2xl font-semibold mb-3 text-center md:text-left">Development</h3>
              <p class="text-slate-400 text-center md:text-left">Pengembangan aplikasi sesuai dengan desain dan kebutuhan yang telah disepakati.</p>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="relative flex flex-col md:flex-row-reverse items-start md:items-center gap-6 md:gap-0" data-aos="fade-up" data-aos-delay="100">
            <div class="flex items-center justify-center md:justify-start w-full md:w-1/2 md:pl-12 z-10">
              <div class="w-14 h-14 md:w-16 md:h-16 rounded-full bg-concern-primary flex items-center justify-center text-2xl font-bold text-white flex-shrink-0">
                4
              </div>
            </div>
            <div class="w-full md:w-1/2 md:pr-12">
              <h3 class="text-2xl font-semibold mb-3 text-center md:text-left">review & revisi</h3>
              <p class="text-slate-400 text-center md:text-left">Review dan revisi aplikasi berdasarkan feedback dari klien.</p>
            </div>
          </div>

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

           <!-- Step 6 -->
          <div class="relative flex flex-col md:flex-row-reverse items-start md:items-center gap-6 md:gap-0" data-aos="fade-up" data-aos-delay="100">
            <div class="flex items-center justify-center md:justify-start w-full md:w-1/2 md:pl-12 z-10">
              <div class="w-14 h-14 md:w-16 md:h-16 rounded-full bg-concern-primary flex items-center justify-center text-2xl font-bold text-white flex-shrink-0">
                6
              </div>
            </div>
            <div class="w-full md:w-1/2 md:pr-12">
              <h3 class="text-2xl font-semibold mb-3 text-center md:text-left">after sales & support</h3>
              <p class="text-slate-400 text-center md:text-left">Dukungan teknis dan pemeliharaan aplikasi setelah pengiriman.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ================= TECH STACK ================= -->
    <?php include 'techstack.php'; ?>

    <!-- news -->
    <?php include 'news.php'; ?>

     <!-- portofolio -->

     <?php include 'portofolio.php'; ?>

    <!-- ================= CONTACT SECTION ================= -->
     <?php include 'contact.php'; ?>

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