<?php

include_once("../../function/koneksi.php");
include_once("../../function/helper.php");

$no_penba = $_POST['no_penba'];
$tgl_penba = $_POST['tgl_penba'];
$jml_penda = $_POST['jml_penba'];
$no_po = $_POST['no_po'];
$button = $_POST['button'];

if ($button == "Add") {
    mysqli_query($koneksi, "INSERT INTO penba (no_penba, tgl_penba, jml_penba, no_po) VALUES('$no_penba', '$tgl_penba', '$jml_penba', '$no_po')");
} else if ($button == "Update") {
    $id_penba = $_GET['id_penba'];

    mysqli_query($koneksi, "UPDATE penba SET no_penba='$no_penba',
                                            tgl_penba='$tgl_penba',
                                            jml_penba='$jml_penba',
                                            no_po='$no_po'
                                             WHERE id_penba='$id_penba'");
}

header("location:" . BASE_URL . "index.php?page=my_profile&module=barang_masuk&action=list");
