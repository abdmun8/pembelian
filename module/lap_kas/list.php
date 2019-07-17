<!--<div id="frame-filter">
	<form method="get">
		<label>PILIH TANGGAL</label>
		<input type="date" name="tanggal">
		<input type="submit" value="FILTER">
	</form>
</div>
-->
<div id="frame-tambah">
    <a class="tombol-success" href="laporan/tutorial/cetak.php">Cetak</a>
</div>

<?php

$queryPengkas = mysqli_query($koneksi, "SELECT * FROM peng_kas ORDER BY id_pengkas ASC");

if (mysqli_num_rows($queryPengkas) == 0) {
    echo "<h3>Saat ini belum ada Pengeluaran kas yang didalam database.</h3>";
} else {
    echo "<table class='table-list'>";

    echo "<tr class='baris-title'>
					<th class='kolom-nomor'>No</th>
					<th class='tengah'>Tanggal Pengkas</th>
					<th class='tengah'>Keterangan</th>
					<th class='tengah'>Jumlah Pengkas</th>
					<th class='tengah'>No Pembelian</th>
				 </tr>";

    $no = 1;
    /*
	if (isset($_GET['tgl_pengkas'])) {
		$tgl_pengkas = $_GET['tgl_pengkas'];
		$rowPengkas = mysqli_query($koneksi, "select * from pengkas where pengkas='$tgl_pengkas'");
	} else {
		$rowPengkas = mysqli_query($koneksi, "select * from pengkas");
	}*/
    while ($rowPengkas = mysqli_fetch_assoc($queryPengkas)) {
        echo "<tr>
						<td class='kolom-nomor'>$no</td>
						<td class='tengah'>$rowPengkas[tgl_pengkas]</td>
						<td class='tengah'>$rowPengkas[keterangan]</td>
						<td class='tengah'>" . rupiah($rowPengkas['jml_pengkas']) . "</td>
						<td class='tengah'>$rowPengkas[no_pembelian]</td>
						
					 </tr>";

        $no++;
    }

    echo "</table>";
}
?>