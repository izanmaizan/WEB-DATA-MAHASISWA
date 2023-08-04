<?php
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "akademik");
    $bagianWhere = "";

    if(isset($_POST['nimCat']) && !empty($_POST['NIM']))
    {
        $NIM = mysqli_real_escape_string($conn, $_POST['NIM']);
        $bagianWhere .= "NIM = '$NIM'";
    }

    if(isset($_POST['namaCat']) && !empty($_POST['Nama']))
    {
        $nama = mysqli_real_escape_string($conn, $_POST['Nama']);
        if(!empty($bagianWhere))
        {
            $bagianWhere .= " AND ";
        }
        $bagianWhere .= "Nama LIKE '%$nama%'";
    }
    
    if(isset($_POST['umurCat']) && !empty($_POST['Umur']))
    {
        $umur = mysqli_real_escape_string($conn, $_POST['Umur']);
        if(!empty($bagianWhere))
        {
            $bagianWhere .= " AND ";
        }
        $bagianWhere .= "Umur LIKE '%$umur%'";
    }
    
    if(isset($_POST['SEXCat']) && !empty($_POST['SEX']))
    {
        $SEX = mysqli_real_escape_string($conn, $_POST['SEX']);
        if(!empty($bagianWhere))
        {
            $bagianWhere .= " AND ";
        }
        $bagianWhere .= "SEX LIKE '%$SEX%'";
    }
    
    $query = "SELECT * FROM mahasiswa";
    if (!empty($bagianWhere)) {
        $query .= " WHERE " . $bagianWhere;
    }

    $hasil = mysqli_query($conn, $query);

    if (!$hasil) {
        die("Query error: " . mysqli_error($conn));
    }

    echo "<table border='1'>";
    echo "<tr><td>NIM</td><td>Nama Mahasiswa</td><td>Umur</td><td>Jenis Kelamin</td></tr>";
    while($data = mysqli_fetch_array($hasil, MYSQLI_ASSOC))
    {
        echo
        "<tr><td>" . $data['NIM'] . "</td><td>" . $data['Nama'] . "</td><td>" . $data['Umur'] . "</td><td>" . $data['SEX'] . "</td></tr>";
    }
    echo "</table>";
?>