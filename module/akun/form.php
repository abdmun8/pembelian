<?php

$id_akun = isset($_GET['id_akun']) ? $_GET['id_akun'] : false;

$nama_akun = "";
$jenis_akun = "";
$button = "Add";

if ($id_akun) {
	$queryAkun = mysqli_query($koneksi, "SELECT * FROM akun WHERE id_akun='$id_akun'");
	$row = mysqli_fetch_assoc($queryAkun);

	$nama_akun = $row['nama_akun'];
	$jenis_akun = $row['jenis_akun'];
	$button = "Update";
}

?>
<form action="<?php echo BASE_URL . "module/akun/action.php?id_akun=$id_akun" ?>" method="post">

	<div class="element-form">
		<label>Nama Akun</label>
		<span><input type="text" name="nama_akun" value="<?php echo $nama_akun; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Jenis_akun</label>
		<span><input type="text" name="jenis_akun" value="<?php echo $jenis_akun; ?>" /></span>
	</div>

	<div class="element-form">
		<span><input type="submit" name="button" value="<?php echo $button; ?>" class="submit-my-profile" /></span>
	</div>

</form>