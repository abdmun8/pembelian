<?php

include_once("../../function/koneksi.php");
include_once("../../function/helper.php");

$kd_barang = $_POST['kd_barang'];
$nm_brg = $_POST['nm_brg'];
$jns_brg = $_POST['jns_brg'];
$unit_barang = $_POST['unit_barang'];
$jml_brg = $_POST['jml_brg'];
$button = $_POST['button'];


if ($button == "Add") {
    mysqli_query($koneksi, "INSERT INTO barang_sales (kd_barang, nm_brg, jns_brg, unit_barang, jml_brg) VALUES('$kd_barang', '$nm_brg', '$jns_brg','$unit_barang', '$jml_brg')");
} else if ($button == "Update") {
    $id_barang = $_GET['id_barang'];

    mysqli_query($koneksi, "UPDATE barang_sales SET kd_barang='$kd_barang',
                                            nm_brg='$nm_brg',
                                            jns_brg='$jns_brg',
                                            unit_barang = '$unit_barang',
                                            jml_brg = '$jml_brg'
                                            WHERE id_barang='$id_barang'");
}

header("location:" . BASE_URL . "index.php?page=my_profile&module=barang&action=list");
