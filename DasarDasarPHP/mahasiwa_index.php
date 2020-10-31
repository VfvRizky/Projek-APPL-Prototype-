<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Data mahasiwa</h1>
    <button>
        <a href="?f=mahasiwa_input" class="button is-info is-active">Input Data Mahasiswa 
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
        $sql = "SELECT * FROM mahasiswa";
        $result = $mysqli->query($sql);
        echo "<table border=1 width=555px>
            <tr>
                <th align=center>NIM</th>
                <th align=center>Nama</th>
                <th align=center>Prodi</th>
                <th align=center>Alamat</th>
                <th align=center>Aksi</th>
            </tr>";
		//mengecek apakah tabel ada datanya atau tidak dengan kode num_rows
        if ($result->num_rows > 0) {
            // menampilkan hasil query data berdasarkan baris. nim, nama, prodi dll merujuk ke nama kolom karena kita pakai method fetch_assoc
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td align=center>" . $row["nim"] . "</td>
                    <td align=center>" . $row["nama"] . "</td>
                    <td align=center>" . $row["prodi"] . "</td>
                    <td align=center>" . $row["alamat"] . "</td>
                    <td align=center><a href='?f=mahasiwa_edit&&nim=" . $row["nim"] . "'>Edit</a>||<a href='mahasiwa_proses.php?aksi=hapus&&nim=" . $row["nim"] . "'>Hapus</a>
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