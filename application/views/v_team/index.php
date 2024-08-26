


<div id="banner-area">
	<img src="<?php echo base_url(); ?>design/images/banner/banner2.jpg" alt ="" />
	<div class="parallax-overlay"></div>
		<!-- Subpage title start -->
		<div class="banner-title-content">
        	<div class="text-center">
	        	<h2>Struktur</h2>
	        	<ul class="breadcrumb">
		            <li>Home</li>
		            <li><a href="<?php echo base_url(); ?>kegiatan" style=" color:white; " onmouseover="this.style.color='aqua';" onmouseout="this.style.color='white';">Kegiatan</a></li>
		            <li><a href="#"> Detail</a></li>
	          	</ul>
          	</div>
      	</div><!-- Subpage title end -->
</div><!-- Banner area end -->


<section id="main-container">
	<div class="container">
	<?php foreach($divisi_view as $row){ ?>
            <div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon classic pull-left"><i class="fa fa-users"></i></span>
					<h2 class="title classic">Team Style 1</h2>
				</div>
			</div>

			
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="team wow slideInLeft">
						<div class="img-hexagon">
							<img src="images/team/team1.jpg" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Vosgi Varduhi</h3>
							<p>Web Designer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>	
				</div><!--/ Team 1 end -->
				<!-- <div class="col-md-3 col-sm-6">
					<div class="team wow slideInLeft">
						<div class="img-hexagon">
							<img src="images/team/team2.jpg" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Robert Aleska</h3>
							<p>Web Designer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>
				</div>/ Team 2 end -->
				<div class="col-md-3 col-sm-6">
					<div class="team wow slideInRight">
						<div class="img-hexagon">
							<img src="images/team/team3.jpg" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Taline Voski</h3>
							<p>Web Designer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>
				</div><!--/ Team 3 end -->
				<div class="col-md-3 col-sm-6">
					<div class="team animate wow slideInRight">
						<div class="img-hexagon">
							<img src="images/team/team4.jpg" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Alban Spencer</h3>
							<p>Web Designer</p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
								<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>
				</div><!--/ Team 4 end -->
			</div><!--/ Content row end -->


			<div class="gap-60"></div>
		<?php } ?>
			<!--/ Content row end -->

			

	</div>
</section>