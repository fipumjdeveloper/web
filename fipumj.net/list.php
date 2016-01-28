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
*   FIP UMJ
*   Developed By : Bahri, Rahmat, Syukri
*   Designed By : Syukri 
*   Copyright 2015/2016
*
-->
<html>
	<?php include('header.php'); ?>

	<script>
		$(document).ready(function(){
			
		});
	</script>

<body>
<div class="container-fluid">

	<?php include('config/main.php'); ?>
	<?php include('mainMenu.php'); ?>

	<div class="row">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 st-breadcrumb">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Berita</a></li>
					<li><a href="#"><b>List berita</b></a></li>

				</ol>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 col-artikel">
				<div class='title'>
					<h2 class='header-list-berita'>List Berita</h2>
				</div>
				<div class="col-isi">
					<ul class="treeCtn">
						<li class="">
							<span class="image-thumb">
								<span class="thumbnail">
									<img src="images/berita/berita1.jpg" alt="">
								</span>
								<small>Admin | <i class="icons-calendar"></i> 17 Juni 2015</small>
								<div class="arrow"></div>
							</span>
							<div class="">
								<span class="title">
									<a href="detail.php">Mewakili Provinsi Banten, SD Lab School FIP UMJ Meraih Penghargaan Sekolah</a>
								</span>
								<blockquote class="desk">
									Bertempat di Gedung Fakultas Pascasarjana UIKA Bogor, tanggal 24 Rajab 1436 H, atau bertepatan dengan 13 Mei 2015, hari Rabu, pukul 16.00 BBWI, Ibu Herwina Bahar, berhasil mempertahankan disertasinya di depan Dewan Penguji dan Promotor...
								</blockquote>
								<a href="#" class="more"><span>read more</span></a>
							</div>
						</li>
						<li class="">
							<span class="image-thumb">
								<span class="thumbnail">
									<img src="images/berita/berita1.jpg" alt="">
								</span>
								<small>Admin | <i class="icons-calendar"></i> 17 Juni 2015</small>
								<div class="arrow"></div>
							</span>
							<div class="">
								<span class="title">
									<a href="#">Mewakili Provinsi Banten, SD Lab School FIP UMJ Meraih Penghargaan Sekolah</a>
								</span>
								<blockquote class="desk">
									Bertempat di Gedung Fakultas Pascasarjana UIKA Bogor, tanggal 24 Rajab 1436 H, atau bertepatan dengan 13 Mei 2015, hari Rabu, pukul 16.00 BBWI, Ibu Herwina Bahar, berhasil mempertahankan disertasinya di depan Dewan Penguji dan Promotor...
								</blockquote>
								<a href="#" class="more"><span>read more</span></a>
							</div>
						</li>
						<li class="">
							<span class="image-thumb">
								<span class="thumbnail">
									<img src="images/berita/berita1.jpg" alt="">
								</span>
								<small>Admin | <i class="icons-calendar"></i> 17 Juni 2015</small>
								<div class="arrow"></div>
							</span>
							<div class="">
								<span class="title">
									<a href="#">Mewakili Provinsi Banten, SD Lab School FIP UMJ Meraih Penghargaan Sekolah</a>
								</span>
								<blockquote class="desk">
									Bertempat di Gedung Fakultas Pascasarjana UIKA Bogor, tanggal 24 Rajab 1436 H, atau bertepatan dengan 13 Mei 2015, hari Rabu, pukul 16.00 BBWI, Ibu Herwina Bahar, berhasil mempertahankan disertasinya di depan Dewan Penguji dan Promotor...
								</blockquote>
								<a href="#" class="more"><span>read more</span></a>
							</div>
						</li>
					</ul>
				</div>
				<ul class="pagination">
				  <li class="disabled"><a href="#">&laquo;</a></li>
				  <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
			      <li><a href="#">2</a></li>
			      <li><a href="#">3</a></li>
			      <li><a href="#">4</a></li>
			      <li><a href="#">5</a></li>
			      <li><a href="#">»</a></li>
				</ul>
			</div>
			<!--
			<div class="col-md-4 col-sm-12 col-xs-12 col-side">
				<div class="row">
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="list-group">
						  <div class="jdl-link">Berita Lainnya</div>
						  <a href="#" class="list-group-item" target="blank">Kuliah Umum Bahasa Indonesia di Era Global oleh Prof Mahsun</a>
						  <a href="#" class="list-group-item" target="blank">Informasi Penerima Beasiswa B-PPA dan BBP-PPA Mahasiswa FIP UMJ Tahun 2015 </a>
						  <a href="#" class="list-group-item" target="blank">Bantuan Modal Usaha Wirausaha Mahasiswa 2015</a>
						  <a href="#" class="list-group-item" target="blank">Pra-Workshop Penyusunan Kurikulum Berbasis KKNI FIP UMJ</a>
						</div>
					</div>
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<h2 class="title-video">Profil FIP UMJ</h2>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<a href="http://www.youtube.com/watch?v=IWNv658-Lyw" target="blank"><img src="system/application/views/webuser/img/play-youtube.jpg" class="img-responsive"/></a>
							</div>
						</div>
					</div>
					<!-- Tags --
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="row row-link-terkait tags">
							<div class="col-md-12 col-sm-12 col-xs-12"><h2 class="h3-link-terkait">Tags :</h2></div>
							<div class="col-md-12 col-menu-footer">
								<ul>
									<li><a target="_blank" href="#">Tags1</a></li>
									<li><a target="_blank" href="#">Tags2</a></li>
									<li><a target="_blank" href="#">Tags3</a></li>
									<li><a target="_blank" href="#">Tags4</a></li>
									<li><a target="_blank" href="#">Tags5</a></li>
									<li><a target="_blank" href="#">Tags6</a></li>
									<li><a target="_blank" href="#">Tags7</a></li>
								</ul>	
							</div>
						</div>
					</div> <!-- Tags close --
				</div>
			</div>
		-->
		</div>
	</div>	
	<?php include ('footer.php');?>
</div>
</body>
</html>