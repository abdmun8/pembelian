<?php
include("../../function/koneksi.php");
include("../../function/helper.php");

$tanggal_jurnal = $_POST['tanggal_jurnal'];
$no_beli = $_POST['no_beli'];
$no_akun = $_POST['no_akun'];
$debet = $_POST['debet'];
$kredit = $_POST['kredit'];
$referensi = $_POST['referensi'];
$button = $_POST['button'];

if ($button == "Add") {
	mysqli_query($koneksi, "INSERT INTO jurnal (tanggal_jurnal, no_beli, no_akun, debet, kredit, referensi) VALUES('$tanggal_jurnal', '$no_beli', '$no_akun', '$debet','$kredit', '$referensi')");
} else if ($button == "Update") {
	$id_jurnal = $_GET['id_jurnal'];

	mysqli_query($koneksi, "UPDATE jurnal SET tanggal_jurnal='$tanggal_jurnal',
												no_beli='$no_beli',
												no_akun='$no_akun',
												debet='$debet',
												kredit='$kredit',
												referensi='$referensi'
												WHERE id_jurnal='$id_jurnal'");
}

header("location:" . BASE_URL . "index.php?page=my_profile&module=jurnal&action=list");
