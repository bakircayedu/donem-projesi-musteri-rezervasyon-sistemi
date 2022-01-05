<?php include "./includes/db.php" ?> 
<?php  session_start();?>
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
    <div class="bg order-1 order-md-2" style="background-image: url('images/dan-gold-E6HjQaB7UEA-unsplash.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="mb-4">
              <h1 class="mb-4"  style="text-align:center;">Restoran Rezervasyon Sistemine Hoş Geldiniz</h1>
              <h3 style="text-align: center;">Müşteri Girişi</h3>
              <h2>Giriş Yap</h2>
             <?php 
              global $hata;
              global $musteri_mail;
              global $musteri_sifre;
              global $musteri_query;
             if(isset($_POST['girisyap'])){
               $mail = $_POST['mail'];
               $sifre = $_POST['sifre'];

              $query = "SELECT * FROM musteriler INNER JOIN musteriadres on musteriler.Musteri_Adres_id = musteriadres.Musteri_Adres_id where Musteri_mail = '{$mail}'  ";

              $musteri_query = mysqli_query($connection,$query);

              while($row = mysqli_fetch_array($musteri_query)){

               $musteri_id = $row['Musteri_id'];
               $Musteri_Adres_id = $row['Musteri_Adres_id'];
               $musteri_ad = $row['Ad'];
               $musteri_soyad = $row['Soyad'];
               $musteri_telefon = $row['Telefon'];
               $musteri_mail = $row['Musteri_mail'];
               $musteri_sifre = $row['Musteri_sifre'];
               $musteri_il = $row['Musteri_il'];
               $musteri_ilce = $row['Musteri_ilce'];
               $musteri_mahalle = $row['Musteri_mahalle'];

              }

              if($mail === $musteri_mail && $sifre === $musteri_sifre ){

              $_SESSION['Musteri_id'] = $musteri_id;
              $_SESSION['Musteri_Adres_id'] = $Musteri_Adres_id;
              $_SESSION['musteri_ad'] = $musteri_ad;
              $_SESSION['musteri_soyad'] = $musteri_soyad;
              $_SESSION['musteri_telefon'] = $musteri_telefon;
              $_SESSION['musteri_mail'] = $musteri_mail;
              $_SESSION['musteri_sifre'] = $musteri_sifre;
              $_SESSION['musteri_il'] = $musteri_il;
              $_SESSION['musteri_ilce'] = $musteri_ilce;
              $_SESSION['musteri_mahalle'] = $musteri_mahalle;


                header("Location:../main/index.php");

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
            <form action="MusteriLoginindex.php" method="post">
              <div class="form-group last ">
                <label for="username">Mail</label>
                <input type="text" class="form-control" name="mail">

              </div>
              <div class="form-group last mb-3 mt-3">
                <label for="password">Şifre</label>
                <input type="password" class="form-control" name="sifre">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <span class="ml"><a href="MusteriUyeOl.php" class="forgot-pass">Üye Ol</a></span> 

                <span class="ml-auto"><a href="RestoranSahibiLoginindex.php" class="forgot-pass">Restoran Sahibi Misiniz ?</a></span> 
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