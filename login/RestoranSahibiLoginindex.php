<?php include "./includes/db.php" ?> 
<?php session_start(); ?> 
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

    <title>Giriş Sayfası</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/michael-browning-MtqG1lWcUw0-unsplash.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="mb-4">
              <h1 class="mb-4" style="text-align: center;">Restoran Rezervasyon Sistemine Hoş Geldiniz</h1>
              <h3 style="text-align: center;">Restoran Sahibi Girişi</h3>
              <h2>Giriş Yap</h3>
              <?php

              global $hata;
              global $Restoran_Sahibi_mail;
              global $Restoran_Sahibi_sifre;
              global $restoranSahibi_query;

             if(isset($_POST['girisyap'])){

               $mail = $_POST['mail'];
               $sifre = $_POST['sifre'];

              
              $query = "SELECT * FROM restoransahibi where Restoran_Sahibi_mail = '{$mail}' ";

              $restoranSahibi_query = mysqli_query($connection,$query);

             

              while($row = mysqli_fetch_array($restoranSahibi_query)){

               $Restoran_Sahibi_id = $row['Restoran_Sahibi_id'];
               $Restoran_Sahibi_ad = $row['Ad'];
               $Restoran_Sahibi_soyad = $row['Soyad'];
               $Restoran_Sahibi_telefon = $row['Telefon'];
               $Restoran_Sahibi_mail = $row['Restoran_Sahibi_mail'];
               $Restoran_Sahibi_sifre = $row['Restoran_Sahibi_sifre'];

              }
              
              if($mail === $Restoran_Sahibi_mail && $sifre === $Restoran_Sahibi_sifre ){
              $_SESSION['Restoran_Sahibi_id'] = $Restoran_Sahibi_id;
              $_SESSION['Restoran_Sahibi_ad'] = $Restoran_Sahibi_ad;
              $_SESSION['Restoran_Sahibi_soyad'] = $Restoran_Sahibi_soyad;
              $_SESSION['Restoran_Sahibi_telefon'] = $Restoran_Sahibi_telefon;
              $_SESSION['Restoran_Sahibi_mail'] = $Restoran_Sahibi_mail;
              $_SESSION['Restoran_Sahibi_sifre'] = $Restoran_Sahibi_sifre;

              header("Location:../admin/index.php");

              }
              else{

                
                $hata = '<div class="alert alert-danger" role="alert">Mailiniz veya Şifreniz Hatalı !!! </div>';

              }




             }
             
             
             
             
             
             ?>
              <?php 
         echo $hata;
         
         ?>
            </div>
            <form action="RestoranSahibiLoginindex.php" method="post">
              <div class="form-group last ">
                <label for="username">Mail</label>
                <input type="text" class="form-control" name="mail">

              </div>
              <div class="form-group last mb-3 mt-3">
                <label for="password">Şifre</label>
                <input type="password" class="form-control" name="sifre">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <span class="ml"><a href="RestoranSahibiUyeOl.php" class="forgot-pass">Üye Ol</a></span> 
                <span class="ml-auto"><a href="MusteriLoginindex.php" class="forgot-pass">Müşteri Girişi</a></span> 
                 
              </div>

              <input type="submit" value="Giriş Yap" name="girisyap" class="btn btn-block btn-primary">

              
              
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