<?php
include "includes/adminHeader.php";
?> <div id="wrapper"> <?php
include "includes/adminNavigation.php";
?> <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"> RESTORAN EKLE </h1>
          <div class="col-xs-6"> <?php
global $hata;
global $basarili;
global $restoranEkle;

if (isset($_POST['submit'])) {
    
    $restoran_isim     = $_POST['restoran_isim'];
    $restoran_tur      = $_POST['restoran_tür'];
    $restoran_sef      = $_POST['restoran_sef'];
    $restoran_kapasite = $_POST['restoran_kapasite'];
    $restoran_vergiNo  = $_POST['restoran_vergiNo'];
    $restoran_img      = $_FILES['restoran_img']['name'];
    $restoran_img_temp = $_FILES['restoran_img']['tmp_name'];
    $Restoran_il       = $_POST['Restoran_il'];
    $Restoran_ilce     = $_POST['Restoran_ilçe'];
    $Restoran_mahalle  = $_POST['Restoran_mahalle'];
    $Restoran_acikadres = $_POST['Restoran_acikadres'];

    move_uploaded_file($restoran_img_temp,"images/$restoran_img");
    
    
        
    
    
    if ($Restoran_il == "" || $Restoran_ilce == "" || $Restoran_mahalle == "") {
        $hata = '
						<div class="alert alert-danger" role="alert">Eksik Alan Bırakmayınız </div>';
        
    } else {
        
        $query2 = "INSERT INTO restoranadres(Restoran_il,Restoran_ilçe,Restoran_mahalle,Restoran_acikadres) 
        VALUES ('{$Restoran_il}','{$Restoran_ilce}','{$Restoran_mahalle}','{$Restoran_acikadres}')";
        
        $restoranAdresEkle = mysqli_query($connection, $query2);
        $last_id = mysqli_insert_id($connection);
        
        if (!$restoranAdresEkle) {
            die('failed' . mysqli_error($connection));
        }
        
    }

    

    if ($restoran_isim == "" || $restoran_tur == "" || $restoran_sef == "" || $restoran_kapasite == "" || $restoran_vergiNo == "") {
        $hata = '
						<div class="alert alert-danger" role="alert">Eksik Alan Bırakmayınız </div>';
        
    } else {
        
        $query = "INSERT INTO restoranlar(Restoran_isim,Restoran_Sahibi_id,Restoran_Adres_id,Restoran_tür,Restoran_img,Restoran_Sef,Restoran_Kapasite,Restoran_VergiNo)
        VALUES ('{$restoran_isim}','{$_SESSION['Restoran_Sahibi_id']}','{$last_id}','{$restoran_tur}','{$restoran_img}','{$restoran_sef}','{$restoran_kapasite}','{$restoran_vergiNo}')";
        
        $restoranEkle = mysqli_query($connection, $query);
        
        if (!$restoranEkle) {
            die('failed' . mysqli_error($connection));
        }
        
    }
    if($restoranEkle){

        $basarili ='
						<div class="alert alert-success" role="alert">Restoran Başarıyla eklendi </div>';
        
    }
    
    
    
    
    
}

?> <?php
echo $hata;
echo $basarili;
?> <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group row ">
                <label for="restoran_isim" class="col-sm-2 col-form-label">Restoran İsmi</label>
                <input type="text" class="form-control" name="restoran_isim">
              </div>
              <div class="form-group row ">
                <label for="restoran_tür" class="col-sm-2 col-form-label">Restoran Türü</label>
                <select class="form-select" name="restoran_tür">
                  <option>Fast-Food</option>
                  <option>Uzak Doğu</option>
                  <option>Ev Yemekleri</option>
                  <option>Tatlı-Pastane</option>
                  <option>Deniz Ürünleri</option>
                  <option>Cafe</option>
                </select>
              </div>
              <div class="form-group row">
                <label for="restoran_sef" class="col-sm-3 col-form-label">Restoran Şef Adı</label>
                <input type="text" class="form-control" name="restoran_sef">
              </div>
              <div class="form-group row">
                <label for="restoran_kapasite" class="col-sm-2 col-form-label">Restoran Kapasite</label>
                <input type="text" class="form" name="restoran_kapasite">
              </div>
              <div class="form-group row">
                <label for="restoran_vergiNo" class="col-sm-2 col-form-label">Restoran Vergi Numarası</label>
                <input type="text" class="form" name="restoran_vergiNo">
              </div>
              <div class="form-group row">
                <label for="restoran_il" class="col-sm-2 col-form-label">Restoran İl </label>
                <input type="text" class="form" name="Restoran_il">
              </div>
              <div class="form-group row">
                <label for="restoran_ilçe" class="col-sm-2 col-form-label">Restoran İlçe</label>
                <input type="text" class="form" name="Restoran_ilçe">
              </div>
              <div class="form-group row">
                <label for="restoran_mahalle" class="col-sm-2 col-form-label">Restoran Mahalle</label>
                <input type="text" class="form" name="Restoran_mahalle">
              </div>
              <div class="form-group row  ">
                <label for="restoran_acikadres" class="col-sm-2 col-form-label">Restoran Açık Adres</label>
                <textarea type="text" class="form-control rounded-0" style="width: 300px;" rows="4" name="Restoran_acikadres"></textarea>
              </div>
              <div class="form-group ">
                <label for="restoran_img" class="col-sm-2 col-form-label">Restoran Fotoğrafı</label>
                <input type="file" class="form" name="restoran_img">
              </div>
              <div class="form-group row">
                <input class="btn btn-primary" type="submit" name="submit" value="Restoran Ekle">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> <?php
include "includes/adminFooter.php";
?>