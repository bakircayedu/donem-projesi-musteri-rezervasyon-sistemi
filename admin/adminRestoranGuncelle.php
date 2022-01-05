<?php
include "includes/adminHeader.php";
?> <div id="wrapper"> <?php
include "includes/adminNavigation.php";
?> <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"> RESTORAN GÜNCELLE </h1>
          <div class="col-xs-6"> <?php

global $basarili;
if(isset($_GET['adres_id'])){

  $the_adres_id = $_GET['adres_id'];
}

$query = "SELECT * from restoranlar INNER JOIN restoranadres on restoranlar.Restoran_Adres_id = restoranadres.Restoran_Adres_id where restoranadres.Restoran_Adres_id ={$the_adres_id } ";
                            
                            $select_restoran_by_Restoran_id = mysqli_query($connection,$query);
                            
                              while ($row = mysqli_fetch_assoc($select_restoran_by_Restoran_id)){
                                $restoran_isim = $row['Restoran_isim'];
                                $restoran_tür = $row['Restoran_tür'];
                                $restoran_Sef = $row['Restoran_Sef'];
                                $restoran_VergiNo = $row['Restoran_VergiNo'];
                                $restoran_Kapasite = $row['Restoran_Kapasite'];
                                $restoran_img = $row['Restoran_img'];

                               $restoran_il = $row['Restoran_il'];
                               $restoran_ilçe=$row['Restoran_ilçe'];
                               $restoran_mahalle=$row['Restoran_mahalle'];
                               $Restoran_acikadres = $row['Restoran_acikadres'];
                              }


if(isset($_POST['guncelle'])){
 
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

    if(empty($restoran_img)){

        $resim_sorgu = "SELECT * from restoranlar WHERE Restoran_Sahibi_id = '{$_SESSION['Restoran_Sahibi_id']}' ";
        
        $resim_bul = mysqli_query($connection,$resim_sorgu);

        while($row = mysqli_fetch_array($resim_bul)){
           $restoran_img = $row['Restoran_img'];
        }
    }

    $adres_sorgu = "UPDATE restoranadres SET Restoran_il = '{$Restoran_il}',Restoran_ilçe= '{$Restoran_ilce}', Restoran_mahalle= '{$Restoran_mahalle}', Restoran_acikadres = '{$Restoran_acikadres}' WHERE Restoran_Adres_id = '{$the_adres_id}' ";

    $adres_guncelle = mysqli_query($connection,$adres_sorgu);
    
    $restoran_sorgu = "UPDATE restoranlar SET Restoran_Kapasite='{$restoran_kapasite}', Restoran_VergiNo= '{$restoran_vergiNo}',Restoran_Sef='{$restoran_sef}',Restoran_img='{$restoran_img }',Restoran_tür='{$restoran_tur }',Restoran_isim='{$restoran_isim}'WHERE Restoran_Adres_id = '{$the_adres_id}' ";

    $restoran_guncelle = mysqli_query($connection,$restoran_sorgu);
    echo "
						<meta http-equiv='refresh' content='0'>";



}
?> <?php
echo $basarili;
?> <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group row ">
                <label for="restoran_isim" class="col-sm-2 col-form-label">Restoran İsmi</label>
                <input type="text" value="
										<?php echo $restoran_isim ?>" class="form-control" name="restoran_isim">
              </div>
              <div class="form-group row ">
                <label for="restoran_tür" class="col-sm-2 col-form-label">Restoran Türü</label>
                <select class="form-select" name="restoran_tür">
                  <option selected> <?php echo  $restoran_tür ?> </option>
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
                <input value="
											<?php echo $restoran_Sef ?>" type="text" class="form-control" name="restoran_sef">
              </div>
              <div class="form-group row">
                <label for="restoran_kapasite" class="col-sm-2 col-form-label">Restoran Kapasite</label>
                <input value="
												<?php echo $restoran_Kapasite ?>" type="text" class="form" name="restoran_kapasite">
              </div>
              <div class="form-group row">
                <label for="restoran_vergiNo" class="col-sm-2 col-form-label">Restoran Vergi Numarası</label>
                <input value="
													<?php echo $restoran_VergiNo ?>" type="text" class="form" name="restoran_vergiNo">
              </div>
              <div class="form-group row">
                <label for="restoran_il" class="col-sm-2 col-form-label">Restoran İl </label>
                <input value="
														<?php echo $restoran_il ?>" type="text" class="form" name="Restoran_il">
              </div>
              <div class="form-group row">
                <label for="restoran_ilçe" class="col-sm-2 col-form-label">Restoran İlçe</label>
                <input value="
															<?php echo $restoran_ilçe ?>" type="text" class="form" name="Restoran_ilçe">
              </div>
              <div class="form-group row">
                <label for="restoran_mahalle" class="col-sm-2 col-form-label">Restoran Mahalle</label>
                <input value="
																<?php echo $restoran_mahalle ?>" type="text" class="form" name="Restoran_mahalle">
              </div>
              <div class="form-group row  ">
                <label for="restoran_acikadres" class="col-sm-2 col-form-label">Restoran Açık Adres</label>
                <textarea type="text" class="form-control rounded-0" style="width: 300px;" rows="4" name="Restoran_acikadres">
																	<?php echo $Restoran_acikadres ?>
																</textarea>
              </div>
              <div class="form-group ">
                <label for="restoran_img" class="col-sm-2 col-form-label">Restoran Fotoğrafı</label>
                <img width='100' src="images/
																	<?php echo $restoran_img;?> " alt="">
                <input style="margin-left: 125px;" type="file" class="form" name="restoran_img">
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