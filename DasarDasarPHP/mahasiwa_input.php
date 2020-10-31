<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Input Data Mahasiswa</h1>
    <form action="mahasiwa_proses.php" method="post">
    <input type="hidden" name="aksi" value="input">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
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
                <td><textarea name="alamat" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" value="Submit" class="button is-success">
                        <span class="icon is-small">
                          <i class="fas fa-check"></i>
                        </span>
                        <span>Submit</span>
                  </button>
                  <button type="reset" value="Reset" class="button is-danger is-outlined">
                        <span>Reset</span>
                        <span class="icon is-small">
                          <i class="fas fa-times"></i>
                  </button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>