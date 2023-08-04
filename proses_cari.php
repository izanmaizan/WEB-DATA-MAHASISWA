<?php

    $connect = mysqli_connect("localhost", "root", "");
    mysqli_select_db($connect, "akademik");
    $bagianWhere = "";
    if(isset($_POST['nimCat']))
    {
        $NIM = $_POST['NIM'];
        if(empty($bagianWhere))
        {
            $bagianWhere .= "NIM = '$NIM'";
        }
    }

    if(isset($_POST['namaCat']))
    {
        $nama = $_POST['Nama'];
        if(empty($bagianWhere))
        {
            $bagianWhere .= " AND Nama LIKE '%$nama%'";
        }
        else
        {
            $bagianWhere .= " AND Nama LIKE '%$nama%'";
        }
    }
    
    if(isset($_POST['umurCat']))
    {
        $umur = $_POST['Umur'];
        if(empty($bagianWhere))
        {
            $bagianWhere .= " AND Umur LIKE '%$umur%'";
        }
        else
        {
            $bagianWhere .= " AND Umur LIKE '%$umur%'";
        }
    }
    
    if(isset($_POST['SEXCat']))
    {
        $SEX = $_POST['SEX'];
        if(empty($bagianWhere))
        {
            $bagianWhere .= " AND SEX LIKE '%$SEX%'";
        }
        else
        {
            $bagianWhere .= " AND SEX LIKE '%$SEX%'";
        }
    }
    
    
    $query = "SELECT * FROM mahasiswa WHERE " . $bagianWhere;
    $hasil = mysqli_query($connect, $query);
    echo "<table border='1'>";
    echo "<tr><td>NIM</td><td>Nama Mahasiswa</td><td>Umur</td><td>Jenis Kelamin</td></tr>";
    while($data = mysqli_fetch_array($hasil, MYSQLI_ASSOC))
    {
        echo
        "<tr><td>NIM</td><td>" . $data['Nama'] . "</td><td>" . $data['Umur'] . "</td><td>" . $data['SEX'] . "</td></td>";
    }
    echo "</table>";
?>