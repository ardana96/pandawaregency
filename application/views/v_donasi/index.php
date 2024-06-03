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
	<img src="design/images/banner/banner2.jpg" alt ="" />
	<div class="parallax-overlay"></div>
		<!-- Subpage title start -->
		<div class="banner-title-content">
        	<div class="text-center">
	        	<h2>INFAK MASJID AT TAQWA</h2>
	        	<ul class="breadcrumb">
		            <li>Program-program Donasi Masjid AT TAQWA Gabugan</li>
		            
	          	</ul>
          	</div>
      	</div><!-- Subpage title end -->
</div><!-- Banner area end -->


<section id="main-container">
	<div class="container">


	

		<div class="row">
			<?php foreach($donasi_view as $row){ ?>
			<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<div class="service-content">
					<a href="<?= site_url('donasi/detail/'.$row->id); ?>" >
						<span class="service-image"><img class="img-responsive" src="<?php echo base_url(); ?>admin/images/donasi/<?= $row->photo?>" alt="" /></span>
					</a>
					<a href="<?= site_url('donasi/detail/'.$row->id); ?>" ><h3><?= $row->nama?></h3></a>
					<!-- <p>
						<?= //substr($row->ringkasan,0, 50)."....."
							$row->ringkasan

						?>
					</p> -->


					<?php 
						$jumlah = $row->jumlah;
						$target = $row->target;
						$persen=(($jumlah)/($target))*100;
						$bulat = round($persen, 2);
					?>
					
					<table>
						<tr>
							<td> Target </td>
							<td> : </td>
							<td> Rp. <?= number_format($target,2) ?></td>
						</tr>
						<tr>
							<td> Terkumpul </td>
							<td> : </td>
							<td> Rp. <?= number_format($jumlah,2) ?></td>
						</tr>		
					</table>


					
				</div>
				<div class="containerskills" style="ali">
					<div class="skills" style="font-size:9px;width:<?=$persen ?>%; background-color: #2196F3;"><?=$bulat ?>%</div>
				</div>

				<br>
				<a href="<?= site_url('donasi/detail/'.$row->id); ?>" class="btn btn-primary">Selengkapnya</a>
			
			</div><!--/ End first service -->
		<?php }?>
			

		</div><!-- Content Row end -->


			


	





	</div>
</section>
