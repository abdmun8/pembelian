<div id="frame-tambah">
    <a href="<?php echo BASE_URL . "index.php?page=my_profile&module=pnerima_barang&action=form"; ?>" class="tombol-action">+Tambah Terima Barang</a>
</div>


<?php
$queryPb = mysqli_query($koneksi, "SELECT * FROM pnerima_barang ORDER BY id_pnerima_brg ASC");

if (mysqli_num_rows($queryPb) == 0) {
    echo "<h3>Saat ini belum ada Penerimaan Barang</h3>";
} else {
    echo "<table class='table-list'>";
    echo "<tr class='baris-title'> 
                <th class='kolom-nomor'>No</th>
                <th class='tengah'>No. Po</th>
                <th class='tengah'>Tanggal</th>
                <th class='tengah'>Jumlah</th>
                <th class='tengah'>Keterangan</th>
                <th class='tengah'>Total</th>
            </tr>";

    $no = 1;
    while ($rowPb = mysqli_fetch_assoc($queryPb)) {
        echo "<tr>
                        <td class='kolom-nomor'>$no</td>
                        <td class='tengah'>$rowPb[no_po]</td>
                        <td class='tengah'>[tgl_pnerima]</td>
                        <td class='tengah'>$rowPb[jml_barang]</td>
                        <td class='tengah'>$rowPb[keterangan]</td>
                    </tr>";
        $no++;
    }
    echo "</table>";
}


?>