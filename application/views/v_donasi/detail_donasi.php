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


<div id="banner-area">
	<img src="<?php echo base_url(); ?>design/images/banner/banner2.jpg" alt ="" />
	<div class="parallax-overlay"></div>
		<!-- Subpage title start -->
		<div class="banner-title-content">
        	<div class="text-center">
	        	<h2>INFAK</h2>
	        	<ul class="breadcrumb">
		            <li>Home</li>
		            <li>Infak</li>
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
							<img src="<?php echo base_url(); ?>admin/images/donasi/<?= $donasi_detail['photo'];  ?>" class="img-responsive"  alt="" style="width:750px; height:450;"/>
							<?php $date = date_create($donasi_detail['created_date']) ;?>
							<span class="blog-date"><a href="#"> <?= date_format($date,"d F Y"); ?></a></span>
						</div><!-- post image end -->
						<div class="post-header clearfix">
							<h2 class="post-title">
								<a href="blog-item.html"><?php echo $donasi_detail['nama'];  ?></a>
							</h2>
							<div class="post-meta">
								<span class="post-meta-author">Posted by <a href="#"><?php echo $donasi_detail['created_by'];  ?></a></span>
								<span class="post-meta-cats"> in <a href="#"> Donasi </a></span>
								
								
							</div><!-- post meta end -->
						</div><!-- post heading end -->
						<div class="entry-content">
							<?php echo $donasi_detail['isi'];  ?>
						</div>
						<div class="gap-20"></div>

						<?php 
						$jumlah = $donasi_detail['jumlah'];
						$target = $donasi_detail['target'];
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

						<div class="containerskills">
							<div class="skills" style="font-size:14px;width:<?= $bulat; ?>%; background-color: #2196F3;"><?=$bulat; ?>%</div>
						</div>

						
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
                              <li class=""><a href="#rekening-tab" data-toggle="tab">rekening</a></li>
                             
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="popular-tab">
                                    <h3 align="center">Untuk Donasi Silakan Klik Di bawah ini</h3>
                                    <div class="post-footer" align="center">

                            			<a href="https://api.whatsapp.com/send?phone=6285265204852&text=Saya Berminat Berdonasi ke program <?= $donasi_detail['nama']?>" class="btn btn-primary"> <i class="fa fa-whatsapp" style="font-size:25px;"> &nbsp;&nbsp;</i><span style="font-size:20px;">Hubungi</span></a>
                        			</div>

                                </div><!-- Popular tabpan end -->

                                <div class="tab-pane" id="rekening-tab" align="center">
                                    <h3 align="center">Nomor Rekening</h3>
                                    <span><b>Mandiri</b></span>
                                    <br>
                                     <span><b>A/N Masjid At Taqwa Gabugan</b></span>
                                    <br>
                                    <span>1111-1111-1111-1111-1111</span>
                                    

                                </div><!-- Popular tabpan end -->
                                
                            </div><!-- Tab content end -->
                        </div><!-- Tab widget end-->
  
                    </div><!-- sidebar end -->
                </div>




		</div>

	</div>
</section>