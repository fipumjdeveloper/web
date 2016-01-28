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
					<li><a href="#"><b>detail berita</b></a></li>

				</ol>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12 col-artikel">
				<div class='title'>
					<h2 class='header-list-berita'>Ibu Herwina Bahar Berhasil Merahi Gelar Doktor</h2>
					<small>Admin | <i class="icons-calendar"></i> 17 Juni 2015</small>
				</div>
				<div class="deskripsi">
					<span class="img"><img src="images/berita/93db85ed909c13838ff95ccfa94cebd9.jpg" class="img-responsive"></span>
					<p style="">Bertempat di Gedung Fakultas Pascasarjana UIKA Bogor, tanggal 24 Rajab 1436 H, atau bertepatan dengan 13 Mei 2015, hari Rabu, pukul 16.00 BBWI, Ibu Herwina Bahar, berhasil mempertahankan disertasinya di depan Dewan Penguji dan Promotor. Dengan demikian, Ibu Dekan FIP ini telah resmi menyandang gelar akademik tertinggi, Doktor Pendidikan Islam dari Universitas Ibnu Khaldun (UIKA), Bogor. </p>
					<p style="">Model Pembelajaran Pendidikan Islam Terpadu adalah tema yang diangkat dalam Disertasi yang berjudul Pembelajaran Terpadu berbasis Asmaul Husna dalam Pembentukan Karakter Anak Usia Dini (Studi Kajian di Lab School Fakultas Ilmu Pendidikan Universitas Muhammadiyah Jakarta). Dibawah bimbingan Promotor Prof Dr. Dede Rosyada, MA, dan Adian Husaini, Ph.D,  promovenda berhasil mempertahankan disertasi setebal 300 halaman lebih dihadapan para penguji yang terdiri dari: Prof Dr Didin Hafidhuddin, MS, Prof Dr Didin Saefuddin, MA, dan Dr Ibdalsyah, MA.</p>
					<p style="">Dihadiri civitas akademika Universitas Muhammadiyah Jakarta, Ketua BPH, Rektor dan Wakil Rektor, Para Dekan, dosen, dan mahasiswa, promovenda yang berberapa kali telah menerima Hibah Penelitian ini, berhasil memperoleh Gelar Doktor yang ke-82 dari Universitas Ibn Khaldun, Bogor.  
					</p>
				</div>
			</div>
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
								<a href="http://www.youtube.com/watch?v=IWNv658-Lyw" target="blank"><img src="../../system/application/views/webuser/img/play-youtube.jpg" class="img-responsive"/></a>
							</div>
						</div>
					</div>
					<!-- Tags -->
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
					</div> <!-- Tags close -->
				</div>
			</div>
		</div>
	</div>	
	<?php include ('footer.php');?>
</div>
</body>
</html>