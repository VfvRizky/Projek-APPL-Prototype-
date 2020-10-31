<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Data Matakuliah</h1>
    <button>
        <a href="?f=matakuliah_input" class="button is-info is-active">Input Data Matakuliah 
        </a>
    </button>
    <br>
    <br>

    <?php
	// Cek sudah login atau belum, kalau belum akan diredirect ke page logi. Penjelasan kode ini ada di file index.php
    if (isset($_SESSION["username"])) {
		//membuat objek mysql
        $mysqli = new mysqli("localhost", "root", "", "tugaskelompok");

        //mengecek apakah sudah terkoneksi ke database mysql atau belum
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

		//menjalankan query mysql
        $sql = "SELECT * FROM matakuliah";
        $result = $mysqli->query($sql);
        echo "<table border=1 width=666px>
            <tr>
                <th align=center>kode_mata_kuliah </th>
                <th align=center>nama_mata_kuliah</th>
                <th align=center>sks</th>
                <th align=center>semester</th>
                <th align=center>Aksi</th>
            </tr>";
		//mengecek apakah tabel ada datanya atau tidak dengan kode num_rows
        if ($result->num_rows > 0) {
            // menampilkan hasil query data berdasarkan baris. nim, nama, prodi dll merujuk ke nama kolom karena kita pakai method fetch_assoc
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td align=center>" . $row["kode_mata_kuliah"] . "</td>
                    <td align=center>" . $row["nama_mata_kuliah"] . "</td>
                    <td align=center>" . $row["sks"] . "</td>
                    <td align=center>" . $row["semester"] . "</td>
                    <td align=center><a href='?f=matakuliah_edit&&kode_mata_kuliah=" . $row["kode_mata_kuliah"] . "'>Edit</a>||<a href='matakuliah_proses.php?aksi=hapus&&kode_mata_kuliah=" . $row["kode_mata_kuliah"] . "'>Hapus</a>
                  </tr>";
            }
        } else {
            echo "0 results";
        }
        echo "</table>";
        $mysqli->close();
    }else{
        header("Location: login.php");
    }
    ?>
</body>

</html>