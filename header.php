<?php  

include 'bltadmin/netting/baglan.php';

$ayarsor=$db->prepare("select * from ayar where ayar_id=? ");
$ayarsor->execute(array(0));	
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$hakkimizdasor=$db->prepare("select * from hakkimizda where hakkimizda_id=? ");
$hakkimizdasor->execute(array(0));	
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

$hizmetlerimizsor=$db->prepare("select * from hizmetlerimiz where hizmetlerimiz_id=? ");
$hizmetlerimizsor->execute(array(0));  
$hizmetlerimizcek=$hizmetlerimizsor->fetch(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="tr">
<head>
<title><?php  echo $ayarcek['ayar_title']; ?></title>



<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php  echo $ayarcek['ayar_keywords'];   ?>" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">

	<!-- //google fonts -->
	
</head>
<body>
<!-- //header -->
<header>
	<div class="container">
		<!-- top header -->
		<div class="row top_header pt-3">
			
			<div class="col-lg-3 offset-lg-7 col-md-5 offset-md-3 col-sm-6 col-7 offset-sm-2 top-grid">
				<span class="fa ml-1 fa-envelope-open-o"></span>

				<p class=""> <a href="mailto:info@tosuntas.com.tr"><?php echo  $ayarcek['ayar_mail']; ?></a> <span class="block">Iletişim Mail</span> </p>

			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-5 top-grid pl-0">
				<span class="fa ml-1 fa-phone"></span>

				<p class=""><a href="tel://<?php echo $ayarcek['ayar_tel']; ?>"> <?php echo $ayarcek['ayar_tel']; ?> <span class="block">7/24 DESTEK</span> </p>

			</div>
		</div>
		<!-- top header -->
		<!-- nav -->
		<nav class="pt-2">
			<div id="logo">
				<h1> <a href="index.php"><span class="fa fa-car"></span> TOSUNTAS LOJİSTİK</a></h1>
			</div>
			<label for="drop" class="toggle">Menu</label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-md-2 ml-auto">
				<li class="mr-lg-4 mr-2 active"><a href="index.php">AnaSayfa</a></li>
				<li class="mr-lg-4 mr-2"><a href="about.php">Hakkımızda</a></li>
				<li class="mr-lg-4 mr-2"><a href="services.php">Hizmetlerimiz</a></li>
				<li class="mr-lg-3 mr-2 p-0">
					<!-- First Tier Drop Down -->
					<label for="drop-2" class="toggle">MENÜ <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
					<a href="#">MENÜ <span class="fa fa-angle-down" aria-hidden="true"></span></a>
					<input type="checkbox" id="drop-2"/>
					<ul class="inner-dropdown">
						<li><a href="gallery.php">GALERİ</a></li>
						
						
					</ul>
				</li>
				<li class="mr-lg-4 mr-2"><a href="contact.php">Iletişim</a></li>
				<li class=""><a href="#subscribe">DESTEK</a></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->