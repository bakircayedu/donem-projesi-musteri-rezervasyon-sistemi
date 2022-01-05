<?php ob_start(); ?>
<?php include "includes/db.php" ?>
<?php  session_start();?>



<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../main/css/profilstyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="https://kit.fontawesome.com/5822a3ccea.js" ></script>
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 

  <title>Document</title>
</head>
<body>
   
<?php include "./includes/nav.php"  ?>

<?php global $basarili;

if(isset($_POST['guncelle'])){

 $yeni_ad = $_POST['ad'];
 $yeni_soyad = $_POST['soyad'];
 $yeni_mail = $_POST['mail'];
 $yeni_sifre = $_POST['sifre'];
 $yeni_telefon = $_POST['telefon'];
 $yeni_il= $_POST['il'];
 $yeni_ilce = $_POST['ilce'];
 $yeni_mahalle = $_POST['mahalle'];


 $adres_sorgu = "UPDATE musteriadres SET Musteri_il = '{$yeni_il}', Musteri_ilce= '{$yeni_ilce}', Musteri_mahalle= '{$yeni_mahalle}' WHERE Musteri_Adres_id  = '{$_SESSION['Musteri_Adres_id']}' ";

 $adres_guncelle = mysqli_query($connection,$adres_sorgu);
 
 $musteri_sorgu = "UPDATE musteriler SET Ad ='{$yeni_ad}', Soyad = '{$yeni_soyad}',Telefon ='{$yeni_telefon}',Musteri_mail='{$yeni_mail }',Musteri_sifre='{$yeni_sifre }' WHERE Musteri_Adres_id  = '{$_SESSION['Musteri_id']}' ";

 $musteri_guncelle = mysqli_query($connection,$musteri_sorgu);
 

  if($musteri_sorgu){

    $basarili ='<div class="alert alert-success" role="alert">Profil Başarıyla Güncellendi </div>';
   
    $_SESSION['musteri_ad'] = $yeni_ad;
    $_SESSION['musteri_soyad'] = $yeni_soyad;
    $_SESSION['musteri_telefon'] = $yeni_telefon;
    $_SESSION['musteri_mail'] = $yeni_mail;
    $_SESSION['musteri_sifre'] = $yeni_sifre;
    $_SESSION['musteri_il'] = $yeni_il;
    $_SESSION['musteri_ilce'] = $yeni_ilce;
    $_SESSION['musteri_mahalle'] = $yeni_mahalle;

}





}


?>




<br>
<br>
<br>
      <div class="container ">
<?php
echo $basarili;
?>
          <form class="form"  action="" method="post" enctype="multipart/form-data">
              <div class="form-group ">
                  <label for="ad">Ad</label>
                  <input type="text" value="<?php echo $_SESSION['musteri_ad']  ?>" class="form-control " name="ad" />
              </div>
              <div class="form-group">
                <label for="soyad">Soyad</label>
                <input type="text" value="<?php echo $_SESSION['musteri_soyad']  ?>" class="form-control" name="soyad" />
            </div>
            <div class="form-group">
                <label for="mail">Mail</label>
                <input type="text" value="<?php echo $_SESSION['musteri_mail']  ?>" class="form-control" name="mail" />
            </div>
            <div class="form-group">
                <label for="sifre">Şifreniz</label>
                <input type="text" value="<?php echo $_SESSION['musteri_sifre']  ?>" class="form-control" name="sifre" />
            </div>
            <div class="form-group">
                <label for="telefon">Telefon Numaranız</label>
                <input type="text" value="<?php echo $_SESSION['musteri_telefon']  ?>"  class="form-control" name="telefon" />
            </div>
            <div class="form-group">
                <label for="il">İliniz</label>
                <input type="text" value="<?php echo $_SESSION['musteri_il']  ?>" class="form-control" name="il" />
            </div>
            <div class="form-group">
                <label for="ilce">İlçeniz</label>
                <input type="text" value="<?php echo $_SESSION['musteri_ilce']  ?>" class="form-control" name="ilce" />
            </div>
            <div class="form-group">
                <label for="mahalle">Mahalleniz</label>
                <input type="text" value="<?php echo $_SESSION['musteri_mahalle']  ?>" class="form-control" name="mahalle" />
            </div>
            <button type="submit"  name="guncelle" class="btn btn-primary">Güncelle</button>

          </form>
      </div>























</body>
</html>