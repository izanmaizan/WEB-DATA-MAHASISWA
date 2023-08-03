<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT SISWA</title>
</head>
<?php 
    include "connect.php";
    $NIM = $_GET['NIM'];
    $perintah_sql = "SELECT * FROM mahasiswa WHERE NIM = ?";
    mysqli_select_db($connect, $nama_db) or die("Gagal memilih database!");
    $stmt = mysqli_prepare($connect, $perintah_sql);
    mysqli_stmt_bind_param($stmt, "s", $NIM);
    mysqli_stmt_execute($stmt);
    $hasil_query = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_array($hasil_query);
    $NIM = $row['NIM'];
    $NAMA = $row['Nama'];
    $UMUR = $row['Umur'];
    $SEX = $row['SEX'];
    if ($SEX == "PRIA")
    {
        $P = " checked";
        $W = "";
    }
    else
    {
        $P = "";
        $W = " checked";
    }
?>

<form action="update.php" method="post">
    <table border="1" cellpadding="5" cellspacing="0" align="center">
        <tr bgcolor="silver">
            <td colspan="3" align="center">
                <h3>DATA SISWA</h3>
            </td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td>
                <input type="text" name="txtnim" size="14" value="<?php echo "$NIM"; ?>" disabled>
                <input type="hidden" name="NIMH" value="<?php echo "$NIM"; ?>">
            </td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td>:</td>
            <td>
                <input type="text" name="txtnama" size="50" value="<?php echo "$NAMA"; ?>">
            </td>
        </tr>
        <tr>
            <td>UMUR</td>
            <td>:</td>
            <td>
                <input type="text" name="txtumur" size="50" value="<?php echo "$UMUR"; ?>">
            </td>
        </tr>
        <tr>
            <td>SEX</td>
            <td>:</td>
            <td>
                <input type="radio" name="rdosex" value="PRIA" <?php echo "$P"; ?>>PRIA
                <input type="radio" name="rdosex" value="WANITA" <?php echo "$W"; ?>>WANITA
            </td>
        </tr>
        <tr align="center">
            <td colspan=3>
                <input type="submit" value="UPDATE">
                [<a href=view.php>Lihat Data Mahasiswa</a>]
            </td>
        </tr>
    </table>
</form>

<body>

</body>

</html>
