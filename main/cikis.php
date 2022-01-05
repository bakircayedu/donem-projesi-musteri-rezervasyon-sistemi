
<?php include "./includes/db.php" ?> 
<?php session_start(); ?>


<?php 

$_SESSION['Musteri_id'] = null;
$_SESSION['Musteri_Adres_id'] = null;
$_SESSION['musteri_ad'] = null;
$_SESSION['musteri_soyad'] = null;
$_SESSION['musteri_telefon'] = null;
$_SESSION['musteri_mail'] = null;
$_SESSION['musteri_sifre'] = null;
$_SESSION['musteri_il'] = null;
$_SESSION['musteri_ilce'] =null;
$_SESSION['musteri_mahalle'] = null;

header("Location: ../login/MusteriLoginindex.php");

?>

