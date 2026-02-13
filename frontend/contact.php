<!-- ================= KONTAK ================= -->
<section id="kontak" class="py-24 px-6 bg-concern-darker">
  <div class="max-w-5xl mx-auto">

    <!-- Heading -->
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">
        Contact Us
      </h2>
      <p class="text-slate-400 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="150">
        Choose your preferred method to get in touch with us.
        We're ready to help bring your ideas to life.
      </p>
    </div>

    <!-- Quick Contact -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-20"
         data-aos="fade-up" data-aos-delay="250">

      <?php
      $contacts = [
        [
          "title" => "Email",
          "value" => "concern.dev07@gmail.com",
          "link"  => "mailto:concern.dev07@gmail.com",
          "icon"  => "✉️"
        ],
        [
          "title" => "WhatsApp",
          "value" => "+62 852-1143-5617",
          "link"  => "https://wa.me/6285211435617?text=Halo%20Concern,%20saya%20ingin%20konsultasi%20proyek",
          "icon"  => "📱"
        ],
        [
          "title" => "Instagram",
          "value" => "@concern.dev",
          "link"  => "https://instagram.com/concern.dev",
          "icon"  => "📸"
        ],
        [
          "title" => "Telegram",
          "value" => "@concerndev",
          "link"  => "https://t.me/concerndev",
          "icon"  => "💬"
        ],
      ];

      foreach ($contacts as $item) :
      ?>

      <a href="<?= $item['link']; ?>"
         target="_blank"
         class="group flex flex-col items-center text-center p-6
                bg-slate-800/40 border border-slate-700 rounded-xl
                hover:border-concern-accent hover:-translate-y-2
                hover:bg-slate-800/70 transition-all duration-300">

        <div class="text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">
          <?= $item['icon']; ?>
        </div>

        <span class="font-semibold text-lg">
          <?= $item['title']; ?>
        </span>

        <span class="text-sm text-slate-400 mt-1">
          <?= $item['value']; ?>
        </span>
      </a>

      <?php endforeach; ?>
    </div>

    <!-- Contact Form -->
    <div class="max-w-3xl mx-auto">
      <h3 class="text-2xl font-semibold text-center mb-8">
        Or Send Us a Message
      </h3>

      <?php
      if (isset($_GET['status'])) {
          if ($_GET['status'] === 'success') {
              echo '<div class="mb-6 p-4 bg-green-900/40 border border-green-700 rounded-lg text-green-300 text-center">
                      Message sent successfully! We will reply soon.
                    </div>';
          } elseif ($_GET['status'] === 'error') {
              $msg = $_GET['msg'] ?? 'Something went wrong.';
              echo '<div class="mb-6 p-4 bg-red-900/40 border border-red-700 rounded-lg text-red-300 text-center">'
                    . htmlspecialchars($msg) .
                   '</div>';
          }
      }
      ?>

      <form action="process/contact.php"
            method="POST"
            class="grid md:grid-cols-2 gap-6"
            data-aos="fade-up"
            data-aos-delay="400">

        <div>
          <label class="block text-sm font-medium mb-2">Full Name</label>
          <input type="text" name="name" required
                 class="w-full px-4 py-3 bg-slate-800 border border-slate-700 rounded-lg
                        focus:outline-none focus:border-concern-accent transition">
        </div>

        <div>
          <label class="block text-sm font-medium mb-2">Email</label>
          <input type="email" name="email" required
                 class="w-full px-4 py-3 bg-slate-800 border border-slate-700 rounded-lg
                        focus:outline-none focus:border-concern-accent transition">
        </div>

        <div class="md:col-span-2">
          <label class="block text-sm font-medium mb-2">Phone / WhatsApp</label>
          <input type="tel" name="phone"
                 class="w-full px-4 py-3 bg-slate-800 border border-slate-700 rounded-lg
                        focus:outline-none focus:border-concern-accent transition">
        </div>

        <div class="md:col-span-2">
          <label class="block text-sm font-medium mb-2">Tell Us About Your Project</label>
          <textarea name="message" rows="6" required
                    class="w-full px-4 py-3 bg-slate-800 border border-slate-700 rounded-lg
                           focus:outline-none focus:border-concern-accent transition"></textarea>
        </div>

        <div class="md:col-span-2 text-center">
          <button type="submit"
                  class="px-10 py-4 bg-concern-primary hover:bg-indigo-600
                         text-white font-semibold rounded-lg transition
                         shadow-lg shadow-indigo-900/30">
            Send Message
          </button>
        </div>

      </form>
    </div>

  </div>
</section>
