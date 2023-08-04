    <?php
    require('fpdf/fpdf.php');

    // Extend class to create a custom header and footer
    class PDF extends FPDF
    {
        function Header()
        {
            $this->SetFont('Arial', 'B', 12);
            $this->Cell(0, 10, 'Judul Dokumen', 0, 1, 'C');
            $this->Ln(10);
        }

        function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0, 10, 'Halaman ' . $this->PageNo(), 0, 0, 'C');
        }
    }

    // Create a PDF object
    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 12);

    // Isi dari dokumen
    $loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse accumsan eros vel eleifend euismod. Cras ut massa eget risus rhoncus dignissim. Integer hendrerit euismod ante, a efficitur arcu venenatis vel. Sed malesuada, felis vitae lacinia hendrerit, felis dolor tempus metus, nec scelerisque urna augue quis felis. Suspendisse eget facilisis eros. Nunc varius ante nunc, sit amet sollicitudin lorem scelerisque eget. Nam quis interdum tellus. Aenean et sagittis nisi. Fusce eget vestibulum nulla. Maecenas fringilla, augue eget posuere bibendum, lectus mi fringilla ex, id vestibulum justo erat nec metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla facilisi. Nullam iaculis felis eget justo malesuada, at sagittis felis accumsan. Fusce varius justo vel odio auctor tempus. Nulla facilisi.";

    $pdf->MultiCell(0, 10, $loremIpsum, 0, 'J');

    // Output PDF ke browser
    $pdf->Output();