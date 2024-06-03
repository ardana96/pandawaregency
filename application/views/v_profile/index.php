<div id="banner-area">
		<img src="<?php echo base_url(); ?>images/profile/masjid.jpg" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>MASJID AT TAQWA</h2>
		        	<ul class="breadcrumb">
			            <li>Jl.Gabugan-Gemolong KM No.1, Kebayanan 1, Gabugan,Sragen,</li>
			            
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div>

<section id="main-container">
		<div class="container">

			<!-- Company Profile -->

			<div class="row">
				<div class="col-md-12 heading text-center">
					<h2 class="title2">TENTANG MASJID AT ATQWA
						<span class="title-desc">Masjid At Taqwa</span>
					</h2>
				</div>
			</div><!-- Title row end -->

			<div class="row about-wrapper-top">
				<div class="col-md-6 ts-padding about-message">
					<h3>Who We Are</h3>
					<p>Masjid At-Taqwa yang dibangun pada tahun 1963. Masjid At-Taqwa merupakan kategori Masjid Jami . Masjid At-Taqwa beralamat di Pantirejo Rt.02, Gabugan, Tanon, Sragen Sragen Jawa Tengah . Masjid At-Taqwa memiliki luas tanah 750 m2 , luas bangunan 1.900 m2 dengan status tanah Wakaf. Masjid At-Taqwa memiliki jumlah jamaah 50 - 100 orang , jumlah muazin 8 orang , jumlah remaja 30 orang dan Jumlah Khotib 2 orang .</p>
				</div><!--/ About message end -->
				<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(<?php echo base_url(); ?>images/masjid1.png) 50% 50% / cover no-repeat;">
				</div><!--/ About image end -->
			</div><!--/ Content row end -->

			<div class="row about-wrapper-bottom">
				<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(<?php echo base_url(); ?>images/masjid1.png) 50% 50% / cover no-repeat;">
				</div><!--/ About image end -->
				<div class="col-md-6 ts-padding about-message">
					<h3>What We Do</h3>
					<p>Masjid At-Taqwa yang dibangun pada tahun 1963. Masjid At-Taqwa merupakan kategori Masjid Jami . Masjid At-Taqwa beralamat di Pantirejo Rt.02, Gabugan, Tanon, Sragen Sragen Jawa Tengah . Masjid At-Taqwa memiliki luas tanah 750 m2 , luas bangunan 1.900 m2 dengan status tanah Wakaf. Masjid At-Taqwa memiliki jumlah jamaah 50 - 100 orang , jumlah muazin 8 orang , jumlah remaja 30 orang dan Jumlah Khotib 2 orang .</p>
					<ul class="unstyled arrow">
						<?php foreach($kegiatan_view as $row){ ?>
						<li><a href="#"><?= $row->kategori_nama?></a></li>
						
					<?php }?>
					</ul>
				</div><!--/ About message end -->
			</div><!--/ Content row end -->

			<!-- Company Profile -->

		</div><!--/ 1st container end -->

			
		<div class="gap-60"></div>


		<!-- Counter Strat -->
		<div class="ts_counter_bg parallax parallax2">
			<div class="parallax-overlay"></div>
			<div class="container">
				<div class="row wow fadeInLeft text-center">
					<div class="facts col-md-3 col-sm-6">
						<span class="facts-icon"><i class="fa fa-calendar"></i></span>
						<div class="facts-num">
							<span class="counter"><?= $jumlah_kegiatan ?></span>
						</div>
						<h3>Kegiatan</h3> 
					</div>

					<div class="facts col-md-3 col-sm-6">
						<span class="facts-icon"><i class="fa fa-money"></i></span>
						<div class="facts-num">
							<span class="counter"><?= $jumlah_donasi ?></span>
						</div>
						<h3>Event Donasi</h3> 
					</div>

					<div class="facts col-md-3 col-sm-6">
						<span class="facts-icon"><i class="fa fa-user"></i></span>
						<div class="facts-num">
							<span class="counter"><?= $jumlah_donatur?></span>
						</div>
						<h3>Donatur</h3> 
					</div>

					<div class="facts col-md-3 col-sm-6">
						<span class="facts-icon"><i class="fa fa-trophy"></i></span>
						<div class="facts-num">
							<span class="counter">76</span>
						</div>
						<h3>Awwards</h3> 
					</div>

					<div class="gap-40"></div>

					<!-- <div><a href="#" class="btn btn-primary solid">See Our Portfolio</a></div> -->

				</div><!--/ row end -->
			</div><!--/ Container end -->
		</div><!--/ Counter end -->
<!-- 
		<div class="gap-60"></div>
 -->

		
	</section><!--/ Main container end -->
	