<?php
    require_once ("connect.php");
    $NIM = $_POST['txtnim'];
    $query = "SELECT * FROM mahasiswa WHERE NIM = '$NIM'";
    $sql = mysqli_query($connect, $query);
    $data = array();
    while ($row = mysqli_fetch_array($sql))
    {
        array_push($data, $row);
    }
    $judul = "";
    $header = array(array("label" => "NIM", "length" =>25, "align" => "L"), array("label" => "Nama Mahasiswa", "length" => 40, "align" => "L"), array("label" => "UMUR", "length" =>15, "align" => "L"), array("label" => "JENIS KELAMIN", "length" =>30, "align" => "L"));

    require ("fpdf16/fpdf.php");
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
    $pdf->Ln();
    $pdf->SetFillColor(244,235,255);
    $pdf->SettextColor(0);
    $pdf->SetFont('arial','','10');
    $fill =false;
    foreach ($Data as $Baris){
        $i= 0;
        foreach ($Baris as $Cell){
            $pdf->Cell ($Header[$i]['length'], 7, $Cell, 2, '0', $Kolom['align'], $fill);
            $i++;
        }
        $fill = !$fill;
        $pdf->Ln();
    }
    $pdf->Output();
?>