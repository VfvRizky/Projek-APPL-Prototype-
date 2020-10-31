<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="assets/image/LOGOweb.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/styleCustom.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome-free-5.14.0-web/css/all.css">
    <link rel='stylesheet' href='assets/css/slick-1.8.1/slick.css'>
    <link rel='stylesheet' href='assets/css/slick-1.8.1/slick-theme.css'>
    <script src="assets/js/vue.js"></script> 
    <script src="assets/js/jquery.min.js"></script>
	<title>Document</title>
</head>
<header>
	

	<br>

	<button>
		<?php
		//memulai session
		session_start();
		
		if (isset($_SESSION["username"])) {
			echo "<a href='?f=logout'>Logout</a>";
		}
		?>
	</button>
			
</header>

<body>
	<center>
		<button class="button is-primary">
		    <span class="icon">
		      <i class="fab fa-twitter"></i>
		    </span>
		    <span><a href="?f=lecturer_index">Data Dosen</a></span>
	  	</button>
	  	<button class="button is-primary">
		    <span class="icon">
		      <i class="fab fa-twitter"></i>
		    </span>
		    <span><a href="?f=mahasiwa_index">Data Mahasiswa</a></span>
	  	</button>
	  	<button class="button is-primary">
		    <span class="icon">
		      <i class="fab fa-twitter"></i>
		    </span>
		    <span><a href="?f=matakuliah_index">Data Matakuliah</a></span>
	  	</button>
	</center>

	
	
	
	

	<br>
	<center>
		<?php
		if (isset($_GET['f'])) {
			$file = $_GET['f'];
			if (file_exists("$file.php")) {
				include_once "$file.php";
			} else {
				echo 'File Tidak ada</b>';
			}
		} else {
			echo "Selamat Datang di Kelas Proweb IF";
		}
		?>
	</center>

</body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Masih tahap pengembangan</strong><br> by <a href="home.php">Kelompok 9</a>. Sebuah Website Sedersahana
      <a href="home.php">Kami</a>.Originale dan berlisensi
      <a href="home.php"><br>copyrigth 2020</a>.
    </p>
  </div>
</footer>

</html>