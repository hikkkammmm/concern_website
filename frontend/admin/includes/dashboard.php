<?php
// admin/dashboard.php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: ../includes/auth/login.php");
    exit;
}

$activeMenu = $_GET['menu'] ?? 'portfolio';
?>

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard Admin - Concern</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            'concern-primary': '#6366f1',
            'concern-accent':  '#06b6d4',
            'concern-dark':    '#0f172a',
            'concern-darker':  '#020617',
          }
        }
      }
    }
  </script>
</head>
<body class="bg-concern-darker text-gray-200 min-h-screen font-sans antialiased">

  <!-- Header fixed atas -->
  <header class="bg-gray-900/90 backdrop-blur-sm border-b border-gray-800 fixed top-0 left-0 right-0 z-30">
    <div class="max-w-full px-6 py-4 flex justify-between items-center">
      <h1 class="text-xl md:text-2xl font-bold text-concern-primary">Concern Admin</h1>
      <a href="../../includes/auth/logout.php" class="px-5 py-2.5 bg-red-600/90 hover:bg-red-700 rounded-lg text-sm font-medium transition shadow-sm">
        Logout
      </a>
    </div>
  </header>

  <!-- Layout utama: sidebar fixed + main dengan offset -->
  <div class="flex pt-16 md:pt-20">  <!-- pt lebih besar agar tidak ketutup header -->

    <!-- Sidebar fixed kiri (hanya desktop) -->
    <?php include '../admin-sidebar.php'; ?>

    <!-- Konten utama - dengan padding kiri di desktop agar tidak tertutup sidebar -->
    <main class="flex-1 md:ml-64 p-6 md:p-8 lg:p-10 min-h-screen">
      <?php
        switch ($activeMenu) {
          case 'portofolio':
            include '../../includes/admin-content/portofolio-concent.php';
            break;
          case 'news':
            include '../../includes/admin-content/news-content.php';
            break;
          case 'techstack':
            include '../../includes/admin-content/techstack-content.php';
            break;
          default:
            include '../../includes/admin-content/portofolio-concent.php';
            break;
        }
      ?>
    </main>
  </div>

  <!-- Modal shared -->
  <div id="modal" class="fixed inset-0 bg-black/70 hidden flex items-center justify-center z-50 px-4">
    <div class="bg-gray-900/95 backdrop-blur-sm p-6 md:p-8 rounded-2xl w-full max-w-lg border border-gray-800/70 shadow-2xl">
      <h3 id="modal-title" class="text-xl md:text-2xl font-bold mb-6 text-white"></h3>
      <form id="data-form" class="space-y-5">
        <!-- Fields diisi dinamis via JS -->
      </form>
    </div>
  </div>

  <script src="assets/js/admin.js"></script>
  <!-- Modal CRUD Shared -->
<div id="crud-modal" class="fixed inset-0 bg-black/70 hidden flex items-center justify-center z-50 px-4 overflow-y-auto">
  <div class="bg-gray-900 rounded-2xl border border-gray-800 shadow-2xl w-full max-w-2xl my-8">
    <!-- Header Modal -->
    <div class="flex items-center justify-between px-6 py-5 border-b border-gray-800">
      <h3 id="modal-title" class="text-xl md:text-2xl font-bold text-white"></h3>
      <button id="modal-close" class="text-gray-400 hover:text-white text-2xl">&times;</button>
    </div>

    <!-- Body Modal -->
    <div class="p-6 space-y-6 max-h-[70vh] overflow-y-auto">
      <form id="crud-form" class="space-y-6">

        <!-- Field umum untuk semua (akan di-show/hide via JS) -->
        <input type="hidden" id="crud-type" value="">     <!-- portfolio / news / techstack -->
        <input type="hidden" id="crud-action" value="">    <!-- add / edit -->
        <input type="hidden" id="crud-id" value="">        <!-- id untuk edit -->

        <!-- Portfolio-specific fields -->
        <div id="portfolio-fields" class="space-y-6 hidden">
          <div>
            <label class="block text-sm font-medium mb-2">Judul Project</label>
            <input type="text" id="p-title" required class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/40">
          </div>
          <div>
            <label class="block text-sm font-medium mb-2">Deskripsi</label>
            <textarea id="p-description" rows="4" required class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/40"></textarea>
          </div>
          <div>
            <label class="block text-sm font-medium mb-2">URL Gambar Preview</label>
            <input type="url" id="p-image" placeholder="https://images.unsplash.com/..." required class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/40">
            <div id="p-preview" class="mt-3 hidden">
              <img id="p-preview-img" class="max-h-40 rounded-lg mx-auto object-contain" alt="Preview">
            </div>
          </div>
          <div>
            <label class="block text-sm font-medium mb-2">Tags (pisah koma)</label>
            <input type="text" id="p-tags" placeholder="React, Node.js, Tailwind" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/40">
            <div id="p-tags-preview" class="mt-3 flex flex-wrap gap-2"></div>
          </div>
        </div>

        <!-- News-specific fields -->
        <div id="news-fields" class="space-y-6 hidden">
          <div>
            <label class="block text-sm font-medium mb-2">Judul Berita</label>
            <input type="text" id="n-title" required class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/40">
          </div>
          <div>
            <label class="block text-sm font-medium mb-2">Kategori</label>
            <select id="n-category" required class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/40">
              <option value="">Pilih Kategori</option>
              <option value="company">Company Update</option>
              <option value="tech">Tech Insights</option>
              <option value="client">Client Success</option>
              <option value="event">Event & Workshop</option>
            </select>
          </div>
          <div>
            <label class="block text-sm font-medium mb-2">Excerpt (ringkasan singkat)</label>
            <textarea id="n-excerpt" rows="3" maxlength="200" class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/40"></textarea>
          </div>
          <div>
            <label class="block text-sm font-medium mb-2">Isi Berita Lengkap</label>
            <textarea id="n-content" rows="8" required class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/40"></textarea>
          </div>
          <div>
            <label class="block text-sm font-medium mb-2">Status</label>
            <select id="n-status" required class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/40">
              <option value="draft">Draft</option>
              <option value="published">Published</option>
            </select>
          </div>
        </div>

        <!-- Techstack-specific fields -->
        <div id="tech-fields" class="space-y-6 hidden">
          <div>
            <label class="block text-sm font-medium mb-2">Nama Teknologi</label>
            <input type="text" id="t-name" required class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/40">
          </div>
          <div>
            <label class="block text-sm font-medium mb-2">Kategori</label>
            <select id="t-category" required class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/40">
              <option value="">Pilih Kategori</option>
              <option value="frontend">Frontend</option>
              <option value="backend">Backend</option>
              <option value="mobile">Mobile</option>
              <option value="database">Database</option>
              <option value="cloud">Cloud / DevOps</option>
              <option value="ai">AI / ML</option>
            </select>
          </div>
          <div>
            <label class="block text-sm font-medium mb-2">Deskripsi Singkat</label>
            <textarea id="t-description" rows="4" required class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/40"></textarea>
          </div>
          <div>
            <label class="block text-sm font-medium mb-2">Icon / Logo URL (opsional)</label>
            <input type="url" id="t-icon" placeholder="https://..." class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/40">
            <div id="t-icon-preview" class="mt-3 hidden">
              <img id="t-preview-img" class="max-h-16 rounded-lg mx-auto object-contain" alt="Icon Preview">
            </div>
          </div>
        </div>

        <!-- Footer Modal -->
        <div class="flex justify-end gap-4 pt-4 border-t border-gray-800">
          <button type="button" id="modal-cancel" class="px-6 py-3 bg-gray-700 hover:bg-gray-600 rounded-xl font-medium transition">
            Batal
          </button>
          <button type="submit" id="modal-save" class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-indigo-500 hover:from-indigo-500 hover:to-indigo-600 rounded-xl font-medium text-white shadow-lg shadow-indigo-900/30 transition">
            Simpan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>