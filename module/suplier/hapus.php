<?php
include_once("function/koneksi.php");
include_once("function/helper.php");

$id_suplier = $_GET['id_suplier'];
mysqli_query($koneksi, "DELETE FROM suplier WHERE id_suplier='$id_suplier'") or die(mysql_error());

header("location:" . BASE_URL . "index.php?page=my_profile&module=suplier&action=list");
