<div class="space-y-8">
  <!-- Header -->
  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-5">
    <div>
      <h2 class="text-2xl md:text-3xl font-bold text-white tracking-tight">Manajemen Portfolio</h2>
      <p class="text-gray-400 mt-1 text-sm md:text-base">Kelola proyek yang muncul di halaman utama website</p>
    </div>
    <button id="btn-add-portfolio"
            class="px-5 py-2.5 md:px-6 md:py-3 bg-gradient-to-r from-indigo-600 to-indigo-500 hover:from-indigo-500 hover:to-indigo-600 rounded-xl font-medium text-white shadow-lg shadow-indigo-900/30 transition-all duration-300 flex items-center gap-2 text-sm md:text-base">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
      </svg>
      Tambah Project
    </button>
  </div>

  <!-- Search + Filter -->
  <div class="flex flex-col md:flex-row gap-4 items-stretch md:items-center">
    <div class="relative flex-1">
      <input type="text" placeholder="Cari judul, deskripsi atau tag..." 
             class="w-full pl-10 pr-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/40 transition text-sm">
      <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
      </svg>
    </div>
    <select class="px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:outline-none focus:border-indigo-500 text-sm min-w-[140px]">
      <option>Semua Status</option>
      <option>Aktif</option>
      <option>Draft</option>
      <option>Arsip</option>
    </select>
  </div>

  <!-- Tabel dengan dummy data -->
  <div class="bg-gray-900 rounded-2xl border border-gray-800 overflow-hidden shadow-xl">
    <div class="overflow-x-auto">
      <table class="w-full min-w-[900px] text-left">
        <thead class="bg-gray-800">
          <tr class="text-gray-300 text-sm uppercase tracking-wider">
            <th class="px-5 py-4 font-medium w-28">Preview</th>
            <th class="px-5 py-4 font-medium">Judul</th>
            <th class="px-5 py-4 font-medium hidden md:table-cell">Deskripsi</th>
            <th class="px-5 py-4 font-medium hidden lg:table-cell">Tags</th>
            <th class="px-5 py-4 font-medium hidden xl:table-cell">Update</th>
            <th class="px-5 py-4 font-medium text-right pr-6">Aksi</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-800 text-sm text-gray-300">
          <tr class="hover:bg-gray-800/50 transition">
            <td class="px-5 py-4"><img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=200" alt="Preview" class="w-20 h-12 object-cover rounded"></td>
            <td class="px-5 py-4 font-medium">Dashboard Analitik Bisnis</td>
            <td class="px-5 py-4 hidden md:table-cell text-gray-400">Sistem monitoring real-time dengan chart interaktif dan integrasi API</td>
            <td class="px-5 py-4 hidden lg:table-cell">
              <div class="flex flex-wrap gap-2">
                <span class="px-2.5 py-1 bg-gray-700 rounded-full text-xs">React</span>
                <span class="px-2.5 py-1 bg-gray-700 rounded-full text-xs">Node.js</span>
              </div>
            </td>
            <td class="px-5 py-4 hidden xl:table-cell text-gray-400">09 Feb 2026</td>
            <td class="px-5 py-4 text-right text-sm">
              <button class="text-indigo-400 hover:text-indigo-300 mr-3">Edit</button>
              <button class="text-red-400 hover:text-red-300">Hapus</button>
            </td>
          </tr>

          <tr class="hover:bg-gray-800/50 transition">
            <td class="px-5 py-4"><img src="https://images.unsplash.com/photo-1551650975-60cb5c8b0b7e?w=200" alt="Preview" class="w-20 h-12 object-cover rounded"></td>
            <td class="px-5 py-4 font-medium">Aplikasi Manajemen Toko Mobile</td>
            <td class="px-5 py-4 hidden md:table-cell text-gray-400">Cross-platform app untuk owner dan staff dengan inventory & POS</td>
            <td class="px-5 py-4 hidden lg:table-cell">
              <div class="flex flex-wrap gap-2">
                <span class="px-2.5 py-1 bg-gray-700 rounded-full text-xs">Flutter</span>
                <span class="px-2.5 py-1 bg-gray-700 rounded-full text-xs">Firebase</span>
              </div>
            </td>
            <td class="px-5 py-4 hidden xl:table-cell text-gray-400">05 Jan 2026</td>
            <td class="px-5 py-4 text-right text-sm">
              
              <button class="text-indigo-400 hover:text-indigo-300 mr-3">Edit</button>
              <button class="text-red-400 hover:text-red-300">Hapus</button>
            </td>
          </tr>

          <tr class="hover:bg-gray-800/50 transition">
            <td class="px-5 py-4"><img src="https://images.unsplash.com/photo-1555949963-aa79d0ebc6ab?w=200" alt="Preview" class="w-20 h-12 object-cover rounded"></td>
            <td class="px-5 py-4 font-medium">Chatbot AI Customer Service</td>
            <td class="px-5 py-4 hidden md:table-cell text-gray-400">Integrasi LLM untuk support otomatis di website & WA</td>
            <td class="px-5 py-4 hidden lg:table-cell">
              <div class="flex flex-wrap gap-2">
                <span class="px-2.5 py-1 bg-gray-700 rounded-full text-xs">AI</span>
                <span class="px-2.5 py-1 bg-gray-700 rounded-full text-xs">Node.js</span>
              </div>
            </td>
            <td class="px-5 py-4 hidden xl:table-cell text-gray-400">15 Des 2025</td>
            <td class="px-5 py-4 text-right text-sm">
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
    <p>Gambar preview sebaiknya 4:3 atau 16:9 agar tampil optimal di website.</p>
  </div>
</div>