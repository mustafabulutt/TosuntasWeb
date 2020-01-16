<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php include 'header.php';   ?>

<!-- inner banner -->
<div class="inner-banner" id="home">
	<div class="container">
		
	</div>	
</div>
<!-- inner banner -->

<!-- contact -->
<section class="contact py-5 my-lg-5">
	<h2 class="heading text-center mb-sm-5 mb-4"> Bizimle Iletişime Geçin </h2>
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47491.005288533226!2d-88.04112836481997!3d41.93181507965691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fad7e1d6ddc3d%3A0xbd8ff504d27e8e63!2sAddison%2C+IL%2C+USA!5e0!3m2!1sen!2sin!4v1522131822507"></iframe>
		<div class="main_grid_contact">
			<div class="col-lg-6 col-md-8 col-sm-8 gal-img">
					<img src="images/contact.jpg" alt="projects image" class="img-fluid">
				</div>
			<div class="w3ls-contact">
				<h3 class="text-capitalize mb-3"> İLETİŞİM BİLGİLERİ</h3>
				<p class="">7/24 İLETİŞİM KURABİLİRSİNİZ</p>
				<address>
					<p class="mt-3"><span class="fa fa-map-marker"></span> <?php echo $ayarcek['ayar_adres']; ?> </p>
					<p class="my-2"><span class="fa fa-phone"></span> <?php echo $ayarcek['ayar_tel']; ?></p>
					<p class=""><span class="fa fa-envelope-open"></span> <a href="mailto:<?php echo $ayarcek['ayar_mail']; ?>"><?php echo $ayarcek['ayar_mail']; ?></a> </p>
				</address>
			</div>
		</div>
	</div>
</section>
<!-- //contact -->

<?php  include 'footer.php';    ?>

</body>
</html>