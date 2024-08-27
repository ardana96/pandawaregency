<style>

* {box-sizing: border-box}

.containerskills {
  width: 100%;
  background-color: #ddd;
}

.skills {
  text-align: right;
  padding-top: 0px;
  padding-bottom: 0px;
  color: white;
}


</style>

<section id="home" class="no-padding">  
        <div id="main-slide" class="cd-hero">
            <ul class="cd-hero-slider">
                <li class="selected">
                    <div class="overlay2">
                        <img class="" src="<?php echo base_url(); ?>images/rumah.jpeg" alt="slider">
                    </div>
                    <div class="cd-full-width">
                        <h3>Pandawa Regency 2</h3>
                        <h3>Dukuh Sayangan, Ds Wonorejo, Polokarto, Sukoharjo</h3>
                        <!-- <a href="<?php echo base_url();?>profile" class="btn btn-primary white cd-btn">PROFILE</a> -->
                       
                    </div> <!-- .cd-full-width -->
                </li>
                <li>
                    <div class="overlay2">
                        <img class="" src="<?php echo base_url(); ?>images/masjid2.jpg" alt="slider">
                    </div>
                    <div class="cd-half-width">
                        <h2>NGAJIPRENUER</h2>
                        <p>Yuuk..! Cari Untung dari Al-Qur'an</p>
                        <a href="<?= site_url('kegiatan/kegiatan_kategori/9'); ?>" class="cd-btn btn btn-primary solid">Let's Go</a>
                    </div> <!-- .cd-half-width -->

                    <div class="cd-half-width cd-img-container">
                        <img src="<?php echo base_url(); ?>design/images/slider/Alqur'an.png" alt="">
                    </div> <!-- .cd-half-width.cd-img-container -->
                </li>
                <li>
                    <div class="overlay2">
                        <img class="" src="<?php echo base_url(); ?>images/bumm.jpg" alt="slider">
                    </div>
                    <div class="cd-half-width cd-img-container img-right">
                        <img src="<?php echo base_url(); ?>images/keranjang4.png" width=500 height=500 alt="">
                    </div> <!-- .cd-half-width.cd-img-container -->
                    <div class="cd-half-width">
                        <h2>BUMM Masjid At-Taqwa</h2>
                        <p>Yuk.. Penuhi Kebuthuan mu dari BUMM Kami..</p>
                        <a href="#0" class="cd-btn btn secondary btn-primary solid">Learn More</a>
                    </div> <!-- .cd-half-width -->
                </li>
                <li>
                    <div class="overlay2">
                        <img class="" src="<?php echo base_url(); ?>images/masjid2.jpg" alt="slider">
                    </div>
                    <div class="cd-half-width">
                        <h2>FUNDRAISING</h2>
                        <p>Mari Tambah Bekal Untuk Akhirat</p>
                        <a href="<?php echo base_url();?>donasi" class="cd-btn btn btn-primary solid">Let's Go</a>
                    </div> <!-- .cd-half-width -->

                    <div class="cd-half-width cd-img-container">
                        <img src="<?php echo base_url(); ?>images/kotak amal.png" alt="">
                    </div> <!-- .cd-half-width.cd-img-container -->
                </li>

            </ul> <!--/ cd-hero-slider -->

        <div class="cd-slider-nav">
            <nav>
                <span class="cd-marker item-1"></span>
                <ul>
                    <li class="selected"><a href="#0"><i class="fa fa-home"></i>HOME</a></li>
                    <li><a href="#0"><i class="fa fa-book"></i> Ngaji</a></li>
                    <li><a href="#0"><i class="fa fa-shopping-cart"></i> BUMM</a></li>
                    <li class="video"><a href="#0"><i class="fa fa-money"></i> Donasi</a></li>
                </ul>
            </nav> 
        </div> <!-- .cd-slider-nav -->

        </div><!--/ Main slider end -->     
    </section> <!--/ Slider end -->



    <section id="main-container">
        <div class="container">

            

            <div class="row">
                <div class="col-md-12 heading">
                    <span class="title-icon classic pull-left"><i class="fa fa-bookmark"></i></span>
                    <h2 class="title classic">KEGIATAN PAGUYUBAN</h2>
                </div>
            </div>
            <div class="row">

                <!-- Blog start -->
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    
                    <?php foreach($kegiatan_view as $row){ ?>
                    <!-- 1st post start -->
                    <div class="post">
                        <span class="title-icon classic pull-left"><i class="fa fa-arrow-right"></i></span>
                        <h2 class="post-title">
                            <a href="<?= site_url('kegiatan/kegiatan_kategori/'.$row->kategori_id); ?>"><?= $row->kategori_nama  ?></a>
                        </h2>
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
                            <a href="<?= site_url('kegiatan/detail/'.$row->kegiatan_id); ?>"class="btn btn-primary">Continue Reading <i class="fa fa-angle-double-right">&nbsp;</i></a>
                        </div>
                    </div><!-- 1st post end -->

                    <?php } ?>
                </div><!--/ Content col end -->
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
                                            <h4 class="entry-title"><a href="#"><?= strtoupper($row->kegiatan_nama)?></a>
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
                                        <?php foreach($kegiatan_view as $row){ ?>
                                        <li>
                                            <div class="posts-thumb pull-left"> 
                                                <a href="#"> 
                                                    <img alt="img" src="<?php echo base_url(); ?>admin/images/kegiatan/<?= $row->kegiatan_photo?>">
                                                </a> 
                                            </div>
                                            <div class="post-content">
                                                <h4 class="entry-title"><a href="#"><?= strtoupper($row->kategori_nama)?></a>
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

             <!-- Divisi -->
            <!-- <div class="row">
                <div class="col-md-12 heading">
                    <span class="title-icon classic pull-left"><i class="fa fa-bookmark"></i></span>
                    <h2 class="title classic">DIVISI</h2>
                </div>
            </div> -->

            <!-- divisi -->
            <!-- <div class="row">
                <?php foreach($divisi_view as $row){ ?>
                <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                    <div class="service-content">
                        <span class="service-image"><img class="img-responsive" src="<?php echo base_url(); ?>admin/images/divisi/<?= $row->divisi_det_photo?>" alt="" width=400 height=250></span>
                        <a href=#><h3><?= $row->divisi_nama ?></h3></a>
                        <p><?= $row->divisi_det_ringkasan ?></p>
                    </div>
                </div>

               <?php } ?>

            </div> -->
            <!-- divisi_end -->

            <!-- <hr style="height:3px;border-width:0;color:gray;background-color:gray"> -->
            <!-- BUMM -->
            <!-- <section id="main-container" class="portfolio portfolio-box">
                <div class="container"> -->
                    <!-- <div class="row">
                        <div class="col-md-12 heading">
                            <span class="title-icon classic pull-left"><i class="fa fa-bookmark"></i></span>
                            <h2 class="title classic">GALLERY</h2>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                        <div id="isotope" class="isotope">
                            <?php foreach($bumm_view as $row){ ?>
                            <div class="col-sm-3 web-design isotope-item">
                                <div class="grid">
                                    <figure class="effect-oscar">
                                        <img src="<?php echo base_url(); ?>admin/images/bumm/<?= $row->bumm_photo?>"alt="" width=300 height=300>
                                        <figcaption>
                                            <h3><?= $row->bumm_produk ?> <br>Rp. <?= number_format($row->bumm_harga, 2)?></h3>

                                            <a class="view icon-pentagon" href="<?= site_url('bumm/detail/'.$row->bumm_id); ?>"><i class="fa fa-list"></i></a>           
                                        </figcaption>           
                                    </figure>
                                </div>
                            </div>

                        <?php }?>
                            
                        </div>
                    </div> -->
                <!-- </div> --><!-- Container end -->
            <!-- </section> --><!-- Portfolio end -->
            <br>
            <!-- end bumm -->
            <hr style="height:4px;border-width:0;color:gray;background-color:gray">
            <br>
            <br>
            
            <div class="row">
                <div class="col-md-12 heading">
                    <span class="title-icon classic pull-left"><i class="fa fa-bookmark"></i></span>
                    <h2 class="title classic">DONASI</h2>
                </div>
            </div>
            <div class="row">

                <!-- post image start -->
                <?php foreach($infak_priority_view as $row){ ?>
                <!-- Portfolio item slider start -->
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <!-- <div class="portfolio-slider">
                        <div class="flexportfolio flexslider">
                            <ul class="slides">
                                <li><img src="images/portfolio/portfolio-bg1.jpg" alt=""></li>
                                <li><img src="images/portfolio/portfolio-bg2.jpg" alt=""/></li>
                                <li><img src="images/portfolio/portfolio-bg3.jpg" alt=""/></li>
                            </ul>
                        </div>
                    </div> -->


                     <div class="post-image-wrapper">
                            <img src="<?php echo base_url(); ?>admin/images/donasi/<?= $row->photo  ?>" class="img-responsive" alt="" /> 

                           <!-- <img src="design/images/portfolio/portfolio-bg1.jpg" class="img-responsive" alt="" /> -->
                        </div><!-- post image end -->
                </div>
                <!-- Portfolio item slider end -->

                <!-- sidebar start -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="portfolio-desc">
                            <h3 class="widget-title"><?= $row->nama?></h3>
                            <p>
                                <?= $row->ringkasan?>
                            </p>
                            <br/>

                            <h3 class="widget-title">Detail</h3>
                                <?php 
                                $jumlah = $row->jumlah;
                                $target = $row->target;
                                $kurang = $target - $jumlah;
                                $persen=(($jumlah)/($target))*100;
                                $bulat = round($persen, 2);
                                ?>

                                <table style="font-weight: bold;color: black;">
                                    <tr>
                                        <td> Dari </td>
                                        <td> : </td>
                                        <td> Rp. <?= number_format($target,2) ?></td>
                                    </tr>
                                    <tr>
                                        <td> Terkumpul </td>
                                        <td> : </td>
                                        <td> Rp. <?= number_format($jumlah,2) ?></td>
                                    </tr>
                                    <tr>
                                        <td> Kurang </td>
                                        <td> : </td>
                                        <td> Rp. <?= number_format($kurang,2) ?></td>
                                    </tr>           
                                </table>
                            <br/>
                            
                            <div class="containerskills">
                                <div class="skills" style="font-size:14px;width:<?= $bulat; ?>%; background-color: #2196F3;">   <?=$bulat; ?>%
                                </div>
                            </div>
                            <p><a href="<?= site_url('donasi/detail/'.$row->id); ?>" class="project-btn btn btn-primary">Yuk Berinfak.. </a></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
                <!-- sidebar end -->
            </div>

                    

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



                
                



        </div><!--/ container end -->
    </section><!-- Blog details page end -->




   