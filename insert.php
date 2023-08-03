<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data Mahasiswa</title>
</head>

<body>
    <?php
        // Menginclude file "koneksi.php" yang berisi konfigurasi koneksi ke database
        include "connect.php";

        // Mengecek apakah koneksi ke database berhasil
        if($connect)
        {
            // Mengambil nilai dari inputan form dengan menggunakan metode POST
            $NIM = $_POST['txtnim'];
            $NAMA = $_POST['txtnama'];
            $UMUR = $_POST['txtumur'];
            $SEX = $_POST['rdosex'];

            // Membuat perintah SQL untuk melakukan INSERT data ke tabel Mahasiswa
            $SQL = "INSERT INTO  Mahasiswa Values ('$NIM','$NAMA','$UMUR','$SEX')";

            // Menjalankan perintah SQL dengan fungsi mysqli_query() dan memeriksa apakah berhasil
            mysqli_query($connect, $SQL) or die ("Proses insert data GAGAL! <br> [<a href=view.php>Lihat Data Siswa</a>]");

            // Jika perintah SQL berhasil dijalankan, tampilkan pesan sukses
            echo "Proses insert data BERHASIL!";
            echo "<br>";
            echo "[<a href=view.php>Lihat Data Siswa</a>]";
        }
    ?>
</body>

</html>