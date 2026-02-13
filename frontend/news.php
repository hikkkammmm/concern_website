<!-- ================= NEWS / BERITA TERBARU ================= -->
<section id="news" class="py-24 px-6">
  <div class="max-w-6xl mx-auto">
    
    <!-- Section Header -->
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">
        News
      </h2>
      <p class="text-slate-400 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="150">
        Update terbaru seputar project, teknologi, dan perkembangan Concern.
      </p>
    </div>

    <!-- News Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

      <?php
      $news = [
        [
          "date" => "Februari 2026",
          "title" => "Concern Ikut Tren AI di Jogja 2026",
          "desc" => "Tahun ini Concern semakin fokus pada solusi AI untuk bisnis lokal, termasuk integrasi LLM dan automation tools.",
          "icon" => "📰",
          "link" => "news-detail.php?id=1"
        ],
        [
          "date" => "Januari 2026",
          "title" => "Portfolio Baru: Aplikasi Manajemen UMKM Jogja",
          "desc" => "Kami baru saja launch app mobile untuk UMKM di Yogyakarta dengan fitur inventory & sales real-time.",
          "icon" => "🚀",
          "link" => "news-detail.php?id=2"
        ],
        [
          "date" => "Desember 2025",
          "title" => "Adopsi Next.js 15 & React Compiler di Concern",
          "desc" => "Kami mulai migrasi ke Next.js terbaru untuk performa lebih baik dan SEO optimal di proyek web 2026.",
          "icon" => "🔧",
          "link" => "news-detail.php?id=3"
        ],
      ];

      foreach ($news as $index => $item) :
      ?>

      <!-- News Card -->
      <div class="group bg-slate-800/40 border border-slate-700 rounded-xl overflow-hidden hover:border-concern-accent hover:-translate-y-2 transition-all duration-300"
           data-aos="fade-up"
           data-aos-delay="<?= ($index + 1) * 100 ?>">

        <div class="h-48 bg-gradient-to-br from-indigo-900 to-cyan-900 flex items-center justify-center text-6xl">
          <?= $item['icon']; ?>
        </div>

        <div class="p-6">
          <span class="text-sm text-slate-500"><?= $item['date']; ?></span>
          <h3 class="text-xl font-semibold mt-2 mb-3 group-hover:text-concern-accent transition">
            <?= $item['title']; ?>
          </h3>
          <p class="text-slate-400 mb-4 text-sm leading-relaxed">
            <?= $item['desc']; ?>
          </p>
          <a href="<?= $item['link']; ?>" 
             class="text-concern-accent text-sm font-medium hover:underline">
            Baca Selengkapnya →
          </a>
        </div>
      </div>

      <?php endforeach; ?>

    </div>
  </div>
</section>
