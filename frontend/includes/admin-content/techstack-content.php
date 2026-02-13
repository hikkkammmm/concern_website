<div class="space-y-8">
  <!-- Header -->
  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-5">
    <div>
      <h2 class="text-2xl md:text-3xl font-bold text-white tracking-tight">Manajemen Tech Stack</h2>
      <p class="text-gray-400 mt-1 text-sm md:text-base">Kelola teknologi yang ditampilkan di halaman utama</p>
    </div>
    <button id="btn-add-tech"
            class="px-5 py-2.5 md:px-6 md:py-3 bg-gradient-to-r from-indigo-600 to-indigo-500 hover:from-indigo-500 hover:to-indigo-600 rounded-xl font-medium text-white shadow-lg shadow-indigo-900/30 transition-all duration-300 flex items-center gap-2 text-sm md:text-base">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
      </svg>
      Tambah Teknologi
    </button>
  </div>

  <!-- Search + Filter -->
  <div class="flex flex-col md:flex-row gap-4 items-stretch md:items-center">
    <div class="relative flex-1">
      <input type="text" placeholder="Cari nama teknologi atau kategori..." 
             class="w-full pl-10 pr-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/40 transition text-sm">
      <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
      </svg>
    </div>
    <select class="px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl focus:outline-none focus:border-indigo-500 text-sm min-w-[160px]">
      <option>Semua Kategori</option>
      <option>Frontend</option>
      <option>Backend</option>
      <option>Mobile</option>
      <option>Database</option>
      <option>Cloud / DevOps</option>
      <option>AI / ML</option>
    </select>
  </div>

  <!-- Grid dummy -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 md:gap-6">
    <div class="bg-gray-900 rounded-2xl border border-gray-800 p-5 shadow-xl hover:border-indigo-500/50 transition">
      <div class="flex items-center gap-4 mb-4">
        <div class="w-12 h-12 bg-indigo-900/30 rounded-xl flex items-center justify-center text-2xl">⚛️</div>
        <div>
          <h3 class="text-lg font-semibold text-white">React</h3>
          <p class="text-sm text-indigo-400">Frontend Library</p>
        </div>
      </div>
      <p class="text-gray-400 text-sm mb-4">Komponen-based UI, hooks, state management modern.</p>
      <div class="flex flex-wrap gap-2">
        <span class="px-2.5 py-1 bg-gray-800 rounded-full text-xs">Frontend</span>
        <span class="px-2.5 py-1 bg-gray-800 rounded-full text-xs">JavaScript</span>
      </div>
      <div class="mt-4 flex justify-end gap-3 text-sm">
        <button class="text-indigo-400 hover:text-indigo-300">Edit</button>
        <button class="text-red-400 hover:text-red-300">Hapus</button>
      </div>
    </div>

    <div class="bg-gray-900 rounded-2xl border border-gray-800 p-5 shadow-xl hover:border-indigo-500/50 transition">
      <div class="flex items-center gap-4 mb-4">
        <div class="w-12 h-12 bg-teal-900/30 rounded-xl flex items-center justify-center text-2xl">🟢</div>
        <div>
          <h3 class="text-lg font-semibold text-white">Node.js</h3>
          <p class="text-sm text-indigo-400">Backend Runtime</p>
        </div>
      </div>
      <p class="text-gray-400 text-sm mb-4">Server-side JS, Express/NestJS, scalable API.</p>
      <div class="flex flex-wrap gap-2">
        <span class="px-2.5 py-1 bg-gray-800 rounded-full text-xs">Backend</span>
        <span class="px-2.5 py-1 bg-gray-800 rounded-full text-xs">JavaScript</span>
      </div>
      <div class="mt-4 flex justify-end gap-3 text-sm">
        <button class="text-indigo-400 hover:text-indigo-300">Edit</button>
        <button class="text-red-400 hover:text-red-300">Hapus</button>
      </div>
    </div>

    <div class="bg-gray-900 rounded-2xl border border-gray-800 p-5 shadow-xl hover:border-indigo-500/50 transition">
      <div class="flex items-center gap-4 mb-4">
        <div class="w-12 h-12 bg-blue-900/30 rounded-xl flex items-center justify-center text-2xl">🐘</div>
        <div>
          <h3 class="text-lg font-semibold text-white">PostgreSQL</h3>
          <p class="text-sm text-indigo-400">Database Relasional</p>
        </div>
      </div>
      <p class="text-gray-400 text-sm mb-4">Advanced relational DB dengan JSON support & performance tinggi.</p>
      <div class="flex flex-wrap gap-2">
        <span class="px-2.5 py-1 bg-gray-800 rounded-full text-xs">Database</span>
        <span class="px-2.5 py-1 bg-gray-800 rounded-full text-xs">SQL</span>
      </div>
      <div class="mt-4 flex justify-end gap-3 text-sm">
        <button class="text-indigo-400 hover:text-indigo-300">Edit</button>
        <button class="text-red-400 hover:text-red-300">Hapus</button>
      </div>
    </div>

    <div class="bg-gray-900 rounded-2xl border border-gray-800 p-5 shadow-xl hover:border-indigo-500/50 transition">
      <div class="flex items-center gap-4 mb-4">
        <div class="w-12 h-12 bg-cyan-900/30 rounded-xl flex items-center justify-center text-2xl">🤖</div>
        <div>
          <h3 class="text-lg font-semibold text-white">TensorFlow</h3>
          <p class="text-sm text-indigo-400">AI / ML Framework</p>
        </div>
      </div>
      <p class="text-gray-400 text-sm mb-4">Machine learning production-ready dengan ekosistem lengkap.</p>
      <div class="flex flex-wrap gap-2">
        <span class="px-2.5 py-1 bg-gray-800 rounded-full text-xs">AI/ML</span>
        <span class="px-2.5 py-1 bg-gray-800 rounded-full text-xs">Python</span>
      </div>
      <div class="mt-4 flex justify-end gap-3 text-sm">
        <button class="text-indigo-400 hover:text-indigo-300">Edit</button>
        <button class="text-red-400 hover:text-red-300">Hapus</button>
      </div>
    </div>
  </div>

  <!-- Info -->
  <div class="bg-gray-800 border border-gray-700 rounded-xl p-4 text-sm text-gray-400 flex items-start gap-3">
    <svg class="w-5 h-5 text-indigo-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM9 5a1 1 0 112 0 1 1 0 01-2 0zm1 4a1 1 0 100 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H10z" clip-rule="evenodd"/>
    </svg>
    <p>Gunakan ikon SVG atau logo resmi teknologi untuk tampilan lebih profesional di website.</p>
  </div>
</div>