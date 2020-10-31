<?php
//Tempat untuk mengeksekusi semua event baik itu input data, edit data dan hapus data.

//membuat objek database mysql dengan format (link_server, username_mysql, password_mysql, database_mysql)
$mysqli = new mysqli("localhost", "root", "", "tugaskelompok");

//setiap request yang datang akan dicek methodnya apakah post atau get. 
//$_POST['aksi'] valuenya diperoleh dari tag <input type="hidden" value=""> karena kl metod post, data yang dikirim dr suatu form, tdk ditampilkan di url/link.
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['aksi'] == "input") {
    $kode_mata_kuliah  = $_POST["kode_mata_kuliah"];
    $nama_mata_kuliah = $_POST["nama_mata_kuliah"];
    $sks = $_POST["sks"];
    $semester = $_POST["semester"];
	
	//eksekusi query mysql dalam hal ini input data ke tabel
    $query = "INSERT INTO matakuliah (kode_mata_kuliah, nama_mata_kuliah, sks, semester) VALUES ('$kode_mata_kuliah ', '$nama_mata_kuliah', '$sks', '$semester')";
    $result = $mysqli->query($query);
} else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['aksi'] == "edit") {
    $kode_mata_kuliah  = $_POST["kode_mata_kuliah"];
    $nama_mata_kuliah = $_POST["nama_mata_kuliah"];
    $sks = $_POST["sks"];
    $semester = $_POST["semester"];

    $query = "UPDATE matakuliah SET kode_mata_kuliah='$kode_mata_kuliah', nama_mata_kuliah='$nama_mata_kuliah', sks=' $sks', semester='$semester'
        WHERE kode_mata_kuliah='$kode_mata_kuliah'";
    $result = $mysqli->query($query);
} else if ($_GET['aksi'] == "hapus") {
    $query = "DELETE FROM matakuliah WHERE kode_mata_kuliah ='" . $_GET['kode_mata_kuliah'] . "'";

    $result = $mysqli->query($query);
} 
header("Location: index.php?f=matakuliah_index");
$mysqli->close();
