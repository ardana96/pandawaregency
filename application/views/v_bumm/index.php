<div id="banner-area">
	 <img src="<?php echo base_url(); ?>design/images/banner/banner2.jpg" alt ="" />
	<div class="parallax-overlay"></div>
		<!-- Subpage title start -->
		<div class="banner-title-content">
        	<div class="text-center">
	        	<h2>BUMM MASJID AT TAQWA</h2>
	        	<ul class="breadcrumb">
		            <li>Badan Usaha Milik Masjid AT TAQWA Gabugan</li>
		            
	          	</ul>
          	</div>
      	</div><!-- Subpage title end -->
</div><!-- Banner area end -->


<section id="main-container">
    <div class="container">
		<div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon classic pull-left"><i class="fa fa-bookmark"></i></span>
                <h2 class="title classic">BUMM</h2>
            </div>
        </div>
        
        <div class="row">
            
            <div id="isotope" class="isotope">
                <?php foreach($data->result() as $row){ ?>
                <div class="col-sm-3 web-design isotope-item">
                    <div class="grid">
                        <figure class="effect-oscar">
                            <img src="<?php echo base_url(); ?>admin/images/bumm/<?= $row->bumm_photo?>"alt="" width=300 height=300>
                            <figcaption>
                                <h3><?= $row->bumm_produk ?> <br>Rp. <?= number_format($row->bumm_harga, 2)?></h3>

                                <a class="view icon-pentagon" href="<?= site_url('bumm/detail/'.$row->bumm_id); ?>"><i class="fa fa-list"></i></a>
                                <!-- <a class="view icon-pentagon" data-rel="prettyPhoto" href="<?php echo base_url(); ?>admin/images/bumm/<?= $row->bumm_photo?>"><i class="fa fa-search"></i></a>  -->           
                            </figcaption>           
                        </figure>
                    </div>
                </div><!-- Isotope item end -->

            <?php }?>
                
            </div><!-- Isotope content end -->
        </div><!-- Content row end -->


        <div class="row">
	        <div class="col">
	            <!--Tampilkan pagination-->
	            <?php echo $pagination; ?>
	        </div>
	    </div>
    </div>
</section>