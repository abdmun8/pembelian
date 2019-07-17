<div id="frame-tambah">
	<a class="tombol-action" href="<?php echo BASE_URL . "index.php?page=my_profile&module=akun&action=form"; ?>">+ Tambah Akun</a>
</div>

<?php

$queryAkun = mysqli_query($koneksi, "SELECT * FROM akun ORDER BY nama_akun ASC");

if (mysqli_num_rows($queryAkun) == 0) {
	echo "<h3>Saat ini belum ada nama Akun didalam database.</h3>";
} else {
	echo "<table class='table-list'>";

	echo "<tr class='baris-title'>
					<th class='kolom-nomor'>No</th>
					<th class='tengah'>Nama Akun</th>
					<th class='tengah'>Jenis Akun</th>
					<th class='tengah'>Status</th>

				 </tr>";

	$no = 1;
	while ($rowAkun = mysqli_fetch_assoc($queryAkun)) {
		echo "<tr>
						<td class='kolom-nomor'>$no</td>
						<td class='tengah'>$rowAkun[nama_akun]</td>
						<td class='tengah'>$rowAkun[jenis_akun]</td>
						<td class='tengah'>
						<a class='tombol-action' href='" . BASE_URL . "index.php?page=my_profile&module=akun&action=form&id_akun=$rowAkun[id_akun]" . "'>Edit</a>
						<a class='tombol-hapus' href='" . BASE_URL . "index.php?page=my_profile&module=akun&action=hapus&id_akun=$rowAkun[id_akun]'>Hapus</a>
					</td>
					 </tr>";

		$no++;
	}

	echo "</table>";
}
?>
<!--
	<td class='tengah'>
							<a class='tombol-action' href='" . BASE_URL . "index.php?page=my_profile&module=akun&action=form&kota_id=$rowKota[kota_id]" . "'>Edit</a>
						</td>

-->