<?php

$id_beli = isset($_GET['id_beli']) ? $_GET['id_beli'] : false;

$nopenba = "";
$tgl = "";
$jumlah = "";
$button = "Add";

if ($id_beli) {
	$queryBeli = mysqli_query($koneksi, "SELECT * FROM pembelian WHERE id_beli='$id_beli'");
	$row = mysqli_fetch_assoc($queryBeli);

	$nopenba = $row['no_penba'];
	$tgl = $row['tanggal'];
	$jumlah = $row['jumlah'];

	$button = "Update";
}

?>
<form action="<?php echo BASE_URL . "module/pembelian/action.php?id_beli=$id_beli" ?>" method="post">

	<div class="element-form">
		<label>No Penba</label>
		<span><input type="text" name="no_penba" value="<?php echo $nopenba; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Jumlah</label>
		<span><input type="text" name="jumlah" value="<?php echo $jumlah; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Tanggal</label>
		<span><input type="date" name="tanggal" value="<?php echo $tgl; ?>" /></span>
	</div>



	<div class="element-form">
		<span><input type="submit" name="button" value="<?php echo $button; ?>" class="submit-my-profile" /></span>
	</div>

</form>