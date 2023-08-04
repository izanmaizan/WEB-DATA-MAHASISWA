<?php
if (isset($_POST['txtnim'])) {
    require_once("connect.php");
    $NIM = $_POST['txtnim'];
    $query = "SELECT * FROM mahasiswa WHERE NIM = '$NIM'";
    $sql = mysqli_query($connect, $query);
    $data = array();
    while ($row = mysqli_fetch_array($sql)) {
        array_push($data, $row);
    }

    $judul = "Laporan Data Mahasiswa";

    require_once("/xampp/htdocs/WEB-DATA-MAHASISWA-1/fpdf/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial", 'B', 16);
    $pdf->Cell(0, 10, $judul, '0', 1, 'C');
    $pdf->SetFont('Arial', '', 10);
    $pdf->SetFillColor(255, 0, 0);
    $pdf->SetTextColor(255);
    $pdf->SetDrawColor(128, 0, 0);

    $header = array(
        array("label" => "NIM", "length" => 25, "align" => "L"),
        array("label" => "Nama Mahasiswa", "length" => 40, "align" => "L"),
        array("label" => "Umur", "length" => 15, "align" => "L"),
        array("label" => "Jenis Kelamin", "length" => 30, "align" => "L")
    );

    foreach ($header as $kolom) {
        $pdf->Cell($kolom['length'], 7, $kolom['label'], 1, 0, $kolom['align'], true);
    }
    $pdf->Ln();

    $pdf->SetFont('');
    $pdf->SetFillColor(244, 255, 255);
    $pdf->SetTextColor(0);

    $fill = false;
    foreach ($data as $baris) {
        $i = 0;
        foreach ($baris as $cell) {
            $pdf->Cell($header[$i]['length'], 7, $cell, 1, 0, $header[$i]['align'], $fill);
            $i++;
        }
        $fill = !$fill;
        $pdf->Ln();
    }

    $pdf->Output();
} else {
    echo "Tidak ada NIM yang diberikan.";
}
?>