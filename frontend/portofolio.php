<?php
// includes/portfolio.php

// Ganti dengan endpoint API asli kamu
$apiUrl = 'http://192.168.0.24:3000/api/portofolio';  // atau https://api.concern.dev/portfolio kalau sudah live

// Fetch data menggunakan cURL (lebih aman & fleksibel daripada file_get_contents)
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);           // max 10 detik
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // matikan kalau self-signed cert (development only!)

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$data = json_decode($response, true);
$projects = [];

if ($httpCode === 200 && isset($data['success']) && $data['success'] === true) {
    $projects = $data['result'] ?? [];
} else {
    // Fallback message kalau API gagal
    $errorMsg = $data['message'] ?? 'Gagal mengambil data portfolio dari server.';
}
?>

<section id="portfolio" class="py-20 px-6 bg-concern-dark">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-4xl md:text-5xl font-bold text-center mb-4" data-aos="fade-up">portofolio</h2>
    <p class="text-xl text-slate-400 text-center mb-16 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
      
    </p>

    <?php if (!empty($errorMsg)): ?>
      <div class="p-6 bg-red-900/40 border border-red-700 rounded-xl text-center text-red-300 mb-12">
        <?= htmlspecialchars($errorMsg) ?>
      </div>
    <?php elseif (empty($projects)): ?>
      <div class="p-6 bg-slate-800/60 border border-slate-700 rounded-xl text-center text-slate-400 mb-12">
        Belum ada proyek yang ditampilkan saat ini.
      </div>
    <?php else: ?>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($projects as $index => $project): ?>
          <div class="group relative overflow-hidden rounded-xl bg-slate-800/40 border border-slate-700 hover:border-concern-accent transition-all duration-300" 
               data-aos="fade-up" 
               data-aos-delay="<?= $index * 100 ?>">
            
            <div class="aspect-[4/3] overflow-hidden">
              <img src="<?= htmlspecialchars($project['imageUrl'] ?? 'https://via.placeholder.com/800x600?text=No+Image') ?>" 
                   alt="<?= htmlspecialchars($project['title'] ?? 'Project') ?>" 
                   class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            </div>

            <div class="p-6">
              <h3 class="text-xl font-semibold mb-2"><?= htmlspecialchars($project['title'] ?? 'Untitled') ?></h3>
              <p class="text-slate-400 mb-4"><?= htmlspecialchars($project['description'] ?? 'No description available') ?></p>
              
              <?php if (!empty($project['tags']) && is_array($project['tags'])): ?>
                <div class="flex flex-wrap gap-2">
                    <?php foreach ($project['tags'] as $tagItem): ?>
                    <?php 
                        // Ambil 'name' dari object, fallback ke string kosong kalau tidak ada
                        $tagName = is_array($tagItem) || is_object($tagItem) 
                                ? ($tagItem['name'] ?? '') 
                                : ($tagItem ?? ''); 
                    ?>
                    <?php if (!empty($tagName)): ?>
                        <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">
                        <?= htmlspecialchars($tagName) ?>
                        </span>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>

            <!-- Overlay hover (opsional: bisa diganti link ke detail kalau ada) -->
            <div class="absolute inset-0 bg-gradient-to-t from-concern-primary/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-8">
              <span class="px-6 py-3 bg-white text-concern-dark font-semibold rounded-lg hover:bg-slate-200 transition cursor-pointer">
                Lihat Detail
              </span>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>