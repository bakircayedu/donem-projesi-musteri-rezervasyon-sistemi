<?php ob_start(); ?> <?php include "./includes/db.php" ?> <?php  session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/hover.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./font-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    <title>Ana Sayfa</title>
  </head>
  <body> <?php if(isset($_GET['kategori'])){
  global $the_kategori;
               $the_kategori = $_GET['kategori'];  

            }?> <?php include "./includes/nav.php"  ?> <br>
    <br>
    <h1 class="h1"> <?php echo $the_kategori ?> Restoranları </h1>
    <hr class="cizgi">
    <div class="container px-4  ">
      <div class="row gx-5  "> <?php 
            $query = "SELECT * from restoranlar INNER JOIN restoranadres on restoranlar.Restoran_Adres_id = restoranadres.Restoran_Adres_id WHERE restoranlar.Restoran_tür = '{$the_kategori}'";
                            
            $select_restoran = mysqli_query($connection,$query);
            
              while ($row = mysqli_fetch_assoc($select_restoran)){
                $restoran_id = $row['Restoran_id'];
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
              ?> <div onclick="location.href='restoranOzel.php?bilgi&restoran_id=
																	<?php echo $restoran_id ?>'" class="col-sm-6 pt-5 box ">
          <div class="p-3 border bg-light maindiv  "> <?php  echo" 
																		<img width='600' class='img  ' src='../admin/images/$restoran_img' alt=image >"; ?> <h2> &nbsp &nbsp <i class="fas fa-utensils"></i> <?php echo $restoran_isim ?> &nbsp &nbsp <?php echo "($restoran_tür)" ?> </h2>
            <h4> &nbsp &nbsp &nbsp <i class="fas fa-map-marker-alt"></i> <?php echo $restoran_il . " ". $restoran_ilçe ." ". $restoran_mahalle ?> </h4>
            <h4> &nbsp &nbsp &nbsp <i class="fas fa-hat-chef"></i> Şef: <?php echo $restoran_Sef ?> &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp <i class="fas fa-users"></i> Kapasite: <?php echo $restoran_Kapasite?> </h4>
          </div>
        </div> <?php  } ?> </div>
    </div>
  </body>
</html>