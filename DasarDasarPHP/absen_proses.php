<?php
//Tempat untuk mengeksekusi semua event baik itu input data, edit data dan hapus data.

//membuat objek database mysql dengan format (link_server, username_mysql, password_mysql, database_mysql)
$mysqli = new mysqli("localhost", "root", "", "tugaskelompok");


//setiap request yang datang akan dicek methodnya apakah post atau get. 
//$_POST['aksi'] valuenya diperoleh dari tag <input type="hidden" value=""> karena kl metod post, data yang dikirim dr suatu form, tdk ditampilkan di url/link.
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['aksi'] == "input") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $keterangan = $_POST["keterangan"];
    $tanggal = $_POST["tanggal"];
	
	//eksekusi query mysql dalam hal ini input data ke tabel
    $query = "INSERT INTO absen (nim, nama, keterangan, tanggal) VALUES ('$nim', '$nama', '$keterangan', '$tanggal')";
    $result = $mysqli->query($query);
} else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['aksi'] == "edit") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $keterangan = $_POST["keterangan"];
    $tanggal = $_POST["tanggal"];

    $query = "UPDATE absen SET nim='$nim', nama='$nama', keterangan=' $keterangan', tanggal='$tanggal' WHERE nim='$nim'";
    $result = $mysqli->query($query);
} else if ($_GET['aksi'] == "hapus") {
    $query = "DELETE FROM absen WHERE nim='" . $_GET['nim'] . "'";

    $result = $mysqli->query($query);
} 
header("Location: index_absen.php?f=absen_index");
$mysqli->close();
