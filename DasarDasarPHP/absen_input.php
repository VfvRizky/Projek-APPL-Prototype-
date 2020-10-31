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
    <title>Isi Absen</title>
</head>
<body>

    <h1>Input Data Absen</h1>
    <form action="absen_proses.php" method="post">
    <input type="hidden" name="aksi" value="input">
        <table>
            <tr>
                <td>nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>nim</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>keterangan</td>
                <td>:</td>
                <td><input type="radio" name="keterangan" value="hadir">hadir
                    <input type="radio" name="keterangan" value="izin">izin
                    <input type="radio" name="keterangan" value="alpha">alpha
                </td>
            </tr>
            <tr>
                <td>tanggal</td>
                <td>:</td>
                <td>
                    <input type="date" name="tanggal">
                </td>
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