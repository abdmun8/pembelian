<?php

$id_barang = isset($_GET['id_barang']) ? $_GET['id_barang'] : false;

$kd_barang = "";
$nm_brg = "";
$jns_brg = "";
$unit_barang = "";
$jml_brg = "";
$button = "Add";

if ($id_barang) {
    $queryBarang = mysqli_query($koneksi, "SELECT * FROM barang_sales WHERE id_barang='$id_barang'");
    $row = mysqli_fetch_assoc($queryBarang);

    $kd_barang = $row['kd_barang'];
    $nm_brg = $row['nm_brg'];
    $jns_brg = $row['jns_brg'];
    $unit_barang = $row['unit_barang'];
    $jml_brg = $row['jml_brg'];
    $button = "Update";
}

?>
<form action="<?php echo BASE_URL . "module/barang/action.php?id_barang=$id_barang" ?>" method="post">

    <div class="element-form">
        <label>Kode Barang</label>
        <span><input type="text" name="kd_barang" value="<?php echo $kd_barang; ?>" /></span>
    </div>

    <div class="element-form">
        <label>Nama Barang</label>
        <span><input type="text" name="nm_brg" value="<?php echo $nm_brg; ?>" /></span>
    </div>

    <div class="element-form">
        <label>Jenis</label>
        <span><input type="text" name="jns_brg" value="<?php echo $jns_brg; ?>" /></span>
    </div>

    <div class="element-form">
        <label>Unit Barang</label>
        <span><input type="text" name="unit_barang" value="<?php echo $unit_barang; ?>" /></span>
    </div>

    <div class="element-form">
        <label>Jumlah</label>
        <span><input type="text" name="jml_brg" value="<?php echo $jml_brg; ?>" /></span>
    </div>

    <div class="element-form">
        <span><input type="submit" name="button" value="<?php echo $button; ?>" class="submit-my-profile" /></span>
    </div>

</form>