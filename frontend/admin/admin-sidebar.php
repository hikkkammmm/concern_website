<aside class="hidden md:block w-64 bg-gray-900/95 backdrop-blur-sm border-r border-gray-800/70 fixed top-16 md:top-20 left-0 bottom-0 overflow-y-auto z-20">
  <div class="p-6">
    <div class="mb-8">
      <h2 class="text-lg font-semibold text-gray-400 uppercase tracking-wider text-sm">Manajemen</h2>
    </div>
    <nav>
      <ul class="space-y-1.5">
        <li>
          <a href="?menu=portfolio" 
             class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all <?php echo $activeMenu === 'portfolio' ? 'bg-concern-primary/20 text-concern-primary font-medium' : 'text-gray-300 hover:bg-gray-800/70 hover:text-white'; ?>">
            <span class="text-xl">🖼️</span>
            Portfolio
          </a>
        </li>
        <li>
          <a href="?menu=news" 
             class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all <?php echo $activeMenu === 'news' ? 'bg-concern-primary/20 text-concern-primary font-medium' : 'text-gray-300 hover:bg-gray-800/70 hover:text-white'; ?>">
            <span class="text-xl">📰</span>
            Berita / News
          </a>
        </li>
        <li>
          <a href="?menu=techstack" 
             class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all <?php echo $activeMenu === 'techstack' ? 'bg-concern-primary/20 text-concern-primary font-medium' : 'text-gray-300 hover:bg-gray-800/70 hover:text-white'; ?>">
            <span class="text-xl">⚙️</span>
            Tech Stack
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>

