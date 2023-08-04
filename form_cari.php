<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Data Mahasiswa</title>
</head>

<body>
    <h1>Cari Data Mahasiswa</h1>

    <p>Pilih kategori pencarian</p>

    <form action="proses_cari.php" method="post">
        <table>
            <tr>
                <td><input type="checkbox" name="nimCat" value="1">NIM</td>
                <td><input type="text" name="NIM" id=""></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="namaCat" id="" value="1">Nama Mahahasiswa</td>
                <td><input type="text" name="Nama" id=""></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="umurCat" id="" value="1">Umur</td>
                <td><input type="text" name="Umur" id=""></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="SEXCat" id="SEXCat" value="1">Jenis Kelamin</td>
                <td><input type="radio" name="SEX" id="" value="PRIA">PRIA
                <td><input type="radio" name="SEX" id="" value="WANITA">WANITA
                </td>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit" name="submit"></td>
            </tr>
            </tr>
        </table>
    </form>
</body>

</html>