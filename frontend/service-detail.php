<?php
// services-detail.php
?>

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Paket Layanan | Concern - Software House Yogyakarta</title>

  <!-- Tailwind CDN -->
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
            'concern-primary':   '#6366f1',
            'concern-accent':    '#06b6d4',
            'concern-dark':      '#0f172a',
            'concern-darker':    '#020617',
          }
        }
      }
    }
  </script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Manrope:wght@500;600;700&display=swap" rel="stylesheet">

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-concern-darker text-slate-200 font-sans antialiased">

  <!-- Header -->
  <?php include 'includes/header.php'; ?>

  <!-- Main Content -->
  <main class="pt-20 md:pt-24">
    <section class="py-16 px-6">
      <div class="max-w-6xl mx-auto text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6" data-aos="fade-up">Paket Layanan Concern</h1>
        <p class="text-xl text-slate-400 max-w-3xl mx-auto mb-16" data-aos="fade-up" data-aos-delay="200">
          Pilih paket yang sesuai dengan kebutuhan bisnis Anda. Semua paket termasuk konsultasi gratis, clean code, dan support 3 bulan setelah launch.
        </p>

        <!-- Grid Paket -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Paket 1: Starter -->
          <div class="bg-slate-800/40 border border-slate-700 rounded-2xl overflow-hidden hover:border-concern-accent transition-all group shadow-xl" data-aos="fade-up" data-aos-delay="100">
            <div class="bg-gradient-to-br from-indigo-900 to-cyan-900 p-8 text-center">
              <h3 class="text-2xl font-bold text-white mb-2">Starter</h3>
              <p class="text-slate-300 text-lg">Rp 15 - 30 Juta</p>
              <p class="text-sm text-slate-400 mt-1">Cocok untuk UMKM & startup awal</p>
            </div>
            <div class="p-8">
              <ul class="space-y-4 text-slate-300 mb-8">
                <li class="flex items-center gap-3"><span class="text-concern-accent text-xl">✓</span> Website / Landing Page</li>
                <li class="flex items-center gap-3"><span class="text-concern-accent text-xl">✓</span> 3-5 Halaman</li>
                <li class="flex items-center gap-3"><span class="text-concern-accent text-xl">✓</span> Desain Responsif</li>
                <li class="flex items-center gap-3"><span class="text-concern-accent text-xl">✓</span> Integrasi Form Kontak</li>
                <li class="flex items-center gap-3"><span class="text-concern-accent text-xl">✓</span> Hosting & Domain Setup</li>
                <li class="flex items-center gap-3 text-slate-500"><span class="text-xl">✗</span> Backend kompleks</li>
              </ul>
              <a href="contact.php" 
                 class="block w-full py-4 bg-concern-primary hover:bg-indigo-600 rounded-xl font-semibold text-center transition shadow-lg shadow-indigo-900/30">
                Pilih Paket Ini
              </a>
            </div>
          </div>

          <!-- Paket 2: Professional (Rekomendasi) -->
          <div class="bg-slate-800/40 border-2 border-concern-accent rounded-2xl overflow-hidden shadow-2xl relative group" data-aos="fade-up" data-aos-delay="200">
            <div class="absolute top-0 right-0 bg-concern-accent text-slate-900 px-4 py-1 text-sm font-bold rounded-bl-xl">
              Rekomendasi
            </div>
            <div class="bg-gradient-to-br from-cyan-900 to-indigo-900 p-8 text-center">
              <h3 class="text-2xl font-bold text-white mb-2">Professional</h3>
              <p class="text-slate-300 text-lg">Rp 35 - 80 Juta</p>
              <p class="text-sm text-slate-400 mt-1">Untuk bisnis menengah yang butuh sistem lengkap</p>
            </div>
            <div class="p-8">
              <ul class="space-y-4 text-slate-300 mb-8">
                <li class="flex items-center gap-3"><span class="text-concern-accent text-xl">✓</span> Web Application / Sistem Manajemen</li>
                <li class="flex items-center gap-3"><span class="text-concern-accent text-xl">✓</span> Dashboard Admin + User</li>
                <li class="flex items-center gap-3"><span class="text-concern-accent text-xl">✓</span> Integrasi API & Database</li>
                <li class="flex items-center gap-3"><span class="text-concern-accent text-xl">✓</span> UI/UX Custom Design</li>
                <li class="flex items-center gap-3"><span class="text-concern-accent text-xl">✓</span> Mobile Responsive + PWA</li>
                <li class="flex items-center gap-3"><span class="text-concern-accent text-xl">✓</span> Support & Maintenance 6 bulan</li>
              </ul>
              <a href="contact.php" 
                 class="block w-full py-4 bg-concern-accent hover:bg-cyan-500 rounded-xl font-semibold text-slate-900 text-center transition shadow-lg shadow-cyan-900/30">
                Pilih Paket Ini
              </a>
            </div>
          </div>

          <!-- Paket 3: Enterprise -->
          <div class="bg-slate-800/40 border border-slate-700 rounded-2xl overflow-hidden hover:border-concern-primary transition-all group shadow-xl" data-aos="fade-up" data-aos-delay="300">
            <div class="bg-gradient-to-br from-indigo-900 to-purple-900 p-8 text-center">
              <h3 class="text-2xl font-bold text-white mb-2">Enterprise</h3>
              <p class="text-slate-300 text-lg">Custom (Rp 100 Juta+)</p>
              <p class="text-sm text-slate-400 mt-1">Solusi skala besar & kompleks</p>
            </div>
            <div class="p-8">
              <ul class="space-y-4 text-slate-300 mb-8">
                <li class="flex items-center gap-3"><span class="text-concern-accent text-xl">✓</span> Sistem ERP / CRM Custom</li>
                <li class="flex items-center gap-3"><span class="text-concern-accent text-xl">✓</span> Integrasi AI / Machine Learning</li>
                <li class="flex items-center gap-3"><span class="text-concern-accent text-xl">✓</span> Mobile App (iOS & Android)</li>
                <li class="flex items-center gap-3"><span class="text-concern-accent text-xl">✓</span> Multi-user & Role Management</li>
                <li class="flex items-center gap-3"><span class="text-concern-accent text-xl">✓</span> Cloud Deployment (AWS/GCP)</li>
                <li class="flex items-center gap-3"><span class="text-concern-accent text-xl">✓</span> Dedicated Team & SLA</li>
              </ul>
              <a href="contact.php" 
                 class="block w-full py-4 bg-concern-primary hover:bg-indigo-600 rounded-xl font-semibold text-center transition shadow-lg shadow-indigo-900/30">
                Konsultasi Gratis
              </a>
            </div>
          </div>
        </div>

        <!-- CTA Akhir -->
        <div class="text-center mt-16">
          <p class="text-xl text-slate-300 mb-6">Butuh paket custom atau diskusi lebih lanjut?</p>
          <a href="contact.php" 
             class="inline-flex items-center px-10 py-5 bg-gradient-to-r from-concern-accent to-cyan-500 hover:from-cyan-500 hover:to-concern-accent rounded-xl font-bold text-slate-900 text-lg shadow-2xl shadow-cyan-900/40 transition-all duration-300">
            Hubungi Kami Sekarang
            <svg class="w-6 h-6 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </a>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <!-- Scripts -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: true });
  </script>
</body>
</html>