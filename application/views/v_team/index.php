


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
					<h2 class="title classic"><?= $row->divisi_nama  ?></h2>
				</div>
			</div>
			<div class="row text-center">
			<?php foreach($divisi_detail_all as $rowDet){ ?>
				<?php if($rowDet->divisi_id == $row->divisi_id){ ?>
					
						<div class="col-md-3 col-sm-6">
							<div class="team wow slideInLeft">
								<div class="img-hexagon">
									<img src="<?php echo base_url(); ?>admin/images/divisi/<?= $rowDet->divisi_det_photo?>" alt="">
									<span class="img-top"></span>
									<span class="img-bottom"></span>
								</div>
								<div class="team-content">
									<h3><?= $rowDet->nama?></h3>
									<p><?= $rowDet->jabatan?></p>
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
						
					
				<?php } ?>
				<!--/ Content row end -->
			<?php } ?>
			</div>	
			<div class="gap-60"></div>
		<?php } ?>
			<!--/ Content row end -->
			
			

	</div>
</section>