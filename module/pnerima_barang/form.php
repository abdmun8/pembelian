<?php

$id_pnerima_brg = isset($_GET['id_pnerima_brg']) ? $_GET['id_pnerima_brg'] : false;

$no_po = "";
$tgl_pnerima = "";
$jml_barang = "";
$keterangan = "";
$button = "Add";

if ($id_pnerima_brg) {
	$queryPb = mysqli_query($koneksi, "SELECT * FROM pnerima_barang WHERE id_pnerima_brg='$id_pnerima_brg'");
	$row  = mysqli_fetch_assoc($queryPb);

	$no_po = $row['no_po'];
	$tgl_pnerima = $row['tgl_pnerima'];
	$jml_barang = $row['jml_barang'];
	$keterangan = $row['keterangan'];

	$button = "Update";
}

?>
<form action="<?php echo BASE_URL  . "module/pnerima_barang/action.php?id_pnerima_brg=$id_pnerima_brg  " ?>" method="post">

	<div class="element-form">
		<label>No. PO</label>
		<span><input type="text" name="product" value="<?php echo $no_po; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Tanggal</label>
		<span><input type="text" name="stock" value="<?php echo $tgl_pnerima; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Jumlah</label>
		<span><input type="text" name="quantity" value="<?php echo $jml_barang; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Keterangan</label>
		<span>
			<input type="radio" name="status" value="on" <?php if ($keterangan == "Approve") {
																echo "checked='true'";
															} ?> />Approve
			<input type="radio" name="status" value="off" <?php if ($status == "Tidak") {
																echo "checked='true'";
															} ?> />Tidak
		</span>
	</div>

	<div class="element-form">
		<span><input type="submit" name="button" value="<?php echo $button; ?>" class="submit-my-profile" /></span>
	</div>

</form>