<?php 


ob_start();
session_start();
include 'baglan.php';


$kullanicisor=$db->prepare("select * from kullanici where kullanici_ad=:ad");
$kullanicisor->execute(array(
'ad'=> $_SESSION['kullanici_ad']
));
$say=$kullanicisor->rowCount();

if ($say==0) {
  header("location:../login.php?durum=izinsiz");
  exit; 
}


 ?>