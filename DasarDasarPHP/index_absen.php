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
	<title>Data Absen</title>
</head>

<header>
	<style>
  	#marginn{
  		margin: 30px
  	}
  </style>
	<div id="marginn">
		<a href = "">Hari ini : 
                        <?php
                            function tanggal($format,$nilai="now"){
                                $en=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat","Jan","Feb",
                                "Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
                                $id=array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu",
                                "Jan","Feb","Maret","April","Mei","Juni","Juli","Agustus","September",
                                "Oktober","November","Desember");
                                return str_replace($en,$id,date($format,strtotime($nilai)));
                            }

                            date_default_timezone_set('Asia/Jakarta');
                            echo tanggal("D, j M Y");
                        ?>
    </a>
    <br>
    <button color=red>
    	<?php
		//memulai session
		session_start();
				
		if (isset($_SESSION["username"])) {
			echo "<a href='?f=logout'>Logout</a>";
			}
	?>
    </button>
	</div>
	
	
</header>

<body>

	<center>
		<button class="button is-large">
	    <span class="icon is-medium">
	      <i class="fab fa-github"></i>
	    </span>
	    <span><a href="?f=absen_index">Data Absensi</a></span>
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
		echo "Selamat Datang diAbsensi Kelas Proweb IF
		Silahkan Absen Sebelum Terlambat";
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
    	<font color="#D2691E">Masih tahap pengembangan</font>
      
      <br>
       by <a href="home.php"><font color="#00FFFF">Kelompok 9</font></a>. Sebuah Website Sedersahana
      <a href="home.php"><font color="#00FFFF">Kami </font></a>.Originale dan berlisensi
      <a href="home.php"><br>
      <font color="#00FFFF"> copyrigth 2020 </font></a>.
    </p>
  </div>
</footer>
</html>