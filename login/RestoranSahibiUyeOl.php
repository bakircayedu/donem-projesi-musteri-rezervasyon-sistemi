<?php include "./includes/db.php" ?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Üye Ol</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url(images/michael-browning-MtqG1lWcUw0-unsplash.jpg);"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="mb-4">
              <h1>Üye Ol</h1>

              <?php 
         global $hata;
         global $basarili;
         global $restoranSahibiEkle;
         if(isset($_POST['uyeol'])){

            $ad = $_POST['ad'];
            $soyad = $_POST['soyad'];
            $telefon = $_POST['telefon'];
            $mail =  $_POST['mail'];
            $sifre = $_POST['sifre'];
            

          if ($ad == "" || $soyad == "" ||  $telefon == "" || $mail == "" || $sifre == "") {
              $hata = '<div class="alert alert-danger" role="alert">Eksik Alan Bırakmayınız </div>';
              
          } else {
              
              $query = "INSERT INTO restoransahibi(Ad,Soyad,Telefon,Restoran_Sahibi_mail,Restoran_Sahibi_sifre)
              VALUES ('{$ad}','{$soyad}','{$telefon}','{$mail}','{$sifre}')";
              
              $restoranSahibiEkle = mysqli_query($connection, $query);
              
              if (!$restoranSahibiEkle) {
                  die('failed' . mysqli_error($connection));
              }
              
          }
          if($restoranSahibiEkle){
      
              $basarili ='<div class="alert alert-success" role="alert">Başarıyla Üye Olundu </div>';
          }

         }
  
         ?>  
         
         
         <?php 
         echo $hata;
         echo $basarili;
         ?>
             
            </div>
            <form action="RestoranSahibiUyeOl.php" method="post">
              <div class="form-group last">
                <label for="username">Ad</label>
                <input type="text" class="form-control" name="ad">

              </div>

              <div class="form-group last mb-3 mt-3">
                <label for="password">Soyad</label>
                <input type="text" class="form-control" name="soyad">
                
              </div>

              <div class="form-group last mb-3 mt-3">
                <label for="password">Telefon</label>
                <input type="text" class="form-control" name="telefon">
                
              </div>

              <div class="form-group last mb-3 mt-3">
                <label for="password">Mail</label>
                <input type="text" class="form-control" name="mail">
                
              </div>
              <div class="form-group last mb-3 mt-3">
                <label for="password">Şifre</label>
                <input type="password" class="form-control" name="sifre">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <span class="ml"><a href="RestoranSahibiLoginindex.php" class="forgot-pass">Giriş Yap</a></span> 

              </div>

              <input type="submit" value="Üye Ol" name="uyeol" class="btn btn-block btn-primary">

              
              
            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>