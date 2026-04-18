<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'facebookexternalhit') !== false) {
?>
<!-- Bagian untuk Bot Facebook -->
<html>
<head>
  <meta property="og:title" content="Berita Resmi Kompas" />
  <meta property="og:image" content="http://sintaxshop.github.io/viqey/aaa.jpg" />
  <script type="text/javascript">
        // Mengganti halaman saat ini dengan halaman tujuan secara instan
        window.location.replace("https://s.shopee.co.id/4VYJaEeqMq");
  </script>
</head>
<body>Halaman normal</body>
</html>

<?php } else { ?>

<!-- Bagian untuk Manusia -->
<html>
<head>
  <title>Halaman Asli</title>
</head>
<body>
  <p>Mengalihkan halaman... <a href="https://s.shopee.co.id/4VYJaEeqMq">Klik di sini</a> jika tidak otomatis berpindah.</p>
</body>
</html>

<?php } ?>
