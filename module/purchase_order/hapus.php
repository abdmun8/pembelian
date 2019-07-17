<?php
include_once("function/koneksi.php");
include_once("function/helper.php");

$id_po = $_GET['id_po'];
mysqli_query($koneksi, "DELETE FROM purchase_order WHERE id_po='$id_po'") or die(mysql_error());

header("location:" . BASE_URL . "index.php?page=my_profile&module=purchase_order&action=list");
