<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAPUS DATA MAHASISWA</title>
</head>

<body>
    <?php 
        include "connect.php";

        if($connect)
        {
            $NIM = $_GET["NIM"];
            $SQL = "DELETE FROM mahasiswa WHERE NIM = '$NIM'";
            $hasil_query = mysqli_query($connect, $SQL) or die("Proses hapus data GAGAL! <br> [<a href=view.php>Lihat Data Mahasiswa</a>]");
            if($hasil_query)
            echo "Mahasiswa dengan NIM = $NIM BERHASIL DIHAPUS";

            echo "<br>";
            echo "[<a href=view.php>Lihat Data Mahasiswa</a>]";
        }
    ?>
</body>

</html>
