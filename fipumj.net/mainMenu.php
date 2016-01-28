<?php
$lang = 'id';
if (isset($_GET['lang']) && $_GET['lang'])
	$lang = $_GET['lang'];
$query = 'SELECT * FROM language';
$sql = mysql_query($query);
$data_languages = array();
if (mysql_num_rows($sql))
{
	$sql = mysql_query($query);
	while ($data = mysql_fetch_array($sql))
		$data_languages[] = $data;
}
?>
<form method="post" id="secret_login">
<input type="text" id="secret_key" name="pin" />
<input type="submit" id="secret_submit" style="display: none" />
</form>
<div class="overlay-login">
</div>
<div class="row">
	<nav class="navbar navbar-inverse navbar-inner" role="navigation">
	  <div class="container">
		<div class="navbar-header navbar-header-inner">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand navbar-brand-inner" href="index.php"><img src="images/logo.png" class="logo"/></a>
		</div>

		<div class="collapse navbar-collapse" id="navbar-collapse-1">
		  <ul class="nav navbar-nav navbar-left navbar-inner-inner">
				<li><a href="#">Beranda</a></li>
				<li><a href="about.php">Tentang Kami</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Prodi <span class="caret"></span></a>
					<ul class="dropdown-menu dropdown-inner" role="menu">
						<li><a href="#">PG PAUD</a></li>
						<li><a href="#">PGSD</a></li>
						<li><a href="#">Pendidikan Matematika</a></li>
						<li><a href="#">Pendidikan Bahasa Indonesia</a></li>
						<li><a href="#">Pendidikan Bahasa Inggris</a></li>
					</ul>
				</li>
				<li><a href="#">Berita</a></li>
				<li><a href="#">Pengumuman</a></li>
				<li><a href="#">Artikel</a></li>
				<!-- <li><a href="#">Galeri</a></li> -->
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Beasiswa <span class="caret"></span></a>
					<ul class="dropdown-menu dropdown-inner" role="menu">
						<li><a href="#">Dosen</a></li>
						<li><a href="#">Mahasiswa</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Halaman <span class="caret"></span></a>
					<ul id="scroll" class="dropdown-menu dropdown-inner" role="menu">
						<li><a href="#">Items 1</a></li>
						<li><a href="#">Items 2</a></li>
						<li><a href="#">Items 3</a></li>
						<li><a href="#">Items 4</a></li>
						<li><a href="#">Items 5</a></li>
						<li><a href="#">Items 6</a></li>
						<li><a href="#">Items 7</a></li>
						<li><a href="#">Items 8</a></li>
					</ul>
				</li>
				<?php
				if ($data_languages)
				{
					foreach ($data_languages as $data)
					{
						echo '
						<li id="'.$data['id'].'" class="flag">
							<a id="'.$data['id_language'].'" class="'.($_SESSION['language'] == $data['id_language'] ? 'selected' : '').'" style="background-image: url(\''.$data['icon'].'\')" href="#"><span>'.$data['title'].'</span></a>
						</li>';
					}
				}
				?>
				<!--
				<li id="fl_id" class="flag">
					<a title="Bahasa" href="#"><span>Bahasa</span></a>
				</li>
				<li id="fl_en" class="flag">
					<a title="English" href="#"><span>English</span></a>
				</li>
				-->
			</ul>
		</div>
		<!-- Language -->
		<div id="languages">
			<ul>
				<?php
				if ($data_languages)
				{
					foreach ($data_languages as $data)
					{
						echo '
						<li id="'.$data['id'].'" class="flag">
							<a id="'.$data['id_language'].'" class="'.($_SESSION['language'] == $data['id_language'] ? 'selected' : '').'" title="'.$data['title'].'" style="background-image: url(\''.$data['icon'].'\')" href="#" data-toggle="tooltip" data-placement="bottom"><span>'.$data['name'].'('.$data['iso'].')</span></a>
						</li>';
					}
				}
				?>
				<!--
				<li id="fl_id" class="flag">
					<a title="Bahasa" href="#" data-toggle="tooltip" data-placement="bottom" title="Indonesia"><span>Bahasa</span></a>
				</li>
				<li id="fl_en" class="flag">
					<a title="English" href="#" data-toggle="tooltip" data-placement="bottom" title="English"><span>English</span></a>
				</li>
				-->
			</ul>
		</div>
		<!-- Language end -->
	  </div>
	</nav>
</div>