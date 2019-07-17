<div id="frame-tambah">
    <a class="tombol-success" href="laporan/tutorial/cetak1.php">Cetak</a>
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
				 </tr>";

    $no = 1;
    while ($rowBeli = mysqli_fetch_assoc($queryBeli)) {
        echo "<tr>
						<td class='kolom-nomor'>$no</td>
						<td class='tengah'>$rowBeli[no_penba]</td>
						<td class='tengah'>$rowBeli[tanggal]</td>
						<td class='tengah'>" . rupiah($rowBeli['jumlah']) . "</td>
					 </tr>";

        $no++;
    }

    echo "</table>";
}
?>