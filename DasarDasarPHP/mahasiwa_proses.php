<?php
//Tempat untuk mengeksekusi semua event baik itu input data, edit data dan hapus data.

//membuat objek database mysql dengan format (link_server, username_mysql, password_mysql, database_mysql)
$mysqli = new mysqli("localhost", "root", "", "tugaskelompok");

//setiap request yang datang akan dicek methodnya apakah post atau get. 
//$_POST['aksi'] valuenya diperoleh dari tag <input type="hidden" value=""> karena kl metod post, data yang dikirim dr suatu form, tdk ditampilkan di url/link.
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['aksi'] == "input") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];
    $alamat = $_POST["alamat"];
	
	//eksekusi query mysql dalam hal ini input data ke tabel
    $query = "INSERT INTO mahasiswa (nim, nama, prodi, alamat) VALUES ('$nim', '$nama', '$prodi', '$alamat')";
    $result = $mysqli->query($query);
} else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['aksi'] == "edit") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];
    $alamat = $_POST["alamat"];

    $query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi=' $prodi', alamat='$alamat'
        WHERE nim='$nim'";
    $result = $mysqli->query($query);
} else if ($_GET['aksi'] == "hapus") {
    $query = "DELETE FROM mahasiswa WHERE nim='" . $_GET['nim'] . "'";

    $result = $mysqli->query($query);
} 
header("Location: index.php?f=mahasiwa_index");
$mysqli->close();
