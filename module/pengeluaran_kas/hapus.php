<?php
include_once("function/koneksi.php");
include_once("function/helper.php");

$id_pengkas = $_GET['id_pengkas'];
mysqli_query($koneksi, "DELETE FROM peng_kas WHERE id_pengkas='$id_pengkas'") or die(mysql_error());

header("location:" . BASE_URL . "index.php?page=my_profile&module=pengeluaran_kas&action=list");
