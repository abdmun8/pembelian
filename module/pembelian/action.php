<?php
include("../../function/koneksi.php");
include("../../function/helper.php");

$nopenba = $_POST['no_penba'];
$tgl = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];
$button = $_POST['button'];

if ($button == "Add") {
	mysqli_query($koneksi, "INSERT INTO pembelian (no_penba, tanggal, jumlah) VALUES('$nopenba', '$tgl', '$jumlah')");
} else if ($button == "Update") {
	$id_beli = $_GET['id_beli'];

	mysqli_query($koneksi, "UPDATE pembelian SET no_penba='$nopenba',
												tanggal='$tgl',
												jumlah='$jumlah' WHERE id_beli='$id_beli'");
}

header("location:" . BASE_URL . "index.php?page=my_profile&module=pembelian&action=list");
