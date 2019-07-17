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
        $this->Cell(190, 7, 'Laporan Pengeluaran Kas', 0, 1, 'C');
        $this->Ln(5);
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(24, 6, 'Tanggal', 1, 0);
        $this->Cell(85, 6, 'Keterangan', 1, 0);
        $this->Cell(27, 6, 'Jumlah', 1, 0);
        $this->Cell(28, 6, 'No Pbelian', 1, 1);

        include("../../function/koneksi.php");
        include("../../function/helper.php");

        $this->SetFont('Arial', '', 10);

        $queryPengkas = mysqli_query($koneksi, "select * from peng_kas");
        while ($rowPengkas = mysqli_fetch_array($queryPengkas)) {
            $this->Cell(24, 6, $rowPengkas['tgl_pengkas'], 1, 0);
            $this->Cell(85, 6, $rowPengkas['keterangan'], 1, 0);
            $this->Cell(27, 6, $rowPengkas['jml_pengkas'], 1, 0);
            $this->Cell(28, 6, $rowPengkas['no_pembelian'], 1, 1);
        }
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Output();
