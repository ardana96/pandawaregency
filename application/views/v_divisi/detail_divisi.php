


<div id="banner-area">
	<img src="<?php echo base_url(); ?>design/images/banner/banner2.jpg" alt ="" />
	<div class="parallax-overlay"></div>
		<!-- Subpage title start -->
		<div class="banner-title-content">
        	<div class="text-center">
	        	<h2>KEGIATAN</h2>
	        	<ul class="breadcrumb">
		            <li>Home</li>
		            <li>Divisi</li>
		            <li><a href="#"> Detail</a></li>
	          	</ul>
          	</div>
      	</div><!-- Subpage title end -->
</div><!-- Banner area end -->


<section id="main-container">
	<div class="container">
		<div class="row">

			<!-- Blog start -->
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<!-- Blog post start -->
				<div class="post-content">
					<!-- post image start -->
					<div class="post-image-wrapper">
						<img src="<?php echo base_url(); ?>admin/images/divisi/<?= $divisi_detail['divisi_det_photo'];  ?>" class="img-responsive"  alt="" style="width:750px; height:450;"/>
						<?php $date = date_create($divisi_detail['created_date']) ;?>
						<span class="blog-date"><a href="#"> <?= date_format($date,"d F Y"); ?></a></span>
					</div><!-- post image end -->
					<div class="post-header clearfix">
						<h2 class="post-title">
							<a href="blog-item.html"><?php echo $divisi_detail['divisi_nama'];  ?></a>
						</h2>
						<div class="post-meta">
							<span class="post-meta-author">Posted by <a href="#"><?php echo $divisi_detail['created_by'];  ?></a></span>
							<span class="post-meta-cats"> in <a href="#"> Divisi </a></span>
							
							
						</div><!-- post meta end -->
					</div><!-- post heading end -->
					<div class="entry-content">
						<?php echo $divisi_detail['divisi_det_isi'];  ?>
					</div>
					<div class="gap-20"></div>

					

					
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
                          <li class="active"><a href="#popular-tab" data-toggle="tab">popular</a></li>
                          <li class=""><a href="#recent-tab" data-toggle="tab">category</a></li>
                          <li class=""><a href="#comments-tab" data-toggle="tab">division</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="popular-tab">
                                <ul class="posts-list unstyled clearfix">
                                    <?php foreach($kegiatan_sidebar_view as $row){ ?>
                                  <li>
                                    <div class="posts-thumb pull-left"> 
                                        <a href="#"> 
                                            <img alt="img" src="<?php echo base_url(); ?>admin/images/kegiatan/<?= $row->kegiatan_photo?>">
                                        </a> 
                                    </div>
                                    <div class="post-content">
                                        <h4 class="entry-title"><a href="<?= site_url('kegiatan/detail/'.$row->kegiatan_id); ?>"><?= strtoupper($row->kegiatan_nama)?></a>
                                        </h4>
                                        <p class="post-meta">
                                            <span class="post-meta-author">Posted by <a href="#"> <?= $row->created_by ?></a></span>
                                            <?php $date = date_create($row->kegiatan_tanggal) ;?>
                                            <span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> <?= date_format($date,"F Y"); ?></a>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                  </li><!-- First post end-->
                                    <?php } ?>
                                 
                                </ul>
                            </div><!-- Popular tabpan end -->

                            <div class="tab-pane" id="recent-tab">
                                <ul class="posts-list unstyled clearfix">
                                    <?php foreach($kegiatan_kategori_view as $row){ ?>
                                    <li>
                                        <div class="posts-thumb pull-left"> 
                                            <a href="#"> 
                                                <img alt="img" src="<?php echo base_url(); ?>admin/images/kegiatan/<?= $row->kegiatan_photo?>">
                                            </a> 
                                        </div>
                                        <div class="post-content">
                                            <h4 class="entry-title"><a href="<?= site_url('kegiatan/kegiatan_kategori/'.$row->kategori_id); ?>"><?= strtoupper($row->kategori_nama)?></a>
                                            </h4>
                                            <p class="post-meta">
                                                <span class="post-meta-author">Posted by <a href="#"> <?= $row->created_by ?></a></span>
                                                
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li><!-- First post end-->
                                    <?php } ?>
                                </ul>
                            </div><!-- Recent tabpan end -->

                            <div class="tab-pane" id="comments-tab">
                                <ul class="posts-list unstyled clearfix">
                                    <?php foreach($divisi_view as $row){ ?>
                                    <li>
                                        <div class="posts-avator pull-left"> 
                                            <a href="#"> 
                                                <img alt="img" src="<?php echo base_url(); ?>admin/images/divisi/<?= $row->divisi_det_photo?>">
                                            </a> 
                                        </div>
                                        <div class="post-content">
                                            <h4 class="entry-title"><a href="#"><?= $row->divisi_nama ?></a>
                                            </h4>
                                            <p class="post-meta">
                                                <span class="post-meta-author">Posted by <a href="#"> <?= $row->created_by ?> </a></span>
                                                <!-- <span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> November 21</a>
                                                </span> -->
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li><!-- First post end-->
                                    <?php }?>
                                </ul>
                            </div><!-- Comment tabpan end -->
                        </div><!-- Tab content end -->
                    </div><!-- Tab widget end-->

                </div><!-- sidebar end -->
            </div>
                
		</div>

	</div>
</section>