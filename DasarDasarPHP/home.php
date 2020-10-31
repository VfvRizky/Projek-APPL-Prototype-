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
	<title>HOME</title>
</head>

<header>
  <style>
  	#marginn{
  		margin: 20px
  	}
  </style>

  <!--NAVBAR SECTION-->
  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="home.php">
      <img src="assets/image/LOGOweb.png" alt="logo Login">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a href="?f=home" class="navbar-item">
        Home
      </a>

      <a href="?f=absen_index" class="navbar-item">
        Absensi
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a href="?f=index" class="navbar-link">
          Data-data
        </a>

        <div class="navbar-dropdown">
          <a href="?f=mahasiwa_index" class="navbar-item">
            Mahasiswa
          </a>
          <a a href="?f=lecturer_index" class="navbar-item">
            Dosen
          </a>
          <a a href="?f=matakuliah_index" class="navbar-item">
            Matakuliah
            
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Ver. 1</strong>
          </a>
         
        </div>
      </div>
    </div>
  </div>
</nav>
  <!-- NAVBAR SECTION OVER -->
</header>

<body>
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



	<?php
	if (isset($_GET['f'])) {
		$file = $_GET['f'];
		if (file_exists("$file.php")) {
			include_once "$file.php";
		} else {
			echo 'File Tidak ada</b>';
		}
	} else {
		echo "+connected";
	}
	?>
<br>
<br>
<br>
<br>
<br>
<br>
<center><img src="assets/image/underrepair.png" width="277" alt="logo Login" ></center>
<br>
<br>
<br>
<br>
  	</div>
	
</body>
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