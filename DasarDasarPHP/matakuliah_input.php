<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Input Data matakuliah</h1>
    <form action="matakuliah_proses.php" method="post">
    <input type="hidden" name="aksi" value="input">
        <table>
            <tr>
                <td>nama_mata_kuliah</td>
                <td>:</td>
                <td><input type="text" name="nama_mata_kuliah"></td>
            </tr>
            <tr>
                <td>kode_mata_kuliah</td>
                <td>:</td>
                <td><input type="text" name="kode_mata_kuliah"></td>
            </tr>
            <tr>
                <td>sks</td>
                <td>:</td>
                <td>
                    <select name="sks">
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>semester</td>
                <td>:</td>
                <td>
                    <select name="semester">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </td>
            </tr>
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