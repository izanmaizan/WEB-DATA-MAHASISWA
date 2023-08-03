<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data Mahasiswa</title>
    <style>
    .container {
        display: flex;
        justify-content: center;

    }
    </style>
</head>

<body>
    <div class="container">

        <!-- Form untuk menginputkan data mahasiswa dengan method POST yang akan dihandle oleh insert.php -->
        <form action="insert.php" method="post">
            <table border="1" cellspacing="0" cellpadding="5">
                <tr bgcolor="silver">
                    <td colspan="3" align="center">
                        <!-- Judul form -->
                        <h3>DATA MAHASISWA</h3>
                    </td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <!-- Input field untuk mengisi NIM -->
                    <td>
                        <input type="text" name="txtnim" size="14">
                    </td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td>:</td>
                    <!-- Input field untuk mengisi NAMA -->
                    <td>
                        <input type="text" name="txtnama" size="50">
                    </td>
                </tr>
                <tr>
                    <td>UMUR</td>
                    <td>:</td>
                    <!-- Input field untuk mengisi UMUR -->
                    <td>
                        <input type="text" name="txtumur" size="5">
                    </td>
                </tr>
                <tr>
                    <td>JENIS KELAMIN</td>
                    <td>:</td>
                    <!-- Input field dengan radio button untuk memilih JENIS KELAMIN -->
                    <td>
                        <input type="radio" name="rdosex" value="PRIA">PRIA
                        <input type="radio" name="rdosex" value="WANITA">WANITA
                    </td>
                </tr>
                <tr align="center">
                    <td colspan="3">
                        <!-- Tombol untuk mengirimkan data (INSERT) dan mereset form (BATAL) -->
                        <input type="submit" value="INSERT">
                        <input type="reset" value="BATAL">

                        <!-- Link untuk melihat data mahasiswa dengan menuju ke halaman view.php -->
                        <?php echo "\t [<a href = view.php> Lihat Data Mahasiswa</a>]"; ?>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>