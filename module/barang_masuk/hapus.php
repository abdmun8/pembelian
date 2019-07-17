<?php
include_once("function/koneksi.php");
include_once("function/helper.php");

$id_penba = $_GET['id_penba'];
mysqli_query($koneksi, "DELETE FROM penba WHERE id_penba='$id_penba'") or die(mysql_error());

header("location:" . BASE_URL . "index.php?page=my_profile&module=barang_masuk&action=list");
