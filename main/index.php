<?php ob_start(); ?> <?php include "includes/db.php" ?> <?php  session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/mainstyle.css">
    <script src="https://kit.fontawesome.com/5822a3ccea.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Ana Sayfa</title>
  </head>
  <body> <?php include "./includes/nav.php"  ?> <div class="imgarea">
      <div class="resim">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      </div>
    </div>
    <div class="imgarea2">
      <div class="resim2">
        <h2 class="h2.2"></h2>
      </div>
    </div>
    <div class="imgarea3">
      <div class="resim3"></div>
    </div>
    <div class="imgarea4">
      <div class="resim4"></div>
    </div>
    <div class="imgarea5">
      <div class="resim5"></div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h3 class="anabaslık"> Restoran Kategorileri </h3>
    <hr class="cizgi2">
    <h2 class="baslık"> Fast Food Restoranları
      <hr class="cizgi">
    </h2>
    <h2 class="baslık2"> Uzak Doğu Restoranları
      <hr class="cizgi">
    </h2>
    <h2 class="baslık3"> Ev Yemekleri Restoranları
      <hr class="cizgi">
    </h2>
    <div onclick="location.href='kategoriyeGoreListele.php?kategori=Fast-Food'" class="kategoriarea1">
      <div class="kategori1"></div>
    </div>
    <div class="kategaoriarea2">
      <div onclick="location.href='kategoriyeGoreListele.php?kategori=Uzak Doğu'" class="kategori2"></div>
    </div>
    <div class="kategoriarea3">
      <div onclick="location.href='kategoriyeGoreListele.php?kategori=Ev Yemekleri'" class="kategori3"></div>
    </div>
    <h2 class="baslık4"> Tatlı Restoranları
      <hr class="cizgi">
    </h2>
    <h2 class="baslık5"> Deniz Ürünleri Restoranları
      <hr class="cizgi">
    </h2>
    <h2 class="baslık6"> Kahve Restoranları
      <hr class="cizgi">
    </h2>
    <div class="kategoriarea4">
      <div onclick="location.href='kategoriyeGoreListele.php?kategori=Tatlı-Pastane'" class="kategori4"></div>
    </div>
    <div class="kategoriarea5">
      <div onclick="location.href='kategoriyeGoreListele.php?kategori=Deniz Ürünleri'" class="kategori5"></div>
    </div>
    <div class="kategoriarea6">
      <div onclick="location.href='kategoriyeGoreListele.php?kategori=Kahve'" class="kategori6"></div>
    </div>
    <div class="footer"></div>
  </body>
</html>