<?php

$id_pengkas = isset($_GET['id_pengkas']) ? $_GET['id_pengkas'] : false;

$tgl_pengkas = "";
$keterangan = "";
$jml_pengkas = "";
$no_pembelian = "";
$button = "Add";

if ($id_pengkas) {
	$queryPengkas = mysqli_query($koneksi, "SELECT * FROM peng_kas WHERE id_pengkas='$id_pengkas'");
	$rowPengkas = mysqli_fetch_assoc($queryPengkas);

	$tgl_pengkas = $rowPengkas['tgl_pengkas'];
	$keterangan = $rowPengkas['keterangan'];
	$jml_pengkas = $rowPengkas['jml_pengkas'];
	$no_pembelian = $rowPengkas['no_pembelian'];
	$button = "Update";
}

?>
<form action="<?php echo BASE_URL . "module/pengeluaran_kas/action.php?id_pengkas=$id_pengkas" ?>" method="post">

	<div class="element-form">
		<label>Tanggal Pengkas</label>
		<span><input type="date" name="tgl_pengkas" value="<?php echo $tgl_pengkas; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Keterangan</label>
		<span><input type="text" name="keterangan" value="<?php echo $keterangan; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Jumlah Pengkas</label>
		<span><input type="text" name="jml_pengkas" value="<?php echo $jml_pengkas; ?>" /></span>
	</div>

	<div class="element-form">
		<label>No Pembelian</label>
		<span><input type="text" name="no_pembelian" value="<?php echo $no_pembelian; ?>" /></span>
	</div>


	<div class="element-form">
		<span><input type="submit" name="button" value="<?php echo $button; ?>" class="submit-my-profile" /></span>
	</div>

</form>