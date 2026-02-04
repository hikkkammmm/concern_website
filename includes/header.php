<header class="fixed top-0 left-0 right-0 z-50 bg-concern-darker/90 backdrop-blur-md border-b border-slate-800">
  <nav class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">
    <a href="/" class="text-2xl font-bold text-white flex items-center gap-3">
      <span class="text-concern-accent">Concern</span>
    </a>

    <!-- Desktop Menu -->
    <div class="hidden md:flex items-center gap-10">
      <a href="#services" class="hover:text-concern-accent transition">Layanan</a>
      <a href="#portfolio" class="hover:text-concern-accent transition">Portfolio</a>
      <a href="#about" class="hover:text-concern-accent transition">Tentang</a>
      <a href="#kontak" class="hover:text-concern-accent transition">Kontak</a>
    </div>

    <!-- Mobile Hamburger -->
    <button id="menu-toggle" class="md:hidden text-white focus:outline-none">
      <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
  </nav>

  <!-- Mobile Menu Dropdown -->
  <div id="mobile-menu" class="hidden md:hidden bg-concern-darker border-t border-slate-800">
    <div class="px-6 py-4 flex flex-col gap-6">
      <a href="#services" class="hover:text-concern-accent transition">Layanan</a>
      <a href="#portfolio" class="hover:text-concern-accent transition">Portfolio</a>
      <a href="#about" class="hover:text-concern-accent transition">Tentang</a>
      <a href="#kontak" class="hover:text-concern-accent transition">Kontak</a>
    </div>
  </div>
</header>

<!-- Tambah di akhir body sebelum </body> -->
<script>
  const toggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('mobile-menu');
  toggle.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>