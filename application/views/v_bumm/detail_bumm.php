

<div id="banner-area">
	<img src="<?php echo base_url(); ?>design/images/banner/banner2.jpg" alt ="" />
	<div class="parallax-overlay"></div>
		<!-- Subpage title start -->
		<div class="banner-title-content">
        	<div class="text-center">
	        	<h2>FUNDRAISING</h2>
	        	<ul class="breadcrumb">
		            <li>Home</li>
		            <li>Fundrising</li>
		            <li><a href="#"> Detail</a></li>
	          	</ul>
          	</div>
      	</div><!-- Subpage title end -->
</div><!-- Banner area end -->


<section id="main-container">
	<div class="container">
	
		<div class="row">

			 <div class="col-md-12 heading">
                <span class="title-icon classic pull-left"><i class="fa fa-bookmark"></i></span>
                <h2 class="title classic">Detail Produk</h2>
            </div>
			<!-- Blog start -->
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<!-- Blog post start -->
					<div class="post-content">
						<!-- post image start -->
						<div class="post-image-wrapper">
							<img src="<?php echo base_url(); ?>admin/images/bumm/<?= $bumm_detail['bumm_photo'];  ?>" class="img-responsive"  alt="" style="width:400px; height:300;"/>
							
						</div><!-- post image end -->
						<div class="post-header clearfix">
							<h2 class="post-title">
								<a href="blog-item.html"><?php echo $bumm_detail['bumm_produk'];  ?></a>
							</h2>
							<div class="post-meta">
								<span class="post-meta-author">Posted by <a href="#"><?php echo $bumm_detail['created_by'];  ?></a></span>
								<span class="post-meta-cats"> in <a href="#"> bumm </a></span>
								
								
							</div><!-- post meta end -->
						</div><!-- post heading end -->
						<div class="entry-content">
							<?php echo $bumm_detail['bumm_isi'];  ?>
						</div>
						

						<table style="font-weight: bold;color: black;">
							<tr>
								<td> Harga </td>
								<td> : </td>
								<td> Rp. <?= number_format($bumm_detail['bumm_harga'],2) ?></td>
							</tr>
									
						</table>
						<br>

						<a href="https://api.whatsapp.com/send?phone=6285265204852&text=Saya Berminat Memesan produk  <?= $bumm_detail['bumm_produk']?>" class="btn btn-primary"> <i class="fa fa-whatsapp" style="font-size:25px;"> &nbsp;&nbsp;</i><span style="font-size:20px;">Pesan</span></a>

						
					</div><!-- Blog post end -->
				</div><!--/ Content col end -->



				<!-- sidebar start -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="sidebar sidebar-right">

                        <!-- Blog search start -->
                        <!-- <div class="widget widget-search">
                            <h3 class="widget-title">Search</h3>
                            <div id="search">
                                <input class="form-control form-control-lg" placeholder="search" type="search">
                            </div>
                        </div> -->
                        <!-- Blog search end -->

                        <!-- Tab widget start-->
                        <div class="widget widget-tab">
                            <ul class="nav nav-tabs">
                              <li class="active"><a href="#popular-tab" data-toggle="tab">Produk</a></li>
                             
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="popular-tab">
	                                <ul class="posts-list unstyled clearfix">
	                                    <?php foreach($bumm_sidebar as $row){ ?>
	                                  <li>
	                                    <div class="posts-thumb pull-left"> 
	                                        <a href="#"> 
	                                            <img alt="img" src="<?php echo base_url(); ?>admin/images/bumm/<?= $row->bumm_photo?>">
	                                        </a> 
	                                    </div>
	                                    <div class="post-content">
	                                        <h4 class="entry-title"><a href="<?= site_url('bumm/detail/'.$row->bumm_id); ?>"><?= strtoupper($row->bumm_produk)?></a>
	                                        </h4>
	                                        <p class="post-meta">
	                                            <span class="post-meta-author"> Harga <a href="#"> <?= $row->bumm_harga ?></a></span>
	                                           	                                        </p>
	                                    </div>
	                                    <div class="clearfix"></div>
	                                  </li><!-- First post end-->
	                                    <?php } ?>
	                                 
	                                </ul>
	                            </div><!-- Popular tabpan end -->

                                
                                
                            </div><!-- Tab content end -->
                        </div><!-- Tab widget end-->
  
                    </div><!-- sidebar end -->
                </div>




		</div>

	</div>
</section>