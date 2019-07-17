<div id="frame-tambah">
	<a class="tombol-action" href="<?php echo BASE_URL . "index.php?page=my_profile&module=jurnal&action=form"; ?>">+ Tambah Jurnal</a>
</div>

<?php

$queryJurnal = mysqli_query($koneksi, "SELECT * FROM jurnal ORDER BY id_jurnal ASC");

if (mysqli_num_rows($queryJurnal) == 0) {
	echo "<h3>Saat ini belum ada nama kota yang didalam database.</h3>";
} else {
	echo "<table class='table-list'>";

	echo "<tr class='baris-title'>
					<th class='kolom-nomor'>No</th>
					<th class='tengah'>Tanggal jurnal</th>
					<th class='tengah'>No Beli</th>
					<th class='tengah'>No Akun</th>
					<th class='tengah'>Debet</th>
					<th class='tengah'>Kredit</th>
					<th class='tengah'>Referensi</th>
					<th class='tengah'>Action</th>
				 </tr>";

	$no = 1;
	while ($rowJurnal = mysqli_fetch_assoc($queryJurnal)) {
		echo "<tr>
						<td class='kolom-nomor'>$no</td>
						<td class='tengah'>$rowJurnal[tanggal_jurnal]</td>
						<td class='tengah'>$rowJurnal[no_beli]</td>
						<td class='tengah'>$rowJurnal[no_akun]</td>
						<td class='tengah'>" . rupiah($rowJurnal['debet']) . "</td>
						<td class='tengah'>" . rupiah($rowJurnal['kredit']) . "</td>
						<td class='tengah'>$rowJurnal[referensi]</td>
						<td class='tengah'>
							<a class='tombol-action' href='" . BASE_URL . "index.php?page=my_profile&module=jurnal&action=form&id_jurnal=$rowJurnal[id_jurnal]" . "'>Edit</a>
							<a class='tombol-hapus' href='" . BASE_URL . "index.php?page=my_profile&module=jurnal&action=hapus&id_jurnal=$rowJurnal[id_jurnal]'>Hapus</a>
						</td>
					 </tr>";

		$no++;
	}

	echo "</table>";
}
?>