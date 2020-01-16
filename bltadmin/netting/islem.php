<?php 
ob_start();
session_start();
include 'baglan.php';
 
if (isset($_POST['girisyap']))
{
   $kullanici_ad=$_POST['kullanici_ad'];
   $kullanici_sifre=md5($_POST['kullanici_sifre']);

if ($kullanici_ad && $kullanici_sifre) 
{
$kullanicisor=$db->prepare("SELECT * from kullanici where kullanici_ad=:ad and kullanici_sifre=:sifre ");
$kullanicisor->execute(array(

'ad' => $kullanici_ad,
'sifre' => $kullanici_sifre

));  

echo $say=$kullanicisor->rowCount();


if ($say>0) 
{
$_SESSION['kullanici_ad']=$kullanici_ad;

header("location:../index.php");	
}

else
{
	header("location:../login.php?durum=no");
}

}



}






 if (isset($_POST['genelayarkaydet'])) 
 {
 	 $ayarkaydet=$db->prepare("UPDATE ayar SET 
 	 	ayar_siteurl=:siteurl ,
 	 	 ayar_title=:title ,
 	 	 ayar_description=:description,
 	 	 ayar_keywords=:keywords
 	 	  WHERE ayar_id=0");

 	 $update=$ayarkaydet->execute(array( 
 	 	'siteurl'=>$_POST['ayar_siteurl'], 
 	 	'title'=>$_POST['ayar_title'],
 	 	'description'=>$_POST['ayar_description'],
 	 	'keywords'=>$_POST['ayar_keywords']

 	 	 ));

 if ($update) 
 {
 header("location:../genel-ayar.php?durum=ok");
 }

 else
{
	 header("location:../genel-ayar.php?durum=no");
}
}


//iletisim VT_BAGLANTİSİ

if (isset($_POST['iletisimayarkaydet'])) 
 {
 	 $ayarkaydet=$db->prepare("UPDATE ayar SET 
 	 	ayar_tel=:tel ,
 	 	 ayar_mail=:mail ,
 	 	 ayar_adres=:adres
 	 	  WHERE ayar_id=0");

 	 $update=$ayarkaydet->execute(array( 
 	 	'tel'=>$_POST['ayar_tel'], 
 	 	'mail'=>$_POST['ayar_mail'],
 	 	'adres'=>$_POST['ayar_adres']

 	 	 ));


 if ($update) 
 {
 header("location:../iletisim-ayar.php?durum=ok");
 }

 else
{
	 header("location:../iletisim-ayar.php?durum=no");

} }





//APİ VT_BAGLANTİSİ

if (isset($_POST['apiayarkaydet'])) 
 {
 	 $ayarkaydet=$db->prepare("UPDATE ayar SET 
 	 	ayar_recaptcha=:recaptcha ,
 	 	 ayar_googlemap=:googlemap ,
 	 	 ayar_analystic=:analystic
 	 	  WHERE ayar_id=0");

 	 $update=$ayarkaydet->execute(array( 
 	 	'recaptcha'=>$_POST['ayar_recaptcha'], 
 	 	'googlemap'=>$_POST['ayar_googlemap'],
 	 	'analystic'=>$_POST['ayar_analystic']

 	 	 ));


 if ($update) 
 {
 header("location:../api-ayar.php?durum=ok");
 }

 else
{
	 header("location:../api-ayar.php?durum=no");

} }


//SOSYALMEDYA VT_BAGLANTİSİ

if (isset($_POST['sosyalmedyaayarkaydet'])) 
 {
 	 $ayarkaydet=$db->prepare("UPDATE ayar SET 
 	 	ayar_facebook=:facebook,
 	 	 ayar_twitter=:twitter 
 	 	  WHERE ayar_id=0");

 	 $update=$ayarkaydet->execute(array( 
 	 	'facebook'=>$_POST['ayar_facebook'],
 	 	'twitter'=>$_POST['ayar_twitter']
 	 	));


 if ($update) 
 {
 header("location:../sosyalmedya-ayar.php?durum=ok");
 }

 else
{
	 header("location:../sosyalmedya-ayar.php?durum=no");

} }



//HAKKIMIZDA VT_BAGLANTİSİ

if (isset($_POST['hakkimizdaayarkaydet'])) 
 {
 	 $ayarkaydet=$db->prepare("UPDATE hakkimizda SET 
 	 	hakkimizda_baslik=:baslik,
 	 	 hakkimizda_icerik=:icerik,
 	 	 hakkimizda_vizyon=:vizyon,

 	 	 hakkimizda_misyon=:misyon

 	 	  WHERE hakkimizda_id=0");

 	 $update=$ayarkaydet->execute(array( 
 	 	'baslik'=>$_POST['hakkimizda_baslik'],
 	 	'icerik'=>$_POST['hakkimizda_icerik'],
 	 	'vizyon'=>$_POST['hakkimizda_vizyon'],

 	 	'misyon'=>$_POST['hakkimizda_misyon']

 	 	));


 if ($update) 
 {
 header("location:../hakkimizda-ayar.php?durum=ok");
 }

 else
{
	 header("location:../hakkimizda-ayar.php?durum=no");

} }



//HİZMETLERİMİZ VT_BAGLANTİSİ

if (isset($_POST['hizmetlerimizayarkaydet'])) 
 {
 	 $ayarkaydet=$db->prepare("UPDATE hizmetlerimiz SET 
 	 	hizmetlerimiz_baslik1=:baslik1 ,
 	 	 hizmetlerimiz_icerik2=:icerik2,
 	 	 hizmetlerimiz_icerik3=:icerik3,
 	 	 hizmetlerimiz_icerik4=:icerik4,
 	 	 hizmetlerimiz_icerik5=:icerik5,
 	 	 hizmetlerimiz_baslik2=:baslik2,
 	 	 hizmetlerimiz_aciklama2=:aciklama2,
 	 	 hizmetlerimiz_raciklama1=:raciklama1,
 	 	 hizmetlerimiz_raciklama2=:raciklama2
 	 	 
 	 	  WHERE hizmetlerimiz_id=0");

 	 $update=$ayarkaydet->execute(array( 
 	 	'baslik1'=>$_POST['hizmetlerimiz_baslik1'], 
 	 	'icerik2'=>$_POST['hizmetlerimiz_icerik2'],
 	 	'icerik3'=>$_POST['hizmetlerimiz_icerik3'],
 	 	'icerik4' =>$_POST['hizmetlerimiz_icerik4'],
 	 	'icerik5'=>$_POST['hizmetlerimiz_icerik5'], 
 	 	'baslik2'=>$_POST['hizmetlerimiz_baslik2'], 
 	 	'aciklama2'=>$_POST['hizmetlerimiz_aciklama2'], 
 	 	'raciklama1'=>$_POST['hizmetlerimiz_raciklama1'], 
 	 	'raciklama2'=>$_POST['hizmetlerimiz_raciklama2']
 	 	


 	 	 ));


 if ($update) 
 {
 header("location:../hizmetlerimiz-ayar.php?durum=ok");
 }

 else
{
	 header("location:../hizmetlerimiz-ayar.php?durum=no");

} }



//kullanici ekle VT_BAGLANTİSİ

if (isset($_POST['kullanicieklekaydet'])) 
 {
 	 $ayarkaydet=$db->prepare("INSERT kullanici SET 
 	 	kullanici_ad=:ad ,
 	 	 kullanici_sifre=:sifre ,
 	 	 kullanici_adsoyad=:adsoyad
 	 	  ");

 	 $update=$ayarkaydet->execute(array( 
 	 	'ad'=>$_POST['kullanici_ad'], 
 	 	'sifre'=>md5($_POST['kullanici_sifre']),
 	 	'adsoyad'=>$_POST['kullanici_adsoyad']

 	 	 ));


 if ($update) 
 {
 header("location:../kullanici-ekle.php?durum=ok");
 }

 else
{
	 header("location:../kullanici-ekle.php?durum=no");

}}


?>