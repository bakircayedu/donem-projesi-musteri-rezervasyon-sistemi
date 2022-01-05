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
    <div class="bg order-1 order-md-2" style="background-image: url('images/dan-gold-E6HjQaB7UEA-unsplash.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="mb-4">
              <h1>Üye Ol</h1>
             
         <?php 
         global $hata;
         global $basarili;
         global $musteriEkle;
         if(isset($_POST['uyeol'])){

            $ad = $_POST['ad'];
            $soyad = $_POST['soyad'];
            $telefon = $_POST['telefon'];
            $mail =  $_POST['mail'];
            $sifre = $_POST['sifre'];
            $il = $_POST['il'];
            $ilce = $_POST['ilce'];
            $mahalle = $_POST['mahalle'];

            if ($il == "" || $ilce == "" || $mahalle == "") {
              $hata = '<div class="alert alert-danger" role="alert">Eksik Alan Bırakmayınız </div>';
              
          } else {
              
              $query2 = "INSERT INTO musteriadres(Musteri_il,Musteri_ilce,Musteri_mahalle) 
              VALUES ('{$il}','{$ilce}','{$mahalle}')";
              
              $musteriAdresEkle = mysqli_query($connection, $query2);
              $last_id = mysqli_insert_id($connection);
              
              if (!$musteriAdresEkle) {
                  die('failed' . mysqli_error($connection));
              }
              
          }
      
          
      
          if ($ad == "" || $soyad == "" ||  $telefon == "" || $mail == "" || $sifre == "") {
              $hata = '<div class="alert alert-danger" role="alert">Eksik Alan Bırakmayınız </div>';
              
          } else {
              
              $query = "INSERT INTO musteriler(Musteri_Adres_id,Ad,Soyad,Telefon,Musteri_mail,Musteri_sifre)
              VALUES ('{$last_id}','{$ad}','{$soyad}','{$telefon}','{$mail}','{$sifre}')";
              
              $musteriEkle = mysqli_query($connection, $query);
              
              if (!$musteriEkle) {
                  die('failed' . mysqli_error($connection));
              }
              
          }
          if($musteriEkle){
      
              $basarili ='<div class="alert alert-success" role="alert">Başarıyla Üye Olundu </div>';
          }

         }
  
         ?>  
         
         
         <?php 
         echo $hata;
         echo $basarili;
         ?>
            </div>
        <form action="MusteriUyeOl.php" method="post">
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

              <div class="form-group last mb-3 mt-3">
                <label for="password">İl</label>
                <input type="text" class="form-control" name="il">
                
              </div>

              <div class="form-group last mb-3 mt-3">
                <label for="password">İlçe</label>
                <input type="text" class="form-control" name="ilce">
                
              </div>

              <div class="form-group last mb-3 mt-3">
                <label for="password">Mahalle</label>
                <input type="text" class="form-control" name="mahalle">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <span class="ml"><a href="MusteriLoginindex.php" class="forgot-pass">Giriş Yap</a></span> 

                <span class="ml-auto"><a href="RestoranSahibiLoginindex.php" class="forgot-pass">Restoran Sahibi Misiniz ?</a></span> 
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