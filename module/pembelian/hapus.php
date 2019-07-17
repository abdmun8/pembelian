<?php
include_once("function/koneksi.php");
include_once("function/helper.php");

$id_beli = $_GET['id_beli'];
mysqli_query($koneksi, "DELETE FROM pembelian WHERE id_beli='$id_beli'") or die(mysql_error());

header("location:" . BASE_URL . "index.php?page=my_profile&module=pembelian&action=list");
