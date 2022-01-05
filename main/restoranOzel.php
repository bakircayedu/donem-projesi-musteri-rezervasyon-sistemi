<?php ob_start(); ?>
<?php include "includes/db.php" ?>
<?php  session_start();?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/yenirestoranOzel.css">
  <link rel="stylesheet" href="./font-awesome/css/all.min.css">
  <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
  <title>Document</title>
</head>
<body>
  
<?php include "./includes/nav.php"  ?>
<br>
<br>
<br>

<?php if(isset($_GET['restoran_id'])){

global $the_restoran_id;
 $the_restoran_id = $_GET['restoran_id'];
}
 $query = "SELECT * from restoranlar INNER JOIN restoranadres on restoranlar.Restoran_Adres_id = restoranadres.Restoran_Adres_id where restoranlar.Restoran_id ={$the_restoran_id } ";
                           
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

?>

<?php 
if(isset($_POST['buton1'])){
  

  $query = "INSERT INTO rezervasyonlar(Restoran_id,time_sheet_id) VALUES ('{$the_restoran_id}',1)";
  $rez_ekle = mysqli_query($connection,$query);
  
  if (!$rez_ekle) {
    die('failed' . mysqli_error($connection));
}
else if($rez_ekle){

  $basarili ='<div class="alert alert-success" role="alert">Rezervasyon Başarıyla Yapıldı </div>';
  
}
}

else if(isset($_POST['buton2'])){
  
  $query = "INSERT INTO rezervasyonlar(Restoran_id,time_sheet_id) VALUES ('{$the_restoran_id}',2)";
  $rez_ekle = mysqli_query($connection,$query);
  
  if (!$rez_ekle) {
    die('failed' . mysqli_error($connection));
  
}
else if($rez_ekle){

  $basarili ='<div class="alert alert-success" role="alert">Rezervasyon Başarıyla Yapıldı </div>';
  
}
}
else if(isset($_POST['buton3'])){
  
  $query = "INSERT INTO rezervasyonlar(Restoran_id,time_sheet_id) VALUES ('{$the_restoran_id}',3)";
  $rez_ekle = mysqli_query($connection,$query);
  
  if (!$rez_ekle) {
    die('failed' . mysqli_error($connection));
  
}
else if($rez_ekle){

  $basarili ='<div class="alert alert-success" role="alert">Rezervasyon Başarıyla Yapıldı </div>';
  
}
}

else if(isset($_POST['buton4'])){
  
  $query = "INSERT INTO rezervasyonlar(Restoran_id,time_sheet_id) VALUES ('{$the_restoran_id}',4)";
  $rez_ekle = mysqli_query($connection,$query);
  
  if (!$rez_ekle) {
    die('failed' . mysqli_error($connection));
  
}
else if($rez_ekle){

  $basarili ='<div class="alert alert-success" role="alert">Rezervasyon Başarıyla Yapıldı </div>';
  
}
}

else if(isset($_POST['buton5'])){
  
  $query = "INSERT INTO rezervasyonlar(Restoran_id,time_sheet_id) VALUES ('{$the_restoran_id}',5)";
  $rez_ekle = mysqli_query($connection,$query);
  
  if (!$rez_ekle) {
    die('failed' . mysqli_error($connection));
  
}
else if($rez_ekle){

  $basarili ='<div class="alert alert-success" role="alert">Rezervasyon Başarıyla Yapıldı </div>';
  
}
}

else if(isset($_POST['buton6'])){
  
  $query = "INSERT INTO rezervasyonlar(Restoran_id,time_sheet_id) VALUES ('{$the_restoran_id}',6)";
  $rez_ekle = mysqli_query($connection,$query);
  
  if (!$rez_ekle) {
    die('failed' . mysqli_error($connection));
  
}
else if($rez_ekle){

  $basarili ='<div class="alert alert-success" role="alert">Rezervasyon Başarıyla Yapıldı </div>';
  
}
}



 ?>
    <div class="container">
      <div class="row">
      <?php
global $basarili;


echo $basarili;

?>
          <div class="col-lg-12 ">
              <div class="services-item ">
                  <img src="../admin/images/<?php echo$restoran_img?>" style="width: 500px; margin-left:100px"alt="">
                 <br>
                 <br>
                 <br>
                 <br>
                 
                  <h2 class="saat " > Saat Seçimi</h2>
                 
                  <div class="container-fluid-2">
                  <form action="" method="post" enctype="multipart/form-data" > 
               
                    <div class="row" >
                
                      <div class="col-sm-8 " >
                        <button   
                        <?php 
                         global $rez;
                        global $masaSayisi; 
                       



                     $rezervasyon = "SELECT time_sheet_id FROM rezervasyonlar WHERE Restoran_id ={$the_restoran_id } AND time_sheet_id = 1";
                      
                    
                            $select_rezervasyon= mysqli_query($connection,$rezervasyon);
                           
                             $rezervasyon_adeti = mysqli_num_rows($select_rezervasyon);
                             $masaSayisi = $restoran_Kapasite / 4;
                              $rez =  $rezervasyon_adeti;
                            
                              if ($rez >= $masaSayisi){

                                echo "disabled";
                                
                              }
                              else {
                                echo "enabled";
                              }

                            ?> name="buton1"  class="button1">17-18</button> 
                        <button  <?php  global $rez2;
                                    global $masaSayisi2; 
           


                     $rezervasyon = "SELECT time_sheet_id FROM rezervasyonlar WHERE Restoran_id ={$the_restoran_id } AND time_sheet_id = 2";
                            
                            $select_rezervasyon= mysqli_query($connection,$rezervasyon);
                            
                             $rezervasyon_adeti = mysqli_num_rows($select_rezervasyon);
                             $masaSayisi2 = $restoran_Kapasite / 4;
                              $rez2 =  $rezervasyon_adeti;
                              if ($rez2 >= $masaSayisi2){

                                echo "disabled";
                                
                              }
                              else {
                                echo "enabled";
                              }

                            ?> name="buton2" class="button2">18-19</button>
                        <button  <?php  global $rez;
                                    global $masaSayisi; 
           


                     $rezervasyon = "SELECT time_sheet_id FROM rezervasyonlar WHERE Restoran_id ={$the_restoran_id } AND time_sheet_id = 3";
                            
                            $select_rezervasyon= mysqli_query($connection,$rezervasyon);
                           
                             $rezervasyon_adeti = mysqli_num_rows($select_rezervasyon);
                             $masaSayisi = $restoran_Kapasite / 4;
                              $rez =  $rezervasyon_adeti;
                              if ($rez >= $masaSayisi){

                                echo "disabled";
                                
                              }
                              else {
                                echo "enabled";
                              }

                            ?> name="buton3"  class="button1">19-20</button> 
                      </div>
                    </div>
                      <div class="row2">
                       <div class="col-sm-8">
                        <button  <?php  global $rez;
                                    global $masaSayisi; 
           


                     $rezervasyon = "SELECT time_sheet_id FROM rezervasyonlar WHERE Restoran_id ={$the_restoran_id } AND time_sheet_id = 4";
                            
                            $select_rezervasyon= mysqli_query($connection,$rezervasyon);
                            
                             $rezervasyon_adeti = mysqli_num_rows($select_rezervasyon);
                             $masaSayisi = $restoran_Kapasite / 4;
                              $rez =  $rezervasyon_adeti;
                              if ($rez >= $masaSayisi){

                                echo "disabled";
                                
                              }
                              else {
                                echo "enabled";
                              }

                            ?> name="buton4" class="button1">20-21</button> 
                        <button  <?php  global $rez;
                                    global $masaSayisi; 
           


                     $rezervasyon = "SELECT time_sheet_id FROM rezervasyonlar WHERE Restoran_id ={$the_restoran_id } AND time_sheet_id = 5";
                            
                            $select_rezervasyon= mysqli_query($connection,$rezervasyon);
                           
                             $rezervasyon_adeti = mysqli_num_rows($select_rezervasyon);
                             $masaSayisi = $restoran_Kapasite / 4;
                              $rez =  $rezervasyon_adeti;
                              if ($rez >= $masaSayisi){

                                echo "disabled";
                                
                              }
                              else {
                                echo "enabled";
                              }

                            ?> name="buton5" class="button2">21-22</button>
                        <button  <?php  global $rez;
                                    global $masaSayisi; 
           


                     $rezervasyon = "SELECT time_sheet_id FROM rezervasyonlar WHERE Restoran_id ={$the_restoran_id } AND time_sheet_id = 6";
                            
                            $select_rezervasyon= mysqli_query($connection,$rezervasyon);
                            
                             $rezervasyon_adeti = mysqli_num_rows($select_rezervasyon);
                             $masaSayisi = $restoran_Kapasite / 4;
                              $rez =  $rezervasyon_adeti;
                              if ($rez >= $masaSayisi){

                                echo "disabled";
                                
                              }
                              else {
                                echo "enabled";
                              }

                             
                            ?> name="buton6" class="button1">22-23</button>
                       </div>
                      
                    </div>
                 </div>
                 </form>
                  <div class="container-fluid">
                  <h1> &nbsp &nbsp <i class="fas fa-utensils"></i> <?php echo $restoran_isim ?> &nbsp &nbsp (<?php echo $restoran_tür ?>) </h1>    
                    <br>
                     <h3> &nbsp &nbsp &nbsp <i class="fas fa-map-marker-alt"></i> <?php echo $restoran_il ?> - <?php echo $restoran_ilçe ?>  - <?php echo $restoran_mahalle ?> -<?php echo $Restoran_acikadres ?>  </h3> 
                    <br>
                      <h3>&nbsp &nbsp &nbsp <i class="fas fa-hat-chef"></i>  Şef:<?php echo $restoran_Sef ?>  &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp <i class="fas fa-users"></i> Kapasite: <?php echo $restoran_Kapasite ?> </h3><div class="rezervasyonbtn">
                    </div>
                  <br>
                </div>
                  
              </div>
          </div>
      </div>
    </div>
    
    



    



</body>
</html>