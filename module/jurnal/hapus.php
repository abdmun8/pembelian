<?php
include_once("function/koneksi.php");
include_once("function/helper.php");

$id_jurnal = $_GET['id_jurnal'];
mysqli_query($koneksi, "DELETE FROM jurnal WHERE id_jurnal='$id_jurnal'") or die(mysql_error());

header("location:" . BASE_URL . "index.php?page=my_profile&module=jurnal&action=list");
