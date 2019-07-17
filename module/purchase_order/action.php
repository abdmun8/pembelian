<?php
include("../../function/koneksi.php");
include("../../function/helper.php");

$no_po = $_POST['no_po'];
$tgl_po = $_POST['tgl_po'];
$no_pr = $_POST['no_pr'];
$id_suplier = $_POST['id_suplier'];
$expecting_date = $_POST['expecting_date'];
$button = $_POST['button'];

if ($button == "Add") {
	mysqli_query($koneksi, "INSERT INTO purchase_order (no_po, tgl_po, no_pr, id_suplier, expecting_date) VALUES('$no_po', '$tgl_po', '$no_pr','$id_suplier', '$expecting_date')");
} else if ($button == "Update") {
	$id_po = $_GET['id_po'];

	mysqli_query($koneksi, "UPDATE purchase_order SET no_po='$no_po',
												tgl_po='$tgl_po',
												no_pr='$no_pr',
												id_suplier='$id_suplier',
												expecting_date='$expecting_date'
												 WHERE id_po='$id_po'");
}

header("location:" . BASE_URL . "index.php?page=my_profile&module=purchase_order&action=list");
