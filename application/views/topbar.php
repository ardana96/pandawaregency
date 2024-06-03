<header id="header" class="navbar-fixed-top header2" role="banner">
    <img class="img-responsive" src="<?php echo base_url(); ?>images/pandawa.png"  width=80 height=80 style="float:left;" alt="logo" >
                       <!--  <a href="<?php echo base_url();?>dashboard"> -->
        <div class="container">
            <div class="row">
                <!-- Logo start -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand">

                              <a href="<?php echo base_url();?>dashboard">
                            <h4 style="color:white;"> <span>Pandawa Regency 2</span>
                           
                            
                            </h3>
                            <!-- <img class="img-responsive" src="images/logo.png" alt="logo"> -->
                        </a> 
                    </div>                   
                </div><!--/ Logo end -->
                <nav class="collapse navbar-collapse clearfix" role="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php if ($topbar == 'home') {echo 'class="dropdown active"';} ?>>
                            <a href="<?php echo base_url();?>dashboard" >Home</i></a>
                            <!-- <div class="dropdown-menu">
                                <ul>
                                    <li><a href="index.html">Home 1</a></li>
                                    <li class="active"><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                    <li><a href="index-4.html">Home 4</a></li>
                                </ul>
                            </div> -->
                        </li>
                        <li <?php if ($topbar == 'profile') {echo 'class="dropdown active"';} ?>>
                            <a href="<?php echo base_url();?>profile" >Profile </a>
                            
                        </li>

                        <li <?php if ($topbar == 'kegiatan') {echo 'class="dropdown active"';}  else {echo 'class="dropdown"';}?>>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kegiatan<!-- <i class="fa fa-angle-down"></i> --></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="<?php echo base_url();?>kegiatan">All Category</a></li>
                                    <?php foreach($kegiatan_kategori_view as $row){ ?>
                                    <?php $category = strtolower($row->kategori_nama)?>    
                                    <li><a href="<?= site_url('kegiatan/kegiatan_kategori/'.$row->kategori_id); ?>"><?= ucwords($category) ?></a></li>
                                   <?php }?>
                                </ul>
                            </div>
                        </li>

                        <li <?php if ($topbar == 'divisi') {echo 'class="dropdown active"';}  else {echo 'class="dropdown"';}?>>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Divisi<!-- <i class="fa fa-angle-down"></i> --></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="<?php echo base_url();?>divisi">All Division</a></li>
                                    <?php foreach($divisi_view as $row){ ?>
                                    <?php $divisi = strtolower($row->divisi_nama)?>    
                                    <li><a href="<?= site_url('divisi/detail/'.$row->divisi_det_id); ?>"><?= ucwords($divisi) ?></a></li>
                                   <?php }?>
                                </ul>
                            </div>
                        </li>
                       
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav><!--/ Navigation end -->
            </div><!--/ Row end -->
        </div><!--/ Container end -->
    </header><!--/ Header end -->