<?php

$id_po = isset($_GET['id_po']) ? $_GET['id_po'] : false;

$no_po = "";
$tgl_po = "";
$no_pr = "";
$id_suplier = "";
$expecting_date = "";
$button = "Add";

if ($id_po) {
	$queryPo = mysqli_query($koneksi, "SELECT * FROM purchase_order WHERE id_po='$id_po'");
	$rowPo = mysqli_fetch_assoc($queryPo);

	$no_po = $rowPo['no_po'];
	$tgl_po = $rowPo['tgl_po'];
	$no_pr = $rowPo['no_pr'];
	$id_suplier = $rowPo['id_suplier'];
	$expecting_date = $rowPo['expecting_date'];

	$button = "Update";
}

?>
<form action="<?php echo BASE_URL . "module/purchase_order/action.php?id_po=$id_po" ?>" method="post">

	<div class="element-form">
		<label>No. Po</label>
		<span><input type="text" name="no_po" value="<?php echo $no_po; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Tanggal PO</label>
		<span><input type="date" name="tgl_po" value="<?php echo $tgl_po; ?>" /></span>
	</div>

	<div class="element-form">
		<label>No. PR</label>
		<span><input type="text" name="no_pr" value="<?php echo $no_pr; ?>" /></span>
	</div>

	<div class="element-form">
		<label>ID Suplier</label>
		<span><input type="text" name="id_suplier" value="<?php echo $id_suplier; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Expecting Date</label>
		<span><input type="date" name="expecting_date" value="<?php echo $expecting_date; ?>" /></span>
	</div>



	<div class="element-form">
		<span><input type="submit" name="button" value="<?php echo $button; ?>" class="submit-my-profile" /></span>
	</div>

</form>