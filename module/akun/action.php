<?php
include("../../function/koneksi.php");
include("../../function/helper.php");

$nama_akun = $_POST['nama_akun'];
$jenis_akun = $_POST['jenis_akun'];
$button = $_POST['button'];

if ($button == "Add") {
	mysqli_query($koneksi, "INSERT INTO akun (nama_akun, jenis_akun) VALUES('$nama_akun', '$jenis_akun')");
} else if ($button == "Update") {
	$id_akun = $_GET['id_akun'];

	mysqli_query($koneksi, "UPDATE akun SET nama_akun='$nama_akun',
												jenis_akun='$jenis_akun'
												 WHERE id_akun='$id_akun'");
}

header("location:" . BASE_URL . "index.php?page=my_profile&module=akun&action=list");
