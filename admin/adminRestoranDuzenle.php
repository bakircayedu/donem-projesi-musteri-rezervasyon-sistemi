<?php include "includes/adminHeader.php"  ?> <div id="wrapper"> <?php include "includes/adminNavigation.php"  ?> <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"> RESTORAN DÜZENLE </h1>
          <table class="table table-bordered table-hover ">
            <thead>
              <tr>
                <th>Restoran İsmi</th>
                <th>Restoran Fotoğrafı</th>
              </tr>
            </thead>
            <tbody> <?php 
                     $query = "SELECT * from restoranlar INNER JOIN restoranadres on restoranlar.Restoran_Adres_id = restoranadres.Restoran_Adres_id  WHERE Restoran_Sahibi_id = '{$_SESSION['Restoran_Sahibi_id']}'  ";
                     
                     $select_restoran = mysqli_query($connection,$query);
                     
                       while ($row = mysqli_fetch_assoc($select_restoran)){
                        
                         $restoran_adres_id = $row['Restoran_Adres_id'];
                         $restoran_isim = $row['Restoran_isim'];
                         $restoran_img = $row['Restoran_img'];
                     
                        echo "
							<tr>"; 
                        echo" 
								<td>$restoran_isim</td>";
                        echo" 
								<td>
									<img width='100' src='images/$restoran_img' alt=image >
									</td>";
                        echo "
									<td>
										<a href='adminRestoranGuncelle.php?guncelle&adres_id={$restoran_adres_id}'>Güncelle</a>
									</td> ";
                        echo "
									<td>
										<a href='adminRestoranDuzenle.php?delete={$restoran_adres_id}'>Sil</a>
									</td> ";

                         echo "
								</tr>";
                       }
                       
                     
                     ?> </tbody>
          </table> <?php if(isset($_GET['delete'])){
               $the_restoran_adres_id = $_GET['delete'];
               
               $query = "DELETE  FROM restoranadres WHERE 	Restoran_Adres_id = {$the_restoran_adres_id} ";
               $restoran_sil = mysqli_query($connection,$query);
               header("Location: adminRestoranDuzenle.php");
            }
               
               
            ?>
        </div>
      </div>
    </div>
  </div> <?php include "includes/adminFooter.php" ?>