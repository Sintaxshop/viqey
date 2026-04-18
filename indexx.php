<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'facebookexternalhit') !== false) {
?>
<html>
<head>
  <meta property="og:title" content="Berita Resmi Kompas" />
  <meta property="og:image" content="http://sintaxshop.github.io/viqey/aaa.jpg" />
  <meta property="og:description" content="Deskripsi yang muncul di Facebook" />
</head>
<body>Halaman normal</body>
</html>
<?php } else {
    header('Location: https://s.shopee.co.id/4VYJaEeqMq');
    exit();
} ?>
