<?php
include_once("function/koneksi.php");
include_once("function/helper.php");

$id_barang = $_GET['id_barang'];
mysqli_query($koneksi, "DELETE FROM barang_sales WHERE id_barang='$id_barang'") or die(mysql_error());

header("location:" . BASE_URL . "index.php?page=my_profile&module=barang&action=list");
