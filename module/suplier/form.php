<?php

$id_suplier = isset($_GET['id_suplier']) ? $_GET['id_suplier'] : false;

$nama_suplier = "";
$alamat = "";
$button = "Add";

if ($id_suplier) {
	$querySuplier = mysqli_query($koneksi, "SELECT * FROM suplier WHERE id_suplier='$id_suplier'");
	$rowSuplier = mysqli_fetch_assoc($querySuplier);

	$nama_suplier = $rowSuplier['nama_suplier'];
	$alamat = $rowSuplier['alamat'];
	$button = "Update";
}

?>
<form action="<?php echo BASE_URL . "module/suplier/action.php?id_suplier=$id_suplier" ?>" method="post">

	<div class="element-form">
		<label>Suplier</label>
		<span><input type="text" name="nama_suplier" value="<?php echo $nama_suplier; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Alamat</label>
		<span><input type="text" name="alamat" value="<?php echo $alamat; ?>" /></span>
	</div>


	<div class="element-form">
		<span><input type="submit" name="button" value="<?php echo $button; ?>" class="submit-my-profile" /></span>
	</div>

</form>