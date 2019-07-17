<?php
require('../fpdf.php');

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('logo1.png', 10, 6, 30);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Membuat string
        $this->Cell(190, 7, 'PT. MANDIRI PANCA PRIMA', 0, 1, 'C');
        $this->SetFont('Arial', 'B', 9);
        $this->Cell(190, 7, 'Kawasan Industri Jababeka II Jl. Industri Selatan 8 Blok EE No, Pasirsari,', 0, 1, 'C');
        $this->SetFont('Arial', 'B', 9);
        $this->Cell(190, 7, 'Cikarang Sel., Bekasi, Jawa Barat 17550.', 0, 1, 'C');
        $this->Ln(15);
        $this->SetFont('Arial', 'B', 12,);
        $this->Cell(190, 7, 'Purchase Order', 0, 1, 'C');
        $this->Ln(5);
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(8, 6, 'No.', 1, 0);
        $this->Cell(30, 6, 'No. PO', 1, 0);
        $this->Cell(30, 6, 'Tanggal PO', 1, 0);
        $this->Cell(30, 6, 'No. PR', 1, 0);
        $this->Cell(30, 6, 'ID Suplier', 1, 0);
        $this->Cell(30, 6, 'Exp. Date', 1, 1);

        include("../../function/koneksi.php");
        include("../../function/helper.php");

        $this->SetFont('Arial', '', 10);

        $queryPo = mysqli_query($koneksi, "select * from purchase_order");
        while ($rowPo = mysqli_fetch_array($queryPo)) {
            $this->Cell(8, 6, $rowPo['id_po'], 1, 0);
            $this->Cell(30, 6, $rowPo['no_po'], 1, 0);
            $this->Cell(30, 6, $rowPo['tgl_po'], 1, 0);
            $this->Cell(30, 6, $rowPo['no_pr'], 1, 0);
            $this->Cell(30, 6, $rowPo['id_suplier'], 1, 0);
            $this->Cell(30, 6, $rowPo['expecting_date'], 1, 1);
        }
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Output();
