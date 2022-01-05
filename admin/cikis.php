
<?php include "./includes/db.php" ?> 
<?php session_start(); ?>


<?php 

$_SESSION['Restoran_Sahibi_id'] = null;
$_SESSION['Restoran_Sahibi_ad'] = null;
$_SESSION['Restoran_Sahibi_soyad'] = null;
$_SESSION['Restoran_Sahibi_telefon'] = null;
$_SESSION['Restoran_Sahibi_mail'] = null;
$_SESSION['Restoran_Sahibi_sifre'] = null;

header("Location: ../login/RestoranSahibiLoginindex.php");

?>

