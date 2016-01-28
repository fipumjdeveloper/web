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
            /* scrolling */
			$(window).scroll(function(){
                if ($(window).width() > 991){
                    if ($(this).scrollTop() >= $('section#sejarah').offset().top) {
                        var top_scroll = $(document).scrollTop();
                        var top_start = $('section#sejarah').offset().top;
                        var top_to = top_scroll - top_start;
                        $('.non-float').css('position', 'relative');
                        $('.non-float').css('top', (top_to+10)+'px');
                        
                        $('.scrollup').slideDown(); 
                    }else{
                        $('.non-float').css('position', '');
                        
                        $('.scrollup').slideUp();
                    }
                }
            });
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
					<li><a href="#"><b>Tentang Kami</b></a></li>
				</ol>
			</div>
			<!-- content -->
            <div class="col-md-4 col-sm-12 col-xs-12 col-side">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="list-group about non-float">
                          <div class="jdl-link">Tentang Kami</div>
                          <a href="#sejarah" class="list-group-item" target="blank"><span class="glyphicon glyphicon-chevron-right"></span>Sejarah Singkat</a>
                          <a href="#visimisi" class="list-group-item" target="blank"><span class="glyphicon glyphicon-chevron-right"></span>Visi & Misi</a>
                          <a href="#tujuan" class="list-group-item" target="blank"><span class="glyphicon glyphicon-chevron-right"></span>Tujuan</a>
                          <a href="#sasaran" class="list-group-item" target="blank"><span class="glyphicon glyphicon-chevron-right"></span>Sasaran</a>
                          <a href="#pengajar" class="list-group-item" target="blank"><span class="glyphicon glyphicon-chevron-right"></span>Tenaga Pengajar</a>
                        </div>
                        <div class="list-group about float">
                          <div class="jdl-link">Tentang Kami</div>
                          <a href="#sejarah" class="list-group-item" target="blank"><span class="glyphicon glyphicon-chevron-right"></span>Sejarah Singkat</a>
                          <a href="#visimisi" class="list-group-item" target="blank"><span class="glyphicon glyphicon-chevron-right"></span>Visi & Misi</a>
                          <a href="#tujuan" class="list-group-item" target="blank"><span class="glyphicon glyphicon-chevron-right"></span>Tujuan</a>
                          <a href="#sasaran" class="list-group-item" target="blank"><span class="glyphicon glyphicon-chevron-right"></span>Sasaran</a>
                          <a href="#pengajar" class="list-group-item" target="blank"><span class="glyphicon glyphicon-chevron-right"></span>Tenaga Pengajar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
                <section class="inner-content" id="sejarah">
                <h1 class="hd-one"><span class="ico-hd">Sejarah Fakultas Ilmu Pendidikan UMJ</span></h1>
Fakultas Ilmu Pendidikan Universitas Muhammadiyah Jakarta didirikan berdasar SK Rektor Nomor  194  tahun 2007  yang waktu dijabat oleh Dr. Hj. Masyitoh, M.Ag. SK tersebut diterbitkan berdasarkan kebutuhan izin program studi Pendidikan Guru Pendidikan Pendidikan Anak Usia Dini yang harus di bawah naungan fakultas kependidikan/keguruan.<br>
Fakultas ini adalah fakultas yang kedelapan dari fakultas yang ada di lingkungan Universits Muhammadiyah Jakarta. Maka setelah mendapatkan izin operasional program studi yang pertama yaitu program studi PG PAUD dengan nomor 1657/D/T/2008 pada taggal 19 Mei 2008, fakultas ini resmi memisahkan diri dari induknya yaitu Fakultas Agama Islam.<br>
Program studi yang ke dua dan ketiga  mendapatkan izin penyelenggaraan dari Direktorat Jenderal Pendidikan Tinggi Departemen Pendidikan Nasional secara bersamaan dengan nomor 2361/D/T/2009 pada tangga 9 Desember 2009. Kedua program studi tersebut adalah program studi Pendidikan Guru Sekolah Dasar dan program studi Pendidikan matematika.<br> 
Sementara dua program studi lainnya masih dalam proses pengurusan izin yaitu program studi Pendidikan Bahasa dan Sastra Indonesia dan Pendidikan Bahasa Inggris.
                </section>
                <section class="inner-content" id="visimisi">
                    <h1 class="hd-one"><span class="ico-hd">Visi & Misi</span></h1>
                    <h4><strong>VISI</strong></h4>
                    <p>Pada tahun 2020 FIP-UMJ menjadi Fakultas Terkemuka, Modern dan Islami dalam mempersiapkan Pendidik dan Tenaga Kependidikan yang Profesional</p>
                    <br>
                    <h4><strong>Misi</strong></h4>
                    <p>
                        <ol>
                        <li>Menyelenggarakan proses pembelajaran yang profesional dan kondusif</li>
                        <li>Mengembangkan tenaga pendidik/dosen dengan kualifikasi pendidikan Strata Tiga (S3) sesuai dengan tiap-tiap program studi yang ada di lingkungan FIP UMJ</li>
                        <li>Menyiapkan fasilitas pembelajaran dengan penggunaan teknologi terkini</li>
                        <li>Menyelenggarakan proses pembelajaran dengan metode SCL</li>
                        <li>Menghasilkan penelitian dalam bidang ilmu pendidikan yang aplikatif</li>
                        <li>Mengembangkan lembaga penelitian dalam bidang pendidikan sebagai pusat rujukan bagi Fakultas Ilmu Pendidikan di lingkungan PTM se-Indonesia</li>
                        <li>Menyelenggarakan pengabdian masyarakat yang berorientasi pada pengembangan pendidikan dan pemberdayaan masyarakat di indonesia</li>
                        <li>Mengembangkan Al-Islam dan Kemuhammadiyahan sebagai pembentuk karakter civitas akademi FIP UMJ sesuai dengan tuntunan Persyarikatan Muhammadiyah</li>
                        <li>Mewujudkan suasana akademik yang islami, profesional dan kondusif bagi semua pihak</li>
                        </ol>
                    </p>
                </section>
                <section class="inner-content" id="tujuan">
                    <h1 class="hd-one"><span class="ico-hd">Tujuan</span></h1>
                    <p>
                        <ol>
                        <li>Menghasilkan lulusan sebagai Tenaga Pendidik dan Kependidikan yang profesional  dan islami.</li>
                        <li>Meningkatkan atmosfer fakultas yang kondusif dengan memperhatikan prinsip akuntabilitas, transparan, kesungguhan, kebersamaan, dan kehandalan sebagai fakultas yang profesional dan islami.</li>
                        <li>Menghasilkan lulusan yang memiliki kompetensi yang profesional, pedagogik, kepribadian, dan sosial dalam menjalankan tugasnya.</li>
                        <li>Menyelenggarakan pendidikan yang terpadu dengan penelitian dan pengabdian masyarakat yang bermuatan nilai-nilai al-Islam dan Kemuhammadiyahan.</li>
                        <li>Meningkatkan penelitian dan pengabdian pada masyarakat yang mendukung pengembangan ilmu pendidikan.</li>
                        <li>Meningkatkan kerja sama dengan lembaga-lembaga lain dalam meningkatkan kualitas Catur  Dharma Perguruan Tinggi yang mendukung pengembangan teori dan praktik pendidikan, dalam bingkai ilmu pendidikan.</li>
                        <li>Meningkatkan kualitas para guru melalui pendidikan profesi/sertifikasi.</li>
                        </ol>
                    </p>
                </section>
                <section class="inner-content" id="sasaran">
                    <h1 class="hd-one"><span class="ico-hd">Sasaran</span></h1>
                    <p>
                        <ol>
                        <li>Lulusan SLTA yang akan menjadi guru atau pendidik dan tenaga kependidikan </li>
                        <li>Pendidik dan tenaga kependidikan yang belum menempuh pendidikan strata satu (S1) </li>
                        <li>Masyarakat dan pemerhati pendidikan yang akan mendalami bidang pendidikan </li>
                        <li>Masyarakat dan pemerhati pendidikan yang akan mendalami bidang pendidikan </li>
                        </ol>
                    </p>
                </section>
                <section class="inner-content" id="pengajar">
                    <h1 class="hd-one"><span class="ico-hd">Tenaga Pengajar</span></h1>
                    <h4><strong>DOSEN FAKULTAS ILMU PENDIDIKAN UMJ</strong></h4>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                        <h4><strong><span style="font-family: arial,helvetica,sans-serif; color: #800000;">Dosen Program Studi PG PAUD</span></strong></h4>
                        <p style="font-size:small;">
                            Adiyati Fathu Roshonah, M.Pd<br>
                            Anita Damayanti, M.Pd.<br>
                            Diah Andika Sari, M.Pd<br>
                            Farihen, Drs.M.Ag<br>
                            Herliana sudjana, M.Pd.<br>
                            Nehru Meha, M.Psi<br>
                            Munifah Bahfen, M.Pd<br>
                            Tiara Astari, M.Pd<br>
                            Rahimi Zamzam, M.Pd<br>
                            Rahmat Sentika, Dr. dr. MARS<br>
                            Sriyanti Rahmatunnisa, M.Pd<br>
                            Widia winata, M.Pd<br>
                        </p>
                        <h4><strong><span style="font-family: arial,helvetica,sans-serif; color: #800000;">Dosen PGSD</span></strong></h4>
                        <p style="font-size:small;">
                            A Susanto, Drs. M.Pd<br>
                            Aminudin Rasyad, Prof. Dr.<br>
                            Apri Utami Parta Santi, M.Si<br>
                            Asep Deni Gustiana, M.Pd<br>
                            Azmi Al Bahij, M.Si<br>
                            Dedek kustiawati, M.Pd<br>
                            Dirgantara Wicaksono, M.Pd<br>
                            Herwina, MA<br>
                            Iswan, SE., M.Si<br>
                            Khaerunnisa, M.Pd.<br>
                            Mas Roro Diah Wahyulestari, M.Pd<br>
                            Mimin Haryati, M.Pd<br>
                            Mirna purnamaningsih, M.Pd<br>
                            Misriandi, M.Pd<br>
                            Muhamad Hayyun, M.Pd<br>
                             Nurhayati, M.Pd<br>
                            R.  Andi Ahmad Gunadi, Dr., M.Pd<br>
                            Sri imawati, M.Pd<br>
                            Sholehuddin, M.Pd<br>
                        </p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h4><strong><span style="font-family: arial,helvetica,sans-serif; color: #000000;">Dosen Pendidikan Matematika</span></strong></h4>
                            <p style="font-size:small;">
                                Yusuf, M.Si<br>
                                Siti Rohmah Rohimah, M.Si<br>
                                Ismah, M.Si.<br>
                                Doni Fernando Putra, M.Si<br>
                                Ririn Widiyasari, M.Pd<br>
                            </p>
                            <h4><strong><span style="font-family: arial,helvetica,sans-serif; color: #000000;">Dosen Pendidikan Bahasa dan sastra Indonesia</span></strong></h4>
                            <p style="font-size:small;">
                                Ati Kusmawati, M.Si<br>
                                Aida Sumardi, M.Pd<br>
                                Nurhadi, M.Pd<br>
                                Muttaqillah, M.Pd<br>
                            </p>
                            <h4><strong><span style="font-family: arial,helvetica,sans-serif; color: #000000;">Dosen Pendidikan Bahasa Inggris</span></strong></h4>
                            <p style="font-size:small;"> 
                                Ansharullah, Dr<br>
                                Aswir, M.Pd<br>
                                Lidiyatul Izzah, M.Pd<br>
                                Muhamad Sofian Hadi, M.Pd<br>
                                Mutiarani, M.Pd<br>
                                Zaitun, M.Pd<br>
                            </p>                         
                        </div>
                    </div>
                </section>

            </div>
		</div>
	</div>
	<?php include ('footer.php');?>
</div>
</body>
</html>