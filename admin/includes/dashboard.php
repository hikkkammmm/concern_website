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
</body>
</html>