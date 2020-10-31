<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php 
         $mysqli = new mysqli("localhost", "root", "", "tugaskelompok");
         
         $sql = "SELECT * FROM mahasiswa where nim='".$_GET['nim']."'";
         $result = $mysqli->query($sql);
         $row = $result->fetch_assoc()
    ?>
    <h1>Edit Data Mahasiwa</h1>
    <form action="mahasiwa_proses.php" method="post">
        <input type="hidden" name="aksi" value="edit">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim"  value="<?php echo $row['nim']; ?>"></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>
                    <select name="prodi">
                        <option value="Fisika">Fisika</option>
                        <option value="Matematika">Matematika</option>
                        <option value="T.Mesin">T.Mesin</option>
                        <option value="T.Elektro">T.Elektro</option>
                        <option value="T.Kimia">T.Kimia</option>
                        <option value="T.Material&Metalurgi">T.Material&Metalurgi</option>
                        <option value="T.Sipil">T.Sipil</option>
                        <option value="PerencanaanWilayah&Kota">PerencanaanWilayah&Kota</option>
                        <option value="T.Kapal">T.Kapal</option>
                        <option value="SistemInformasi">SistemInformasi</option>
                        <option value="Informatika">Informatika</option>
                        <option value="T.Industri">T.Industri</option>
                        <option value="T.Lingkungan">T.Lingkungan</option>
                        <option value="T.Kelautan">T.Kelautan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" cols="30" rows="10"><?php echo $row['alamat']; ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Submit">
                    <input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>