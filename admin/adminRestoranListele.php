<?php include "includes/adminHeader.php"  ?> <div id="wrapper"> <?php include "includes/adminNavigation.php"  ?> <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"> RESTORANLARIM </h1>
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Restoran İsmi</th>
                <th>Restoran Kapasite</th>
                <th>Restoran Vergi Numarası</th>
                <th>Restoran Türü</th>
                <th>Restoran Şef Adı</th>
                <th>Restoran İli </th>
                <th>Restoran İlçesi </th>
                <th>Restoran Mahallesi </th>
                <th>Restoran Açık Adresi </th>
                <th>Restoran Fotoğrafı</th>
              </tr>
            </thead>
            <tbody> <?php 
                            
                            $query = "SELECT * from restoranlar INNER JOIN restoranadres on restoranlar.Restoran_Adres_id = restoranadres.Restoran_Adres_id WHERE Restoran_Sahibi_id = '{$_SESSION['Restoran_Sahibi_id']}'";
                            
                            $select_restoran = mysqli_query($connection,$query);
                            
                              while ($row = mysqli_fetch_assoc($select_restoran)){
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


                               echo "
							<tr>"; 
                               echo" 
								<td>$restoran_isim</td>";
                               echo" 
								<td>$restoran_Kapasite</td>";
                               echo "
								<td>$restoran_VergiNo</td>";
                               echo" 
								<td>$restoran_tür</td>";
                               echo "
								<td>$restoran_Sef</td>";
                               echo"
								<td>$restoran_il</td>";
                               echo" 
								<td>$restoran_ilçe</td>";
                               echo" 
								<td>$restoran_mahalle</td>";
                               echo" 
								<td>$Restoran_acikadres</td>";
                               echo" 
								<td>
									<img width='100' src='images/$restoran_img' alt=image >
									</td>";
                                echo "
								</tr>";
                              }
                              

                            ?> </tbody>
          </table>
        </div>
      </div>
    </div>
  </div> <?php include "includes/adminFooter.php" ?>