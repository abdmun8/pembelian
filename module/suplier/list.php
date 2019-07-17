<div id="frame-tambah">
	<a class="tombol-action" href="<?php echo BASE_URL . "index.php?page=my_profile&module=suplier&action=form"; ?>">+ Tambah Suplier</a>
</div>

<?php

$querySuplier = mysqli_query($koneksi, "SELECT * FROM suplier ORDER BY nama_suplier ASC");

if (mysqli_num_rows($querySuplier) == 0) {
	echo "<h3>Saat ini belum ada Suplier didalam database.</h3>";
} else {
	echo "<table class='table-list'>";

	echo "<tr class='baris-title'>
					<th class='kolom-nomor'>No</th>
					<th class='tengah'>Suplier</th>
					<th class='tengah'>Alamat</th>
					<th class='tengah'>Action</th>
				 </tr>";

	$no = 1;
	while ($rowSuplier = mysqli_fetch_assoc($querySuplier)) {
		echo "<tr>
						<td class='kolom-nomor'>$no</td>
						<td class='tengah'>$rowSuplier[nama_suplier]</td>
						<td class='tengah'>$rowSuplier[alamat]</td>
						<td class='tengah'>
							<a class='tombol-action' href='" . BASE_URL . "index.php?page=my_profile&module=suplier&action=form&id_suplier=$rowSuplier[id_suplier]" . "'>Edit</a>
							<a class='tombol-hapus' href='" . BASE_URL . "index.php?page=my_profile&module=suplier&action=hapus&id_suplier=$rowSuplier[id_suplier]'>Hapus</a>
						</td>
					 </tr>";

		$no++;
	}

	echo "</table>";
}
?>