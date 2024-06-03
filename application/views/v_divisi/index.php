<div id="banner-area">
	 <img src="<?php echo base_url(); ?>design/images/banner/banner2.jpg" alt ="" />
	<div class="parallax-overlay"></div>
		<!-- Subpage title start -->
		<div class="banner-title-content">
        	<div class="text-center">
	        	<h2>DIVISI MASJID AT TAQWA</h2>
	        	<ul class="breadcrumb">
		            <li>Divisi - divisi  Masjid AT TAQWA Gabugan</li>
		            
	          	</ul>
          	</div>
      	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<section id="main-container">
    <div class="container">

         <!-- Divisi -->
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon classic pull-left"><i class="fa fa-bookmark"></i></span>
                <h2 class="title classic">DIVISI</h2>
            </div>
        </div>

        <!-- divisi -->
        <div class="row">
            <?php foreach($divisi_view as $row){ ?>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <div class="service-content">
                    <span class="service-image"><img class="img-responsive" src="<?php echo base_url(); ?>admin/images/divisi/<?= $row->divisi_det_photo?>" alt="" width=400 height=250></span>
                    <a href="<?= site_url('divisi/detail/'.$row->divisi_det_id); ?>"><h3><?= $row->divisi_nama ?></h3></a>
                    <p><?= $row->divisi_det_ringkasan ?></p>
                </div>
            </div><!--/ End first service -->

           <?php } ?>

        </div><!-- Content Row end -->
        <!-- divisi_end -->
     </div>
</section>     