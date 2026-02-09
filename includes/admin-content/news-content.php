<div class="space-y-8">
  <!-- Header -->
  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-5">
    <div>
      <h2 class="text-2xl md:text-3xl font-bold text-white tracking-tight">Manajemen Berita / News</h2>
      <p class="text-gray-400 mt-1 text-sm md:text-base">Kelola artikel, update perusahaan, insight tech, dll</p>
    </div>
    <button id="btn-add-news"
            class="px-5 py-2.5 md:px-6 md:py-3 bg-gradient-to-r from-indigo-600 to-indigo-500 hover:from-indigo-500 hover:to-indigo-600 rounded-xl font-medium text-white shadow-lg shadow-indigo-900/30 transition-all duration-300 flex items-center gap-2 text-sm md:text-base">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
      </svg>
      Tambah Berita
    </button>
  </div>

  <!-- Search + Filter -->
  <div class="flex flex-col md:flex-row gap-4 items-stretch md:items-center">
    <div class="relative flex-1">
      <input type="text" placeholder="Cari judul atau isi berita..." 
             class="w-full pl-10 pr-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/40 transition text-sm">
      <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
      </svg>
    </div>
    <select class="px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:outline-none focus:border-indigo-500 text-sm min-w-[160px]">
      <option>Semua Kategori</option>
      <option>Company Update</option>
      <option>Tech Insights</option>
      <option>Client Success</option>
      <option>Event & Workshop</option>
    </select>
  </div>

  <!-- Tabel dummy -->
  <div class="bg-gray-900 rounded-2xl border border-gray-800 overflow-hidden shadow-xl">
    <div class="overflow-x-auto">
      <table class="w-full min-w-[950px] text-left">
        <thead class="bg-gray-800">
          <tr class="text-gray-300 text-sm uppercase tracking-wider">
            <th class="px-5 py-4 font-medium w-32">Tanggal</th>
            <th class="px-5 py-4 font-medium">Judul</th>
            <th class="px-5 py-4 font-medium hidden md:table-cell">Kategori</th>
            <th class="px-5 py-4 font-medium hidden lg:table-cell">Excerpt</th>
            <th class="px-5 py-4 font-medium">Status</th>
            <th class="px-5 py-4 font-medium text-right pr-6">Aksi</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-800 text-sm text-gray-300">
          <tr class="hover:bg-gray-800/50 transition">
            <td class="px-5 py-4">09 Feb 2026</td>
            <td class="px-5 py-4 font-medium">Peluncuran Website Concern V2</td>
            <td class="px-5 py-4 hidden md:table-cell">Company Update</td>
            <td class="px-5 py-4 hidden lg:table-cell text-gray-400">Website baru dengan portfolio dinamis, dark mode, dan integrasi API...</td>
            <td class="px-5 py-4"><span class="px-3 py-1 bg-green-800/50 text-green-400 rounded-full text-xs">Published</span></td>
            <td class="px-5 py-4 text-right">
              <button class="text-indigo-400 hover:text-indigo-300 mr-3">Edit</button>
              <button class="text-red-400 hover:text-red-300">Hapus</button>
            </td>
          </tr>

          <tr class="hover:bg-gray-800/50 transition">
            <td class="px-5 py-4">15 Jan 2026</td>
            <td class="px-5 py-4 font-medium">Mengapa Kami Pilih Flutter untuk Mobile App 2026</td>
            <td class="px-5 py-4 hidden md:table-cell">Tech Insights</td>
            <td class="px-5 py-4 hidden lg:table-cell text-gray-400">Perbandingan performa, development speed, dan cost-benefit...</td>
            <td class="px-5 py-4"><span class="px-3 py-1 bg-green-800/50 text-green-400 rounded-full text-xs">Published</span></td>
            <td class="px-5 py-4 text-right">
              <button class="text-indigo-400 hover:text-indigo-300 mr-3">Edit</button>
              <button class="text-red-400 hover:text-red-300">Hapus</button>
            </td>
          </tr>

          <tr class="hover:bg-gray-800/50 transition">
            <td class="px-5 py-4">20 Des 2025</td>
            <td class="px-5 py-4 font-medium">Workshop AI untuk UMKM di Yogyakarta</td>
            <td class="px-5 py-4 hidden md:table-cell">Event</td>
            <td class="px-5 py-4 hidden lg:table-cell text-gray-400">Rekap acara bersama 50+ peserta UMKM lokal...</td>
            <td class="px-5 py-4"><span class="px-3 py-1 bg-yellow-800/50 text-yellow-400 rounded-full text-xs">Draft</span></td>
            <td class="px-5 py-4 text-right">
              <button class="text-indigo-400 hover:text-indigo-300 mr-3">Edit</button>
              <button class="text-red-400 hover:text-red-300">Hapus</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Info -->
  <div class="bg-gray-800 border border-gray-700 rounded-xl p-4 text-sm text-gray-400 flex items-start gap-3">
    <svg class="w-5 h-5 text-indigo-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM9 5a1 1 0 112 0 1 1 0 01-2 0zm1 4a1 1 0 100 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H10z" clip-rule="evenodd"/>
    </svg>
    <p>Gunakan markdown ringan di konten untuk format yang lebih baik di website.</p>
  </div>
</div>