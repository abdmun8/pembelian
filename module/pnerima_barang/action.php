<?php
include("../../function/koneksi.php");
include("../../function/helper.php");

$no_po = $_POST['no_po'];
$tgl_pnerima = $_POST['tgl_pnerima'];
$jml_barang = $_POST['jml_barang'];
$keterangan = $_POST['keterangan'];
$button = $_POST['button'];

if ($button == "Add") {
	mysqli_query($koneksi, "INSERT INTO pnerima_barang (no_po,tgl_pnerima,jml_barang,keterangan) VALUES('$no_po', '$tgl_pnerima', '$jml_barang','$keterangan')");
} else if ($button == "Update") {
	$id_product = $_GET['id_product'];

	mysqli_query($koneksi, "UPDATE kota SET product='$no_po',
												stok='$tgl_pnerima',
												quantity='$jml_barang',
												harga='$keterangan',
												WHERE id_pnerima_brg='$id_pnerima_brg'");
}

header("location:" . BASE_URL . "index.php?page=my_profile&module=pnerima_barang&action=list");
