<div id="frame-tambah">
	<a class="tombol-success" href="laporan/tutorial/cetak3.php">Cetak</a>
	<a href="<?php echo BASE_URL . "index.php?page=my_profile&module=purchase_order&action=form"; ?>" class="tombol-action">+Tambah Pembelian</a>
</div>

<?php

$queryPo = mysqli_query($koneksi, "SELECT * FROM purchase_order ORDER BY id_po ASC");

if (mysqli_num_rows($queryPo) == 0) {
	echo "<h3>Saat ini belum ada nama kota yang didalam database.</h3>";
} else {
	echo "<table class='table-list'>";

	echo "<tr class='baris-title'>
					<th class='kolom-nomor'>No</th>
					<th class='tengah'>No. PO</th>
					<th class='tengah'>Tanggal PO</th>
					<th class='tengah'>No. PR</th>
					<th class='tengah'>ID Suplier</th>
					<th class='tengah'>Exp. Date</th>
					<th class='tengah'>Action</th>
				 </tr>";

	$no = 1;
	while ($rowPo = mysqli_fetch_assoc($queryPo)) {
		echo "<tr>
						<td class='kolom-nomor'>$no</td>
						<td class='tengah'>$rowPo[no_po]</td>
						<td class='tengah'>$rowPo[tgl_po]</td>
						<td class='tengah'>$rowPo[no_pr]</td>
						<td class='tengah'>$rowPo[id_suplier]</td>
						<td class='tengah'>$rowPo[expecting_date]</td>
						<td class='tengah'>
                            <a class='tombol-action' href='" . BASE_URL . "index.php?page=my_profile&module=purchase_order&action=form&id_po=$rowPo[id_po]'>Edit</a>
                            <a class='tombol-hapus' href='" . BASE_URL . "index.php?page=my_profile&module=purchase_order&action=hapus&id_po=$rowPo[id_po]'>Hapus</a>
                        </td>
					 </tr>";

		$no++;
	}

	echo "</table>";
}
?>