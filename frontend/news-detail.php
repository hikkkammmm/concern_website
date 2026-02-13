<?php
// news-detail.php

// Data dummy berita (nanti ganti fetch dari backend API)
$newsItems = [
    1 => [
        'title' => 'Concern Ikut Tren AI di Jogja 2026',
        'date' => 'Februari 2026',
        'category' => 'Company Update',
        'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=1200', // ganti dengan gambar real
        'content' => '
            <p>Tahun 2026 menjadi tahun besar bagi Concern dalam mengadopsi kecerdasan buatan (AI) untuk mendukung bisnis lokal di Yogyakarta dan sekitarnya.</p>
            <p>Kami telah mengintegrasikan Large Language Models (LLM) seperti Grok dan model open-source untuk otomatisasi customer service, analisis data bisnis, serta pembuatan konten marketing yang personal.</p>
            <p>Beberapa proyek pilot sudah berjalan dengan UMKM di Jogja, termasuk chatbot WhatsApp untuk toko retail dan prediksi stok barang menggunakan machine learning sederhana.</p>
            <p>Ke depan, Concern berkomitmen untuk terus mengembangkan solusi AI yang terjangkau, etis, dan sesuai kebutuhan pasar Indonesia.</p>
        ',
        'author' => 'Tim Concern'
    ],
    2 => [
        'title' => 'Portfolio Baru: Aplikasi Manajemen UMKM Jogja',
        'date' => 'Januari 2026',
        'category' => 'Client Success',
        'image' => 'https://images.unsplash.com/photo-1551650975-60cb5c8b0b7e?w=1200',
        'content' => '
            <p>Kami baru saja menyelesaikan dan meluncurkan aplikasi mobile khusus untuk UMKM di Yogyakarta.</p>
            <p>Aplikasi ini dibangun menggunakan Flutter untuk mendukung iOS dan Android dalam satu codebase. Fitur utama meliputi:</p>
            <ul class="list-disc pl-6 my-4">
                <li>Manajemen inventory real-time</li>
                <li>POS (Point of Sale) sederhana</li>
                <li>Laporan penjualan harian/mingguan</li>
                <li>Notifikasi stok rendah via push</li>
            </ul>
            <p>Proyek ini berhasil membantu 15+ UMKM di Jogja meningkatkan efisiensi operasional hingga 40%.</p>
        ',
        'author' => 'Tim Development Concern'
    ],
    3 => [
        'title' => 'Adopsi Next.js 15 & React Compiler di Concern',
        'date' => 'Desember 2025',
        'category' => 'Tech Insights',
        'image' => 'https://images.unsplash.com/photo-1555949963-aa79d0ebc6ab?w=1200',
        'content' => '
            <p>Concern mulai migrasi sebagian besar proyek web ke Next.js 15 dengan React Compiler untuk meningkatkan performa dan pengalaman developer.</p>
            <p>Manfaat utama yang kami rasakan:</p>
            <ul class="list-disc pl-6 my-4">
                <li>React Compiler mengurangi bundle size hingga 30%</li>
                <li>Server Components & Partial Prerendering mempercepat waktu load pertama</li>
                <li>Integrasi App Router membuat struktur kode lebih bersih</li>
            </ul>
            <p>Kami juga menggunakan Tailwind CSS v4 dengan shadcn/ui untuk UI yang konsisten dan cepat dikembangkan.</p>
        ',
        'author' => 'Tim Tech Concern'
    ]
];

// Ambil ID dari URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Cek apakah berita ada
if (!isset($newsItems[$id])) {
    // Kalau ID tidak ditemukan, redirect atau tampilkan pesan error
    header("Location: index.php#news");
    exit;
}

$news = $newsItems[$id];
?>

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?= htmlspecialchars($news['title']) ?> | Concern</title>
  
  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            'concern-primary': '#6366f1',
            'concern-accent': '#06b6d4',
            'concern-dark': '#0f172a',
            'concern-darker': '#020617',
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
    <section class="py-12 px-6">
      <div class="max-w-4xl mx-auto">
        <!-- Back Button -->
        <a href="index.php#news" class="inline-flex items-center text-concern-accent hover:text-cyan-300 mb-8 text-lg">
          ← Kembali ke Berita
        </a>

        <!-- Gambar Hero -->
        <div class="mb-8 rounded-2xl overflow-hidden border border-slate-700 shadow-2xl">
          <img src="<?= htmlspecialchars($news['image']) ?>" 
               alt="<?= htmlspecialchars($news['title']) ?>" 
               class="w-full h-64 md:h-96 object-cover">
        </div>

        <!-- Metadata -->
        <div class="flex flex-wrap items-center gap-4 mb-6 text-sm text-slate-500">
          <span><?= htmlspecialchars($news['date']) ?></span>
          <span class="px-3 py-1 bg-slate-800 rounded-full"><?= htmlspecialchars($news['category']) ?></span>
          <span>Dibuat oleh <?= htmlspecialchars($news['author']) ?></span>
        </div>

        <!-- Judul -->
        <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
          <?= htmlspecialchars($news['title']) ?>
        </h1>

        <!-- Konten -->
        <div class="prose prose-invert prose-slate max-w-none text-slate-300 text-lg leading-relaxed">
          <?= $news['content'] ?>
        </div>

        <!-- Share / Related (opsional) -->
        <div class="mt-12 pt-8 border-t border-slate-700 text-center">
          <p class="text-slate-500 mb-4">Bagikan artikel ini</p>
          <div class="flex justify-center gap-6">
            <a href="#" class="text-slate-400 hover:text-concern-accent">Twitter</a>
            <a href="#" class="text-slate-400 hover:text-concern-accent">Facebook</a>
            <a href="#" class="text-slate-400 hover:text-concern-accent">LinkedIn</a>
          </div>
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