<div id="frame-tambah">
    <a href="<?php echo BASE_URL . "index.php?page=my_profile&module=barang&action=form"; ?>" class="tombol-action">+Tambah Barang</a>
</div>


<?php
$queryBarang = mysqli_query($koneksi, "SELECT * FROM barang_sales ORDER BY id_barang ASC");

if (mysqli_num_rows($queryBarang) == 0) {
    echo "<h3>Saat ini belum ada barang didalam tabel barang</h3>";
} else {
    echo "<table class='table-list'>";
    echo "<tr class='baris-title'> 
                <th class='kolom-nomor'>No</th>
                <th class='tengah'>Kode Barang</th>
                <th class='tengah'>Nama Barang</th>
                <th class='tengah'>Jenis</th>
                <th class='tengah'>Unit</th>
                <th class='tengah'>Jumlah</th>
                <th class='tengah'>Action</th>
            </tr>";

    $no = 1;
    while ($row = mysqli_fetch_assoc($queryBarang)) {
        echo "<tr>
                        <td class='kolom-nomor'>$no</td>
                        <td class='tengah'>$row[kd_barang]</td>
                        <td class='tengah'>$row[nm_brg]</td>
                        <td class='tengah'>$row[jns_brg]</td>
                        <td class='tengah'>$row[unit_barang]</td>
                        <td class='tengah'>$row[jml_brg]</td>
                        <td class='tengah'>
                            <a class='tombol-action' href='" . BASE_URL . "index.php?page=my_profile&module=barang&action=form&id_barang=$row[id_barang]'>Edit</a>
                            <a class='tombol-hapus' href='" . BASE_URL . "index.php?page=my_profile&module=barang&action=hapus&id_barang=$row[id_barang]'>Hapus</a>
                        </td>
                    </tr>";
        $no++;
    }
    echo "</table>";
}


?>