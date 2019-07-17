<?php

$id_jurnal = isset($_GET['id_jurnal']) ? $_GET['id_jurnal'] : false;

$tanggal_jurnal = "";
$no_beli = "";
$no_akun = "";
$debet = "";
$kredit = "";
$referensi = "";
$button = "Add";

if ($id_jurnal) {
	$queryJurnal = mysqli_query($koneksi, "SELECT * FROM jurnal WHERE id_jurnal='$id_jurnal'");
	$rowJurnal = mysqli_fetch_assoc($queryJurnal);

	$tanggal_jurnal = $rowJurnal['tanggal_jurnal'];
	$no_beli = $rowJurnal['no_beli'];
	$no_akun = $rowJurnal['no_akun'];
	$debet = $rowJurnal['debet'];
	$kredit = $rowJurnal['kredit'];
	$referensi = $rowJurnal['referensi'];
	$button = "Update";
}

?>
<form action="<?php echo BASE_URL . "module/jurnal/action.php?id_jurnal=$id_jurnal" ?>" method="post">

	<div class="element-form">
		<label>Tanggal Jurnal</label>
		<span><input type="date" name="tanggal_jurnal" value="<?php echo $tanggal_jurnal; ?>" /></span>
	</div>

	<div class="element-form">
		<label>No Beli</label>
		<span><input type="text" name="no_beli" value="<?php echo $no_beli; ?>" /></span>
	</div>

	<div class="element-form">
		<label>No Akun</label>
		<span><input type="text" name="no_akun" value="<?php echo $no_akun; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Debet</label>
		<span><input type="text" name="debet" value="<?php echo $debet; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Kredit</label>
		<span><input type="text" name="kredit" value="<?php echo $kredit; ?>" /></span>
	</div>

	<div class="element-form">
		<label>referensi</label>
		<span><input type="text" name="referensi" value="<?php echo $referensi; ?>" /></span>
	</div>


	<div class="element-form">
		<span><input type="submit" name="button" value="<?php echo $button; ?>" class="submit-my-profile" /></span>
	</div>

</form>