<header class="fixed top-0 left-0 right-0 z-50 bg-concern-darker/80 backdrop-blur-md border-b border-slate-800">
  <nav class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">
    
    <!-- Logo kiri -->
    <a href="index.php" class="text-2xl font-bold text-white flex items-center gap-3">
      <span class="text-concern-accent">CONCERN</span>
    </a>

    <!-- Menu tengah (desktop) -->
    <div class="hidden md:flex items-center gap-10">
      <a href="#about" class="hover:text-concern-accent transition">about</a>
      <a href="#services" class="hover:text-concern-accent transition">services</a>
      <a href="#techstack" class="hover:text-concern-accent transition">stack</a>
      <a href="#news" class="hover:text-concern-accent transition">News</a>
      <a href="#portfolio" class="hover:text-concern-accent transition">portfolio</a>
      <a href="#kontak" class="hover:text-concern-accent transition">contact</a>
    </div>

    <!-- Tombol Login di kanan (desktop & mobile) -->
    <div class="flex items-center gap-4">
      <!-- Button Login -->
      <a href="includes/auth/login.php" 
         class="hidden md:flex items-center gap-2 px-6 py-3 bg-concern-primary/20 hover:bg-concern-primary/40 border border-concern-primary/50 text-concern-primary font-medium rounded-lg transition-all duration-300">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
        </svg>
        <span>login</span>
      </a>

      <!-- Versi mobile: ikon saja atau tombol kecil -->
      <a href="includes/auth/login.php" class="md:hidden p-2 rounded-full hover:bg-slate-800 transition">
        <svg class="w-6 h-6 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
        </svg>
      </a>

      <!-- Hamburger menu kalau kamu punya (untuk mobile nav) -->
      <button class="md:hidden text-slate-300 focus:outline-none"> ... </button>
    </div>
  </nav>
</header>