<?php
// includes/auth/login.php

session_start();

// Kalau sudah login, langsung redirect ke dashboard
// if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
//     header("Location: ../../admin/includes/dashboard.php");
//     exit;
// }

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Dummy credential (ganti dengan database nanti!)
    // Nanti pakai password_hash() & password_verify() untuk keamanan
    if ($username === 'admin' && $password === 'concern123') {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username']  = $username; // optional
        header("Location: ../../admin/includes/dashboard.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin - Concern</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-950 min-h-screen flex items-center justify-center text-gray-200">
  <div class="bg-gray-900 p-8 rounded-xl border border-gray-800 w-full max-w-md shadow-2xl">
    <h1 class="text-3xl font-bold text-indigo-400 mb-8 text-center">Login Admin</h1>

    <?php if ($error): ?>
      <div class="bg-red-900/50 border border-red-700 text-red-300 p-4 rounded-lg mb-6">
        <?= htmlspecialchars($error) ?>
      </div>
    <?php endif; ?>

    <form method="POST" class="space-y-6">
      <div>
        <label class="block text-sm font-medium mb-2">Username</label>
        <input type="text" name="username" required 
               class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:border-indigo-500">
      </div>

      <div>
        <label class="block text-sm font-medium mb-2">Password</label>
        <input type="password" name="password" required 
               class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:border-indigo-500">
      </div>

      <button type="submit" 
              class="w-full py-3 bg-indigo-600 hover:bg-indigo-500 rounded-lg font-medium transition">
        Masuk
      </button>
    </form>
  </div>
</body>
</html>