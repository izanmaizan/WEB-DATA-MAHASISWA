<?php
    require_once ("connect.php");
    $NIM = $_POST['NIM'];
    $query = "SELECT * FROM mahasiswa WHERE NIM = '$NIM'";
    $sql = mysqli_query($connect, $query);
    $data = array();
    while ($row = mysqli_fetch_array($sql))
    {
        array_push($data, $row);
    }
    $judul = "";
    $header = array(array("label" => "NIM", "length" =>25, "align" => "L"), array("label" => "Nama Mahasiswa", "length" => 40, "align" => "L"), array("label" => "UMUR", "length" =>15, "align" => "L"), array("label" => "JENIS KELAMIN", "length" =>30, "align" => "L"));

    require_once ("fpdf/fpdf.php");
    $pdf = new FPDF();
    $pdf -> AddPage();
    $pdf -> SetFont("Arial", 'B', 0);
    $pdf -> Cell(0, 8, $judul, '0', 1, 'C');
    $pdf -> SetFont('Arial', '', 10);
    $pdf -> SetFillColor(255, 0, 0);
    $pdf -> SetTextColor(225);
    $pdf -> SetDrawColor(128, 0, 0);
    foreach ($header as $kolom)
    {
        $pdf -> Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
    }
    $pdf -> Ln();
    $pdf -> SetFont('');
    $pdf -> SetFillColor(244, 255, 255);
    $pdf -> SetTextColor(0);
    $fill = false;
    foreach($data as $baris)
    {
        $i = 0;
        foreach($baris as $cell)
        {
            $pdf -> Cell($header[$i]['length'], 5, $cell, 1, '0', $kolom['align'], $fill);
            $i++;
        }
        $fill = !$fill;
        $pdf -> Ln();
    }
    $pdf -> Output();

?>