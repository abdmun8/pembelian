<?php

$id_penba = isset($_GET['id_penba']) ? $_GET['id_penba'] : false;

$no_penba = "";
$tgl_penba = "";
$jml_penba = "";
$no_po = "";
$button = "Add";

if ($id_penba) {
    $queryPenba = mysqli_query($koneksi, "SELECT * FROM penba WHERE id_penba='$id_penba'");
    $rowPenba = mysqli_fetch_assoc($queryPenba);

    $no_penba = $rowPenba['no_penba'];
    $tgl_penba = $rowPenba['tgl_penba'];
    $jml_penba = $rowPenba['jml_penba'];
    $no_po = $rowPenba['no_po'];
    $button = "Update";
}

?>

<form action="<?php echo BASE_URL . "module/barang_masuk/action.php?id_penba=$id_penba" ?>" method="post">

    <div class="element-form">
        <label>No Penba</label>
        <span><input type="text" name="no_penba" value="<?php echo $no_penba; ?>" /></span>
    </div>

    <div class="element-form">
        <label>Tanggal Penba</label>
        <span><input type="date" name="tgl_penba" value="<?php echo $tgl_penba; ?>" /></span>
    </div>

    <div class="element-form">
        <label>Jumlah</label>
        <span><input type="text" name="jml_penba" value="<?php echo $jml_penba; ?>" /></span>
    </div>

    <div class="element-form">
        <label>No PO</label>
        <span><input type="text" name="no_po" value="<?php echo $no_po; ?>" /></span>
    </div>


    <div class="element-form">
        <span><input type="submit" name="button" value="<?php echo $button; ?>" class="submit-my-profile" /></span>
    </div>

</form>