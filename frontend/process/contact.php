<?php
// process/contact.php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/PHPMailer/src/Exception.php';
require '../vendor/PHPMailer/src/PHPMailer.php';
require '../vendor/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $phone   = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validasi sederhana
    if (empty($name) || empty($email) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php#kontak?status=error&msg=Harap isi semua field dengan benar");
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Server settings (contoh pakai Gmail SMTP - ganti dengan email kamu)
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'emailkamu@gmail.com';          // GANTI
        $mail->Password   = 'app-password-kamu-disini';     // GANTI (bukan password biasa, pakai App Password Gmail)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('emailkamu@gmail.com');           // Email tujuan (Concern)
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Pesan Baru dari Website Concern - ' . $name;
        $mail->Body    = "
            <h3>Pesan Kontak Baru</h3>
            <p><strong>Nama:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Telepon:</strong> {$phone}</p>
            <p><strong>Pesan:</strong><br>{$message}</p>
        ";
        $mail->AltBody = "Nama: $name\nEmail: $email\nTelepon: $phone\nPesan:\n$message";

        $mail->send();
        header("Location: ../index.php#kontak?status=success");
    } catch (Exception $e) {
        header("Location: ../index.php#kontak?status=error&msg=" . urlencode("Gagal kirim: {$mail->ErrorInfo}"));
    }
    exit;
}