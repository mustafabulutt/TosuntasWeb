<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'header.php';    ?>

<!-- inner banner -->
<div class="inner-banner" id="home">
	<div class="container">
		
	</div>	
</div>
<!-- inner banner -->

<!-- about -->
<section class="about py-5" id="how">
	<div class="container py-md-3">
	<h2 class="heading text-center mb-sm-5 mb-4"> <?php echo $hakkimizdacek['hakkimizda_baslik']; ?></h2>
		<div class="row about-grids">
			<div class="col-lg-6 about-left">
				<img src="images/about.jpg" alt="" class="img-fluid"/>
			</div>
			<div class="col-lg-6 grid1 mt-lg-0 mt-4 pl-lg-5">
				<h3 class="my-lg-4 mb-2">TOSUNTAS</h3>
				<p class=""><?php echo $hakkimizdacek['hakkimizda_icerik']; ?></p>
				
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- Team section -->
<section class="team py-5" id="team">
    <div class="container py-lg-5">	
		<h3 class="heading text-center mb-5 pb-md-5 pb-3"> TAKIM ÜYELERİ </h3>
		<div class="section_header">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-md-0 mb-60">
					<div class="our-services-wrapper">
						<div class="services-inner">
							<div class="our-team-img">
								<img src="images/manager.jpg" class="team_member img-fluid" alt="Team Member">
							</div>
							<div class="our-services-text team-info">
								<h3 class="team_name">YAVUZ TOSUN</h3>
								<span class="team_role">GENEL MÜDÜR</span>
								<p class="mt-sm-3 mt-2">000-000-000</p>
								<ul class="team-social mt-md-3 mt-2">
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-sm-12 mb-lg-0 mb-60">
					<div class="our-services-wrapper">
						<div class="services-inner">
							<div class="our-team-img">
								<img src="images/manager1.jpg" class="team_member img-fluid" alt="Team Member">
							</div>
							<div class="our-services-text team-info">
								<h3 class="team_name">AHMET TOSUN</h3>
								<span class="team_role">CEO</span>
								<p class="mt-sm-3 mt-2">000-000-000</p>
								<ul class="team-social mt-md-3 mt-2">
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="our-services-wrapper">
						<div class="services-inner">
							<div class="our-team-img">
								<img src="images/executive.jpg" class="team_member img-fluid" alt="Team Member">
							</div>
							<div class="our-services-text team-info">
								<h3 class="team_name">OGUZHAN TOSUN</h3>
								<span class="team_role">CEO</span>
								<p class="mt-sm-3 mt-2">000-000-000</p>
								<ul class="team-social mt-md-3 mt-2">
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
    </div>
</section>
<!-- //Team section -->

<!-- stats -->
<section class="stats py-5">
	<div class="container py-lg-5 py-md-3">
		<div class="row stat-grids">
			<div class="col-lg-5">
				<h4 class="heading mb-3">BİZ KİMİZ ?</h4>
				<p class=""><?php echo $hakkimizdacek['hakkimizda_icerik']; ?></p>
			</div>
			<div class="col-lg-6 offset-lg-1 stats-right">
				<div class="row stats-inner-grid">
					<div class="col-sm-6 col-6">
						<h4>30</h4>
						<p>Adet <br>Araç</p>
					</div>
					<div class="col-sm-6 col-6">
						<h4>71</h4>
						<p> İl  <br>En Kısa Süre</p>
					</div>
				</div>
				<div class="row stats-inner-grid mt-5">
					<div class="col-sm-6 col-6">
						<h4>350</h4>
						<p>Den Fazla <br>Sabit Müşteri</p>
					</div>
					<div class="col-sm-6 col-6">
						<h4>100%</h4>
						<p>Güvenli <br>Taşıma</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //stats -->


<!-- testimonials -->
<section class="clients py-5" id="clients">
	<div class="container py-lg-5 py-md-3">
	<h3 class="heading text-center mb-5">MİSYON / VİZYON </h3>
	<div class="main-clients">
			<div class="csslider infinity" id="slider1">
				<input type="radio" name="slides" checked="checked" id="slides_1" />
				<input type="radio" name="slides" id="slides_2" />
				<input type="radio" name="slides" id="slides_3" />
				<input type="radio" name="slides" id="slides_4" />
				<ul class="banner_slide_bg">
					<li>
						<div class="feedback-top">
							<p><span class="fa mr-2 fa-quote-left"></span>  <?php echo $hakkimizdacek['hakkimizda_misyon'] ?></p>
							<div class="row client-info">
							</div>
						</div>
					</li>
					<li>
						<div class="feedback-top">
							<p><span class="fa mr-2 fa-quote-left"></span><?php echo $hakkimizdacek['hakkimizda_vizyon'] ?></p>
							<div class="row client-info">
							</div>
						</div>
					</li>
					
				</ul>
				<div class="navigation">
					<div>
						<label for="slides_1"></label>
						<label for="slides_2"></label>
						
					</div>
				</div>
			</div>
		</div>
		</div>
</section>
<!-- //testimonials -->

<?php     include 'footer.php'; ?>
</body>
</html>