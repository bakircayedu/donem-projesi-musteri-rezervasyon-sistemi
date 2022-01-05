<?php
include "includes/adminHeader.php";
?> <div id="wrapper"> <?php
include "includes/adminNavigation.php";
?> <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"> PROFİL BİLGİLERİNİ GÜNCELLE </h1>
          <div class="col-xs-6"> <?php global $basarili;

if(isset($_POST['guncelle'])){

    
 $yeni_ad = $_POST['ad'];
 $yeni_soyad = $_POST['soyad'];
 $yeni_telefon = $_POST['telefon'];
 $yeni_mail = $_POST['mail'];
 $yeni_sifre = $_POST['sifre'];

 $query = "UPDATE restoransahibi SET Ad = '{$yeni_ad}' , Soyad = '{$yeni_soyad}' , Telefon = '{$yeni_telefon}' , Restoran_Sahibi_mail = '{$yeni_mail}' , Restoran_Sahibi_sifre = '{$yeni_sifre}' where Restoran_Sahibi_id = '{$_SESSION['Restoran_Sahibi_id']}' ";

  $guncelle = mysqli_query($connection,$query);
  


  if($query){

    $basarili ='
						<div class="alert alert-success" role="alert">Profil Başarıyla Güncellendi </div>';
    $_SESSION['Restoran_Sahibi_ad'] = $yeni_ad;
    $_SESSION['Restoran_Sahibi_soyad'] = $yeni_soyad;
    $_SESSION['Restoran_Sahibi_telefon'] = $yeni_telefon; 
    $_SESSION['Restoran_Sahibi_mail'] = $yeni_mail;
    $_SESSION['Restoran_Sahibi_sifre'] = $yeni_sifre;
}




echo "
						<meta http-equiv='refresh' content='0'>";
}



?> <?php
echo $basarili;
?> <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group row ">
                <label for="restoran_isim" class="col-sm-2 col-form-label">İsim</label>
                <input type="text" value="
										<?php echo $_SESSION['Restoran_Sahibi_ad']  ?>" class="form-control" name="ad">
              </div>
              <div class="form-group row">
                <label for="restoran_sef" class="col-sm-3 col-form-label">Soyisim</label>
                <input value="
											<?php echo $_SESSION['Restoran_Sahibi_soyad']  ?>" type="text" class="form-control" name="soyad">
              </div>
              <div class="form-group row">
                <label for="restoran_sef" class="col-sm-3 col-form-label">Telefon Numarası</label>
                <input value="
												<?php echo $_SESSION['Restoran_Sahibi_telefon']?>" type="text" class="form-control" name="telefon">
              </div>
              <div class="form-group row">
                <label for="restoran_sef" class="col-sm-3 col-form-label">Mail</label>
                <input value="
													<?php echo $_SESSION['Restoran_Sahibi_mail']?>" type="text" class="form-control" name="mail">
              </div>
              <div class="form-group row">
                <label for="restoran_sef" class="col-sm-3 col-form-label">Şifre</label>
                <input value="
														<?php echo $_SESSION['Restoran_Sahibi_sifre'] ?>" type="text" class="form-control" name="sifre">
              </div>
              <div class="form-group row">
                <input class="btn btn-primary" type="submit" name="guncelle" value="Güncelle">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> <?php
include "includes/adminFooter.php";
?>