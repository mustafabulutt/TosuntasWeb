<!-- footer-top -->
<section class="footer-top py-5">
	<div class="container">
		<div class="row footer-top-grid">
			<div class="col-sm-6">
				<h3>İLETİŞİM </h3>
				<p>7/24 bize ulaşabilirsiniz</p>
			</div>
			<div class="col-sm-6 text-sm-right mt-sm-0 mt-3">
				<h3><span class="fa fa-phone" aria-hidden="true"></span><?php echo $ayarcek['ayar_tel']; ?></h3>
			</div>
		</div>
	</div>
</section>
<!-- //footer-top -->

<!--footer -->
<div class="footer footer_w3layouts_section_1its py-5" id="subscribe">
	<div class="container pt-sm-4">
		<div class="row footer-grid">
			<div class="col-md-5 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Biz Kimiz ?</h3>
				</div>
				<div class="footer-text">
					<p>TOSUNTAS-LOJISTIK</p>
					<ul class="social_section_1info">
						<li><a href="<?php echo $ayarcek['ayar_facebook']; ?>" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?php echo $ayarcek['ayar_twitter']; ?>" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
						
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-5 footer-grid_section_1its_w3 mt-md-0 mt-4">
				<div class="footer-title">
					<h3>HIZLI BAGLANTILAR</h3>
				</div>
				<ul class="links">
					<li><a href="about.php">Hakkımızda</a></li>
					<li><a href="services.php">Hizmetlrimiz</a></li>
					
				</ul>
			</div>
			<div class="col-md-4 col-sm-7 footer-grid_section_1its_w3 mt-md-0 mt-4">
				<div class="footer-title">
					<h3>AĞIMIZA KATILIN</h3>
				</div>
				<div class="footer-text">
					<p>Mail Bültenimize katılarak bizden en güncel haberleri alabilirsiniz</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Email adresinizi girinz" required="">
						<button class="btn1"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- move top -->
		<div class="move-to-top text-center">
			<a href="#home" class="move-top"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
		</div>
		<!-- //move top -->
		<div class="copyright">
			<p>© Design by <a href="http://www.facebook.com/bltmstf" target ="_blank"><?php  echo $ayarcek['ayar_author']; ?></a> </p>
		</div>
	</div>
</div>
<!-- //footer -->