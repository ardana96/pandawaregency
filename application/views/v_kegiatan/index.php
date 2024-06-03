<div id="banner-area">
	 <img src="<?php echo base_url(); ?>design/images/banner/banner2.jpg" alt ="" />
	<div class="parallax-overlay"></div>
		<!-- Subpage title start -->
		<div class="banner-title-content">
        	<div class="text-center">
	        	<h2>KEGIATAN MASJID AT TAQWA</h2>
	        	<ul class="breadcrumb">
		            <li>Program-program Donasi Masjid AT TAQWA Gabugan</li>
		            
	          	</ul>
          	</div>
      	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<section id="main-container">
	<div class="container">
		<div class="row">

            <!-- Blog start -->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                
                <?php foreach($data->result() as $row){ ?>
                <!-- 1st post start -->
                <div class="post">
                    <!-- <span class="title-icon classic pull-left"><i class="fa fa-arrow-right"></i></span>
                    <h2 class="post-title">
                        <a href="blog-item.html"><?= $row->kategori_nama  ?></a>
                    </h2> -->
                    <!-- post image start -->
                    <div class="post-image-wrapper">
                        <img src="<?php echo base_url(); ?>admin/images/kegiatan/<?= $row->kegiatan_photo?>" class="img-responsive" style="width:500px; height:300px;" alt="" />
                        <?php $date = date_create($row->kegiatan_tanggal) ;?>
                        <span class="blog-date"><a href="#"><?= date_format($date,"d F Y"); ?></a></span>
                    </div><!-- post image end -->
                    <div class="post-header clearfix">
                        
                        <h4 >
                            Tentang : <?= $row->kegiatan_nama  ?>
                        </h4>
                        <div class="post-meta">
                            <span class="post-meta-author">Posted by <a href="#"> </a> <?= $row->created_by  ?></span>
                            <!-- <span class="post-meta-cats">in <a href="#"> News</a></span> -->
                            <!-- <div class="pull-right">
                                
                                <span class="post-meta-comments"><a href="#"><i class="fa fa-comment-o"></i> 11</a></span>
                                <span class="post-meta-hits"><a href="#"><i class="fa fa-heart-o"></i> 62</a></span>
                            </div> -->
                            
                        </div><!-- post meta end -->
                    </div><!-- post heading end -->
                    <div class="post-body">
                        <p><?= $row->kegiatan_ringkasan ?></p>
                    </div>
                    <div class="post-footer">
                        <a href="<?= site_url('kegiatan/detail/'.$row->kegiatan_id); ?>" class="btn btn-primary">Continue Reading <i class="fa fa-angle-double-right">&nbsp;</i></a>
                    </div>
                </div><!-- 1st post end -->

                <?php } ?>

                

               <!--  <div class="paging">
                    <ul class="pagination">
                      <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div> -->

                <div class="row">
			        <div class="col">
			            <!--Tampilkan pagination-->
			            <?php echo $pagination; ?>
			        </div>
			    </div>
      

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


        </div><!--/ row end -->
	</div>
</section>