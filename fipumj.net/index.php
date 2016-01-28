<?php session_start();
if (!isset($_SESSION['language']))
	$_SESSION['language'] = 1;
if (!isset($_SESSION['pin']))
	$_SESSION['pin'] = '';
$_SESSION['chance'] = 3;
?>
<!DOCTYPE html>
<!-- 
*
*	FIP UMJ
*	Developed By : Bahri, Rahmat, Syukri
*	Designed By : Syukri 
*	Copyright 2015/2016
*
-->
<html>
	<?php include('header.php'); ?>
	<script type="text/javascript">
    	$(document).ready(function(){
			$("#myCarousel").carousel({
				interval: 0,
				pause: "hover",
			});
			// Headline news text rotator
			$(".headlines .text-rotator").show().ticker({ rate: 50, delay: 5000 }).trigger("play");
			$('#secret_login').submit(function(e){
				var data_key = $('#secret_key').val();
				e.preventDefault();
				$.ajax({
					url: 'secured/process.php',
					data: 'data='+data_key,
					method: 'POST',
					success: function(data){
						var result = JSON.parse(data);
						if (result[0] == 0)
							alert(result[1]);
						else if (result[1])
							location.href=result[1];
					},
					error: function(data){
						alert('You aren\t allowed !');
					}
				});
			});
			$('.overlay-login').click(function(e){
				$('#secret_key').val('').focus();
			})
    	});
    </script>

<body>
<div class="container-fluid">
	
	<?php include('config/main.php'); ?>
	<?php include('mainMenu.php'); ?>
	
	<!-- Carousel -->
	<div class="container-fluid container-slide">
		<div class="row">
			<div id="myCarousel" class="carousel slide">  
				<div class="carousel-inner">
					<div class="item active"><img src="images/img-slide/diesss.jpg" alt="">
					  <div class="container">
						<div class="carousel-caption">
						  <h2><a href="#" class="titel">Semarak Dies Natalis UMJ ke-....</a></h2>
						  <div class="caption"><p>Agenda Kegiatan : 2 - 21 Mei 2015</p></div>
						</div>
					  </div>
					</div>
					<div class="item"><img src="images/img-slide/sifon.jpg" alt="">
					  <div class="container">
						<div class="carousel-caption">
						  <h2><a href="#" class="titel">Pelatihan Keterampilan Manajemen Mahasiswa</a></h2>
						  <div class="caption"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra justo sit amet erat pretium sagittis. Donec convallis ultricies faucibus</p></div>
						</div>
					  </div>
					</div>
					<div class="item"><img src="images/img-slide/angklung.jpg" alt="">
					  <div class="container">
						<div class="carousel-caption">
						  <h2><a href="#" class="titel">Festival Seni, Minat, Bakat, dan Kreativitas Mahasiswa, 12 Juni 2015 </a></h2>
						  <div class="caption"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra justo sit amet erat pretium sagittis. Donec convallis ultricies faucibus.</p></div>
						</div>
					  </div>
					</div>
					<div class="item"><img src="images/img-slide/utm.jpg" alt="">
					  <div class="container">
						<div class="carousel-caption">
						  <h2><a href="#" class="titel">Penandatanganan Kerjasama FIP UMJ dengan Fakulti Pendidikan UTM, Malaysia, 3 Juni 2015 </a></h2>
						  <div class="caption"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra justo sit amet erat pretium sagittis. Donec convallis ultricies faucibus.</p></div>
						</div>
					  </div>
					</div>
				</div>
			  <!-- Controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="ico-left"></span></a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="ico-right"></span></a>
			</div>
		</div>
	</div>
	<!-- Carousel End -->
	<div class="row">
		<div class="container-latest-news">
			<div class="container">
				<div class="row row-berita-terbaru">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<!-- Test rotator start -->
						<div class="headlines clearfix">
							<span class="base">14<i>Jun</i></span> 
							<div class="text-rotator">
							<div><a title="Title 1" href="#">Title 1</a></div>
							<div><a title="Lorem ipsum dolor sit amet, consectetur adipiscing elit" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></div>
							</div>
						</div>
						<!-- Test rotator end -->
					</div>
					<div class="col-md-4 height-berita-terbaru col-sm-6 col-xs-12">
						<div class="widget minheight">
							<h4 class="widget-title"><i class="icons-th-list"></i>&nbsp;Pengumuman
							<span class="idx pull-right"><a href="list.php">&lt;Index&gt;</a></span></h4>
							<div class="widget-content">
								<div class="col-md-12 col-sm-12 col-xs-4 no-padding">
									<a class="thumbnails" href="detail.php">
										<img src="images/readmore.jpg" width="260px" class="bg-image-berita-terbaru img-responsive"/>								
										<img src="images/berita/berita1.jpg" width="260px" class="items image-berita-terbaru img-responsive"/>
									</a>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-8 no-padding">
									<h5 class="h5-berita-terbaru"><a href="detail.php">Mewakili Provinsi Banten, SD Lab School FIP UMJ Meraih Penghargaan Sekolah..</a></h5>
									<span class="date"><i class="icons-calendar"></i> 17 Juni 2015</span>
								</div>
								<ul class=" post-single">
									<li>
										<a href="#"><img alt="" src="images/gossip1.jpg"></a>
										<div class="desk">
											<h4 class="list-title"><a href="#"> Kunjungan Ibu Airin Rachmi Diany ke UMJ </a></h4>
											<span><i class="icons-calendar"></i> 15 Juni 2015</span>
										</div>
									</li>
									<li>
										<a href="#"><img alt="" src="images/gossip1.jpg"></a>
										<div class="desk">
											<h4 class="list-title"><a href="#"> The First Aisyiyah International Seminar on PAUD </a></h4>
											<span><i class="icons-calendar"></i> 11 Juni 2015</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 height-berita-terbaru col-sm-6 col-xs-12">
						<div class="widget minheight">
							<h4 class="widget-title"><i class="icons-th-list"></i>&nbsp;Berita Terbaru
							<span class="idx pull-right"><a href="list.php">&lt;Index&gt;</a></span></h4>
							<div class="widget-content">
								<div class="col-md-12 col-sm-12 col-xs-4 no-padding">
									<a class="thumbnails" href="detail.php">
										<img src="images/readmore.jpg" width="260px" class="bg-image-berita-terbaru img-responsive"/>								
										<img src="images/berita/berita2.jpg" width="260px" class="items image-berita-terbaru img-responsive"/>
									</a>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-8 no-padding">
									<h5 class="h5-berita-terbaru"><a href="berita/detailberita/37">FIP UMJ Angklung Fiesta</a></h5>
									<span class="date"><i class="icons-calendar"></i> 12 Juni 2015</span>
								</div>
								<ul class=" post-single">
									<li>
										<a href="#"><img alt="" src="images/gossip1.jpg"></a>
										<div class="desk">
											<h4 class="list-title"><a href="#">SEAMOLEC Menyediakan Hibah Penelitian untuk Mahasiswa dan Dosen Tahun 2015</a></h4>
											<span><i class="icons-calendar"></i> 11 Juni 2015</span>
										</div>
									</li>
									<li>
										<a href="#"><img alt="" src="images/gossip1.jpg"></a>
										<div class="desk">
											<h4 class="list-title"><a href="#">Ibu Dekan Melaunching Teater Langit Prodi PBSI FIP UMJ</a></h4>
											<span><i class="icons-calendar"></i> 9 Juni 2015</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 height-berita-terbaru col-sm-12 col-xs-12">
						<div class="widget minheight">
							<h4 class="widget-title"><i class="icons-th-list"></i>&nbsp;Agenda Kegiatan
							<span class="idx pull-right"><a href="list.php">&lt;Index&gt;</a></span></h4>
							<div class="widget-content">
								<div class="col-md-12 col-sm-12 col-xs-4 no-padding">
									<a class="thumbnails" href="detail.php">
										<img src="images/readmore.jpg" width="260px" class="bg-image-berita-terbaru img-responsive"/>								
										<img src="images/berita/berita3.jpg" width="260px" class="items image-berita-terbaru img-responsive"/>
									</a>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-8 no-padding">
									<h5 class="h5-berita-terbaru"><a href="berita/detailberita/37">Tingkatkan Layanan Pendidikan, UNTAN Menuju Kampus Digital</a></h5>
									<span class="date"><i class="icons-calendar"></i> 29 April 2015</span>
								</div>
								<ul class=" post-single">
									<li>
										<a href="#"><img alt="" src="images/gossip1.jpg"></a>
										<div class="desk">
											<h4 class="list-title"><a href="#"> Paparan Prodi Pendidikan Bahasa Inggris FIP UMJ di Workshop Curriculum and Material ..</a></h4>
											<span><i class="icons-calendar"></i> 28 April 2015</span>
										</div>
									</li>
									<li>
										<a href="#"><img alt="" src="images/gossip1.jpg"></a>
										<div class="desk">
											<h4 class="list-title"><a href="#"> Paparan Prodi Pendidikan Bahasa Inggris FIP UMJ di Workshop Curriculum and ..</a></h4>
											<span><i class="icons-calendar"></i> 28 April 2015</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--
	<div class="row row-inner">
		<div class="container">
			<div class="col-md-5 col-sm-12 col-xs-12">
				<div class="row row-link-terkait">
					<div class="col-md-12 col-sm-12 col-xs-12"><h2 class="h3-link-terkait">Link FIP UMJ</h2></div>
					<div class="col-md-4 col-menu-footer">
						<ul>
							<li><a target="_blank" href="http://e-proposal.fipumj.ac.id">e-repository</a></li>
							<li><a target="_blank" href="http://fipumj.ac.id/journal">e-journal</a></li>
							<li><a target="_blank" href="#">e-library</a></li>
							<li><a target="_blank" href="#">nilai toefl</a></li>
							<li><a target="_blank" href="#">EDOM</a></li>
							<li><a target="_blank" href="#">SIKAD</a></li>
							<li><a target="_blank" href="#">Alumni</a></li>
						</ul>	
					</div>
					<div class="col-md-4 col-menu-footer">
						<ul>
							<li><a target="_blank" href="#">Karir</a></li>
							<li><a target="_blank" href="#">PMB</a></li>
							<li><a target="_blank" href="#">PPM</a></li>
							<li><a target="_blank" href="#">UKBI</a></li>
							<li><a target="_blank" href="#">Asosiasi</a></li>
							<li><a target="_blank" href="#">Kerjasama</a></li>
						</ul>												
					</div>
				</div>
			</div>
			<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="row row-agenda">
					<div class="col-md-12 col-sm-12 col-xs-12"><h2 class="h3-link-terkait">Agenda Kegiatan</h2></div>
					<div class="col-md-5 col-sm-5 col-xs-12">
						<div id="datepicker"></div>
					</div>
					<div class="col-md-7 col-sm-7 col-xs-12">
						<div id="loading" style="display:none;"><img src="images/loading.gif"></div>
						<div class="scroll">
							<div class="col-md-12 col-sm-12 col-xs-12 col-lf-padding">
								<div class="col-img-lfbar-home col-md-3 col-sm-3 col-xs-2"><div class="tgl-agenda"><h4 class="tgl-agenda-tgl">27</h4><h4 class="tgl-agenda-bln">Mei</h4></div></div>
								<div class="col-jdl-lfbar-home col-md-9 col-sm-9 col-xs-10 padding-jdl-pengumuman"><h5 class="h5-jdl-pengumuman"><a href="agenda/detailagenda/16">Seminar Nasional PIPT 2015, 27-28 Mei 2015</a></h5></div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 col-lf-padding">
								<div class="col-img-lfbar-home col-md-3 col-sm-3 col-xs-2"><div class="tgl-agenda"><h4 class="tgl-agenda-tgl">06</h4><h4 class="tgl-agenda-bln">Mei</h4></div></div>
								<div class="col-jdl-lfbar-home col-md-9 col-sm-9 col-xs-10 padding-jdl-pengumuman"><h5 class="h5-jdl-pengumuman"><a href="agenda/detailagenda/15">SEMIRATA BIDANG MIPA 2015, 6-9 Mei 2015</a></h5></div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 col-lf-padding">
								<div class="col-img-lfbar-home col-md-3 col-sm-3 col-xs-2"><div class="tgl-agenda"><h4 class="tgl-agenda-tgl">10</h4><h4 class="tgl-agenda-bln">Mei</h4></div></div>
								<div class="col-jdl-lfbar-home col-md-9 col-sm-9 col-xs-10 padding-jdl-pengumuman"><h5 class="h5-jdl-pengumuman"><a href="agenda/detailagenda/15">PELANTIKAN KETUA 2015, 10 Mei 2015</a></h5></div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 col-lf-padding">
								<div class="col-img-lfbar-home col-md-3 col-sm-3 col-xs-2"><div class="tgl-agenda"><h4 class="tgl-agenda-tgl">20</h4><h4 class="tgl-agenda-bln">Mei</h4></div></div>
								<div class="col-jdl-lfbar-home col-md-9 col-sm-9 col-xs-10 padding-jdl-pengumuman"><h5 class="h5-jdl-pengumuman"><a href="agenda/detailagenda/15">DEMO MAHASISWA, 20-21 Mei 2015</a></h5></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	-->
	<div class="row row-tengah">
		<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12 col-xs-12">
				<div class="widget fullwidth video-widget" id="video-widget-2">
					<h1 class="widget-title">Video of the day </h1>
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/4qa7J0ouOWI" frameborder="0" allowfullscreen></iframe>
					  <!--  -->
					</div>
				</div>
			</div>
			<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="row-gallery">
					<div class="col-md-12 col-sm-12 col-xs-12"><h2 class="h2-judul-univprofil"><a href="#">Gallery</a></h2></div>
					<div class="col-md-12">
						<div class="row margin-bottom">
							<div class="col-sm-4 col-xs-4">
								<a class="img-thumb" data-title="People walking down stairs" data-gallery="multiimages" data-toggle="lightbox" href="images/images_gallery/English Camp_34.jpg">
									<img class="img-responsive" src="images/images_gallery/English Camp_34.jpg">
								</a>
							</div>
							<div class="col-sm-4 col-xs-4">
								<a class="img-thumb" data-title="People walking down stairs" data-gallery="multiimages" data-toggle="lightbox" href="images/images_gallery/English Camp_35.jpg">
									<img class="img-responsive" src="images/images_gallery/English Camp_35.jpg">
								</a>
							</div>
							<div class="col-sm-4 col-xs-4">
								<a class="img-thumb" data-title="People walking down stairs" data-gallery="multiimages" data-toggle="lightbox" href="images/images_gallery/English Camp_36.jpg">
									<img class="img-responsive" src="images/images_gallery/English Camp_36.jpg">
								</a>
							</div>
							<div class="col-sm-4 col-xs-4">
								<a class="img-thumb" data-title="People walking down stairs" data-gallery="multiimages" data-toggle="lightbox" href="images/images_gallery/English Camp_37.jpg">
									<img class="img-responsive" src="images/images_gallery/English Camp_37.jpg">
								</a>
							</div>
							<div class="col-sm-4 col-xs-4">
								<a class="img-thumb" data-title="People walking down stairs" data-gallery="multiimages" data-toggle="lightbox" href="images/images_gallery/English Camp_38.jpg">
									<img class="img-responsive" src="images/images_gallery/English Camp_38.jpg">
								</a>
							</div>
							<div class="col-sm-4 col-xs-4">
								<a class="img-thumb" data-title="People walking down stairs" data-gallery="multiimages" data-toggle="lightbox" href="images/images_gallery/English Camp_36.jpg">
									<img class="img-responsive" src="images/images_gallery/English Camp_39.jpg">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<div class="row" style="display:none;">
		<div class="container-latest-news">
			<div class="container">
				<div class="row row-berita-terbaru">
					<div class="col-md-4 height-berita-terbaru col-sm-4 col-xs-12">
						<div class="widget fullwidth twitter-widget" id="latest-tweets-widget-2">
							<h1 class="widget-title"> LATEST TWEETS</h1>
							<ul class="twitter-feeds">
								<li class="twitter-item">
									<a class="twitter-user" href="#">@fip.umj</a>
									Ada berita penerimaan mahasiswa baru #cool 
									<span class="twitter-timestamp"><abbr title="2014/06/13 23:38:07">2014/06/13</abbr></span>
								</li>
								<li class="twitter-item">
									<a class="twitter-user" href="#">@fip.umj</a>
									Ayo daftar di FIP UMJ
									<span class="twitter-timestamp"><abbr title="2014/06/13 23:38:07">2014/06/13</abbr></span>
								</li>
								<li class="twitter-item">
									<a class="twitter-user" href="#">@fip.umj</a>
									FIP UMJ memang kita banget
									<span class="twitter-timestamp"><abbr title="2014/06/13 23:38:07">2014/06/13</abbr></span>
								</li>
							</ul>
							<a class="twitter_follow_button" href="#">Follow us on twitter</a>
						</div>
					</div>
					<div class="col-md-4 height-berita-terbaru col-sm-4 col-xs-12">
						<div class="widget fullwidth facebook-widget" id="facebook-widget-2">
							<h1 class="widget-title">Find us on Facebook </h1>
							<div class="facebook-box">
								<iframe style="border:none;  height:258px;" src=""></iframe>
							</div>
						</div>
					</div>
					<div class="col-md-4 height-berita-terbaru col-sm-4 col-xs-12">
						<div class="widget widget-counter col4">
							<h4 class="widget-title">Network</h4>
							<div class="widget-content">
								<div class="network">
									<a target="_blank" href="https://www.facebook.com/NargisFakhri">
										<span class="network-icon fa fa-facebook"><i class="icons-facebook"></i></span>
										<p><span class="network-count facebook">12,575</span>Fans</p>
									</a>
									<a target="_blank" href="http://www.twitter.com/">
										<span class="network-icon fa fa-twitter"><i class="icons-twitter"></i></span>
										<p><span class="network-count twitter">9844</span>Followers</p>
									</a>
									<a target="_blank" href="http://vimeo.com/channels/27476">
										<span class="network-icon fa fa-rss"><i class="icons-rss"></i></span>
										<p><span class="network-count rss">3714</span>Subscribers</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include ('footer.php');?>
</div>
</body>
</html>