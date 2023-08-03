<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan Data Siswa</title>

    <script language="JavaScript">
    function konfirmasi(NIM) {
        tanya = confirm('Anda yakin ingin menghapus mahasiswa dengan NIM ' + '?');
        if (tanya == true) return true;
        else return false;
    }
    </script>

</head>

<body>
    <?php 
include "connect.php";

$perintah_sql = "SELECT * FROM mahasiswa ORDER BY NIM";

mysqli_select_db($connect, $nama_db) or  ("Gagal memilih database!");
$hasil_query = mysqli_query($connect, $perintah_sql) or die ("Gagal memproses query!");

$jumlah_data = mysqli_num_rows ($hasil_query);

echo "<h3>DATA MAHASISWA</h3>";

echo "<table border=1 cellspacing=2 cellpadding=0>";
echo "<tr bgcolor=silver align=center>";
echo "<td>NIM</td>";
echo "<td>NAMA MAHASISWA</td>";
echo "<td>UMUR</td>";
echo "<td>SEX</td>";
echo "<td colspan=2>AKSI</td>";
echo "</tr>";

while ($row = mysqli_fetch_array($hasil_query))
{
    echo "<tr>";
    echo "<td>$row[0]</td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td>";
    echo "<td>
        <a href=\"edit.php?NIM=$row[0]\">Edit</a>
    </td>";
    echo "<td><a href=\"delete.php?NIM=$row[0]\" onclick=\"return konfirmasi('".$row[0] ."')\">Hapus</a>";
    echo "</tr>";
}
echo "</table>";
echo "jumlah data : $jumlah_data \t [<a href=add.php?>Tambah Data</a>]";
    ?>

</body>

</html>