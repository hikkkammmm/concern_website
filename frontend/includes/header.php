<?php session_start(); ?>

<header id="navbar"
class="fixed top-0 left-0 right-0 z-50 transition-all duration-500
bg-concern-darker/70 backdrop-blur-xl border-b border-slate-800">

  <nav class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">

    <!-- Logo -->
    <a href="index.php" class="text-2xl font-bold text-white tracking-wide">
      <span class="text-concern-accent">CONCERN</span>
    </a>

    <!-- Desktop Menu -->
    <div class="hidden md:flex items-center gap-10 font-medium text-slate-300">
      <?php
      $menu = ["About"=>"#about","Services"=>"#services","Stack"=>"#techstack",
               "News"=>"#news","Portfolio"=>"#portfolio","Contact"=>"#kontak"];
      foreach($menu as $name=>$link):
      ?>
        <a href="<?= $link ?>"
           class="relative hover:text-white transition duration-300 group">
          <?= $name ?>
          <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-concern-accent transition-all duration-300 group-hover:w-full"></span>
        </a>
      <?php endforeach; ?>
    </div>

    <!-- Right -->
    <!-- Right Side -->
    <div class="flex items-center gap-4">

      <!-- Login / Dashboard Button -->
      <?php if(isset($_SESSION['user'])): ?>
        <a href="admin/dashboard.php"
           class="hidden md:flex items-center gap-2 px-6 py-3 bg-green-500/20 hover:bg-green-500/40 border border-green-500/50 text-green-400 font-medium rounded-lg transition-all duration-300">
          Dashboard
        </a>
      <?php else: ?>
        <a href="includes/auth/login.php"
           class="hidden md:flex items-center gap-2 px-6 py-3 bg-concern-primary/20 hover:bg-concern-primary/40 border border-concern-primary/50 text-concern-primary font-medium rounded-lg transition-all duration-300">
          Login
        </a>
      <?php endif; ?>

      <!-- Mobile Login Icon -->
      <a href="includes/auth/login.php"
         class="md:hidden p-2 rounded-full hover:bg-slate-800 transition">
        <svg class="w-6 h-6 text-slate-300" fill="none" stroke="currentColor"
             viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
        </svg>
      </a>

      <!-- Hamburger -->
      <button id="menuBtn" class="md:hidden text-slate-300 focus:outline-none">
        <svg class="w-7 h-7" fill="none" stroke="currentColor"
             viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>

    </div>
  </nav>

  <!-- Mobile Menu -->
  <div id="mobileMenu"
       class="hidden md:hidden bg-concern-darker border-t border-slate-800 px-6 py-6 space-y-4">

    <a href="#about" class="block hover:text-concern-accent transition">About</a>
    <a href="#services" class="block hover:text-concern-accent transition">Services</a>
    <a href="#techstack" class="block hover:text-concern-accent transition">Stack</a>
    <a href="#news" class="block hover:text-concern-accent transition">News</a>
    <a href="#portfolio" class="block hover:text-concern-accent transition">Portfolio</a>
    <a href="#kontak" class="block hover:text-concern-accent transition">Contact</a>

  </div>


<!-- SCRIPT -->
<script>
const navbar = document.getElementById("navbar");
const menuBtn = document.getElementById("menuBtn");
const mobileMenu = document.getElementById("mobileMenu");
const bars = menuBtn.querySelectorAll("span");

// Scroll effect (shrink + shadow)
window.addEventListener("scroll", () => {
  if(window.scrollY > 50){
    navbar.classList.add("py-2","shadow-xl","shadow-black/30");
  } else {
    navbar.classList.remove("py-2","shadow-xl","shadow-black/30");
  }
});

// Toggle Mobile Menu
menuBtn.addEventListener("click", () => {
  mobileMenu.classList.toggle("hidden");

  // Animate hamburger → X
  bars[0].classList.toggle("rotate-45");
  bars[0].classList.toggle("translate-y-2");
  bars[1].classList.toggle("opacity-0");
  bars[2].classList.toggle("-rotate-45");
  bars[2].classList.toggle("-translate-y-2");
});
</script>
