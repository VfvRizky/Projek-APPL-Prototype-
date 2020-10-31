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

    <button>
        <a href="?f=absen_input" class="button is-info is-active">Input Absen 
        </a>
    </button>
</header>
<body>

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
        $sql = "SELECT * FROM absen";
        $result = $mysqli->query($sql);
        echo "<table border=2 width=555px>
            <tr>
                <th align=center>NIM</th>
                <th align=center>Nama</th>
                <th align=center>Keterangan</th>
                <th align=center>Tanggal</th>
                 
            </tr>";
		//mengecek apakah tabel ada datanya atau tidak dengan kode num_rows
        if ($result->num_rows > 0) {
            // menampilkan hasil query data berdasarkan baris. nip, nama, prodi dll merujuk ke nama kolom karena kita pakai method fetch_assoc
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td align=center>" . $row["nim"] . "</td>
                    <td align=center>" . $row["nama"] . "</td>
                    <td align=center>" . $row["keterangan"] . "</td>
                    <td align=center>" . $row["tanggal"] . "</td>
                    
                    </tr>";
            }
        } else {
            echo "0 results";
        }
        echo "</table>";
        $mysqli->close();
    }else{
        header("Location: login_absen.php");
    }
    ?>
</body>

</html>