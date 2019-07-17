<?php
include("../../function/koneksi.php");
include("../../function/helper.php");

$tgl_pengkas = $_POST['tgl_pengkas'];
$keterangan = $_POST['keterangan'];
$jml_pengkas = $_POST['jml_pengkas'];
$no_pembelian = $_POST['no_pembelian'];
$button = $_POST['button'];

if ($button == "Add") {
	mysqli_query($koneksi, "INSERT INTO peng_kas (tgl_pengkas, keterangan, jml_pengkas, no_pembelian) VALUES('$tgl_pengkas', '$keterangan', '$jml_pengkas', '$no_pembelian')");
} else if ($button == "Update") {
	$id_pengkas = $_GET['id_pengkas'];

	mysqli_query($koneksi, "UPDATE peng_kas SET tgl_pengkas='$tgl_pengkas',
												keterangan='$keterangan',
												jml_pengkas='$jml_pengkas',
												no_pembelian='$no_pembelian'
												WHERE id_pengkas='$id_pengkas'");
}

header("location:" . BASE_URL . "index.php?page=my_profile&module=pengeluaran_kas&action=list");
