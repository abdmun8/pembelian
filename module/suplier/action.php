<?php
include("../../function/koneksi.php");
include("../../function/helper.php");

$nama_suplier = $_POST['nama_suplier'];
$alamat = $_POST['alamat'];
$button = $_POST['button'];

if ($button == "Add") {
	mysqli_query($koneksi, "INSERT INTO suplier (nama_suplier, alamat) VALUES('$nama_suplier', '$alamat')");
} else if ($button == "Update") {
	$id_suplier = $_GET['id_suplier'];

	mysqli_query($koneksi, "UPDATE suplier SET nama_suplier='$nama_suplier',
												alamat='$alamat'
											 WHERE id_suplier='$id_suplier'");
}

header("location:" . BASE_URL . "index.php?page=my_profile&module=suplier&action=list");
