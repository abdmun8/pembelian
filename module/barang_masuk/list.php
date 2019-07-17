<div id="frame-tambah">
    <a href="<?php echo BASE_URL . "index.php?page=my_profile&module=barang_masuk&action=form"; ?>" class="tombol-action">+Tambah Barang</a>
</div>


<?php
$queryPenba = mysqli_query($koneksi, "SELECT * FROM penba ORDER BY id_penba ASC");


if (mysqli_num_rows($queryPenba) == 0) {
    echo "<h3>Saat ini belum ada barang didalam tabel barang</h3>";
} else {
    echo "<table class='table-list'>";
    echo "<tr class='baris-title'> 
                <th class='kolom-nomor'>No</th>
                <th class='tengah'>No Penba</th>
                <th class='tengah'>Tanggal Penba</th>
                <th class='tengah'>Jumlah</th>
                <th class='tengah'>No PO</th>
                <th class='tengah'>Action</th>
            </tr>";

    $no = 1;
    while ($rowPenba = mysqli_fetch_assoc($queryPenba)) {
        echo "<tr>
                        <td class='kolom-nomor'>$no</td>
                        <td class='tengah'>$rowPenba[no_penba]</td>
                        <td class='tengah'>$rowPenba[tgl_penba]</td>
                        <td class='tengah'>" . rupiah($rowPenba["jml_penba"]) . "</td>
                        <td class='tengah'>$rowPenba[no_po]</td>
                        <td class='tengah'>
                            <a class='tombol-action' href='" . BASE_URL . "index.php?page=my_profile&module=barang_masuk&action=form&id_penba=$rowPenba[id_penba]'>Edit</a>
                            <a class='tombol-hapus' href='" . BASE_URL . "index.php?page=my_profile&module=barang_masuk&action=hapus&id_penba=$rowPenba[id_penba]'>Hapus</a>
                        </td>
                    </tr>";
        $no++;
    }
    echo "</table>";
}


?>