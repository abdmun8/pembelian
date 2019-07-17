<div id="frame-tambah">
	<a href="<?php echo BASE_URL . "index.php?page=my_profile&module=pembelian&action=form"; ?>" class="tombol-action">+Tambah Pembelian</a>
</div>

<?php

$queryBeli = mysqli_query($koneksi, "SELECT * FROM pembelian ORDER BY id_beli ASC");

if (mysqli_num_rows($queryBeli) == 0) {
	echo "<h3>Saat ini belum ada nama kota yang didalam database.</h3>";
} else {
	echo "<table class='table-list'>";

	echo "<tr class='baris-title'>
					<th class='kolom-nomor'>No</th>
					<th class='tengah'>No Penba</th>
					<th class='tengah'>Tanggal</th>
					<th class='tengah'>Jumlah</th>
					<th class='tengah'>Action</th>
				 </tr>";

	$no = 1;
	while ($rowBeli = mysqli_fetch_assoc($queryBeli)) {
		echo "<tr>
						<td class='kolom-nomor'>$no</td>
						<td class='tengah'>$rowBeli[no_penba]</td>
						<td class='tengah'>$rowBeli[tanggal]</td>
						<td class='tengah'>" . rupiah($rowBeli['jumlah']) . "</td>
						<td class='tengah'>
                            <a class='tombol-action' href='" . BASE_URL . "index.php?page=my_profile&module=pembelian&action=form&id_beli=$rowBeli[id_beli]'>Edit</a>
                            <a class='tombol-hapus' href='" . BASE_URL . "index.php?page=my_profile&module=pembelian&action=hapus&id_beli=$rowBeli[id_beli]'>Hapus</a>
                        </td>
					 </tr>";

		$no++;
	}

	echo "</table>";
}
?>