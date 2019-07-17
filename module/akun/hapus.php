<?php
include_once("function/koneksi.php");
include_once("function/helper.php");

$id_akun = $_GET['id_akun'];
mysqli_query($koneksi, "DELETE FROM akun WHERE id_akun='$id_akun'") or die(mysql_error());

header("location:" . BASE_URL . "index.php?page=my_profile&module=akun&action=list");
