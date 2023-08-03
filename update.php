<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembaruan Data Mahasiswa</title>
</head>

<body>

    <?php 
    include "connect.php";

    if($connect)
    {
        $NIMH = $_POST['NIMH'];

        $NAMA = $_POST['txtnama'];
        $UMUR = $_POST['txtumur'];
        $SEX = $_POST['rdosex'];

        // Gunakan prepared statement untuk menghindari SQL injection
        $SQL = "UPDATE mahasiswa SET Nama=?, umur=?, SEX=? WHERE NIM=?";
        $stmt = mysqli_prepare($connect, $SQL);
        mysqli_stmt_bind_param($stmt, "ssss", $NAMA, $UMUR, $SEX, $NIMH);
        mysqli_stmt_execute($stmt);

        if (mysqli_affected_rows($connect) > 0) {
            echo "Mahasiswa dengan NIM = $NIMH BERHASIL DIPERBAHARUI!";
        } else {
            echo "Proses pembaharuan data GAGAL!";
            echo "<br>";
            echo "Error: " . mysqli_error($connect); // Tampilkan pesan kesalahan lebih detail
        }

        echo "<br>";
        echo "[<a href=view.php>Lihat Data Mahasiswa</a>]";
    }
    ?>

</body>

</html>
