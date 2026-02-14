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
<link rel="icon" href="assets/images/icon-concern-dev.jpeg" type="image/x-icon">
<link rel="apple-touch-icon" href="assets/images/icon-concern-dev.jpeg">

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
<section class="relative min-h-screen flex items-center justify-center px-6 py-20 overflow-hidden bg-slate-950">
  
  <div class="absolute inset-0 overflow-hidden pointer-events-none">
    <div class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] bg-indigo-600/20 rounded-full blur-[120px] animate-pulse"></div>
    <div class="absolute -bottom-[10%] -right-[10%] w-[40%] h-[40%] bg-cyan-600/10 rounded-full blur-[120px] animate-pulse" style="animation-delay: 2s;"></div>
    <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay"></div>
  </div>

  <div class="relative z-10 max-w-6xl mx-auto text-center">
    
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800/50 border border-slate-700 mb-8" data-aos="fade-down" data-aos-delay="100">
      <span class="relative flex h-2 w-2">
        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-concern-primary opacity-75"></span>
        <span class="relative inline-flex rounded-full h-2 w-2 bg-concern-primary"></span>
      </span>
      <span class="text-xs font-medium text-slate-300 tracking-wider uppercase italic">Available for new projects</span>
    </div>

    <h1 class="text-5xl sm:text-7xl md:text-8xl font-black tracking-tighter leading-[1.1] mb-8" data-aos="zoom-out" data-aos-duration="1000">
      Concern <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-cyan-400">Membangun</span><br>
      Software yang <span class="relative inline-block">
        <span class="relative z-10 text-white">Berdampak</span>
        <span class="absolute bottom-2 left-0 w-full h-3 bg-indigo-500/30 -z-10"></span>
      </span>
    </h1>

    <!-- <p class="text-lg sm:text-xl md:text-2xl text-slate-400 max-w-3xl mx-auto mb-12 leading-relaxed font-light" data-aos="fade-up" data-aos-delay="400">
      Kami bukan sekadar coding. Kami membangun <span class="text-white font-normal text-slate-200">sistem bisnis</span> yang scalable dengan standar kode industri dan desain yang memikat.
    </p> -->

   <div class="flex flex-col sm:flex-row gap-6 justify-center items-center" data-aos="fade-up" data-aos-delay="600">
  <a href="#kontak" 
     class="group relative px-10 py-5 bg-indigo-600 text-white font-bold rounded-xl text-lg transition-all duration-300 hover:scale-105 hover:bg-indigo-500 active:scale-95 shadow-[0_0_20px_rgba(79,70,229,0.4)]">
    Mulai Proyekmu
    <svg class="inline-block ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
  </a>
  
  <a href="#portfolio" 
     class="px-10 py-5 border border-slate-700 hover:border-slate-500 bg-slate-900/40 text-slate-300 hover:text-white font-bold rounded-xl text-lg backdrop-blur-sm transition-all duration-300">
    Lihat Portfolio
  </a>
</div>

    <div class="mt-10 flex justify-center items-center gap-3" data-aos="fade-up" data-aos-delay="800">
      <div class="relative flex h-3 w-3">
        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
        <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
      </div>
      <span class="text-sm font-medium text-slate-500 tracking-wide">
        Available for new projects in <span class="text-slate-300">2026</span>
      </span>
    </div>
  </div>
</section>


<!--  
about  -->
    <?php include 'about.php'; ?>
<!-- 
    services -->
    <?php include 'services.php'; ?>

    <!-- ================= WORKFLOW ================= -->
<section class="py-20 px-6 bg-concern-dark">
  <div class="max-w-5xl mx-auto">
    
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold" data-aos="fade-up">
        Workflow
      </h2>
    </div>

    <div class="relative">

      <!-- Vertical Line (Desktop Only) -->
      <div class="hidden md:block absolute left-1/2 -translate-x-1/2 top-0 bottom-0 w-0.5 bg-slate-700"></div>

      <?php
      $steps = [
        ["Discovery", "Diskusi kebutuhan, goal bisnis, dan scope proyek."],
        ["Design & Prototype", "UI/UX design + clickable prototype untuk approval."],
        ["Development", "Pengembangan aplikasi sesuai desain dan kebutuhan yang telah disepakati."],
        ["Review & Revision", "Revisi aplikasi berdasarkan feedback dari klien."],
        ["Deployment", "Deploy ke production server dan konfigurasi final."],
        ["After Sales Support", "Maintenance, monitoring, dan dukungan teknis berkelanjutan."]
      ];

      foreach ($steps as $index => $step) :
        $isEven = $index % 2 === 0;
      ?>

      <div class="relative flex flex-col <?= $isEven ? 'md:flex-row' : 'md:flex-row-reverse' ?> 
                  items-start md:items-center gap-6 md:gap-0 mb-16"
           data-aos="fade-up"
           data-aos-delay="<?= $index * 100 ?>">

        <!-- Number Circle -->
        <div class="flex items-center justify-center 
                    w-full md:w-1/2 
                    <?= $isEven ? 'md:pr-12 md:justify-end' : 'md:pl-12 md:justify-start' ?> 
                    z-10">

          <div class="w-14 h-14 md:w-16 md:h-16 rounded-full 
                      bg-concern-primary 
                      flex items-center justify-center 
                      text-xl font-bold text-white
                      shadow-lg shadow-indigo-900/40
                      transition hover:scale-110">
            <?= $index + 1 ?>
          </div>
        </div>

        <!-- Content -->
        <div class="w-full md:w-1/2 <?= $isEven ? 'md:pl-12' : 'md:pr-12' ?>">
          <h3 class="text-2xl font-semibold mb-3 text-center md:text-left">
            <?= $step[0]; ?>
          </h3>
          <p class="text-slate-400 text-center md:text-left">
            <?= $step[1]; ?>
          </p>
        </div>

      </div>

      <?php endforeach; ?>

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