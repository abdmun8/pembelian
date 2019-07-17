<?php

if ($user_id) {
    $module = isset($_GET['module']) ? $_GET['module'] : false;
    $action = isset($_GET['action']) ? $_GET['action'] : false;
    $mode = isset($_GET['mode']) ? $_GET['mode'] : false;
} else {
    header("location:" . BASE_URL . "index.php");
}

?>


<div id="bg-page-profile">
    <div id="menu-profile">
        <ul>
            <?php
            if ($level == "warehouse") {
                ?>

                <li>
                    <a <?php if ($module == "home") {
                            echo "class='active'";
                        } ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=home&action=list"; ?>">Home</a>
                </li>

                <li>
                    <a>Master</a>
                </li>
                <ul>

                    <li>
                        <a class="submenu" <?php if ($module == "barang") ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=barang&action=list"; ?>">Data Barang</a>
                    </li>

                </ul>

                <li>
                    <a>Transaksi</a>
                </li>
                <ul>
                    <li>
                        <a class="submenu" <?php if ($module == "barang_masuk") ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=barang_masuk&action=list"; ?>">Penerimaan Barang</a>
                    </li>

                </ul>

            <?php
            }
            ?>

            <?php
            if ($level == "purchase") {
                ?>
                <li>
                    <a <?php if ($module == "home")  ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=home&action=list"; ?>">Home</a>
                </li>

                <li>
                    <a>Master</a>
                </li>
                <ul>

                    <li>
                        <a class="submenu" <?php if ($module == "barang") ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=barang&action=list"; ?>">Data Barang</a>
                    </li>
                    <li>
                        <a class="submenu" <?php if ($module == "suplier") ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=suplier&action=list"; ?>">Data Suplier</a>
                    </li>
                </ul>

                <li>
                    <a>Transaksi</a>
                </li>
                <ul>
                    <li>
                        <a class="submenu" <?php if ($module == "purchase_order")  ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=purchase_order&action=list"; ?>">Purchase Order</a>
                    </li>

                    <li>
                        <a class="submenu" <?php if ($module == "pembelian")  ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=pembelian&action=list"; ?>">Pembelian</a>
                    </li>

                </ul>


                <li>
                    <a> Laporan </a>
                </li>
                <ul>
                    <li>
                        <a class="submenu" <?php if ($module == "lap_pembelian")  ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=lap_pembelian&action=list"; ?>">Lap. Pembelian</a>
                    </li>
                </ul>


            <?php
            }
            ?>

            <?php
            if ($level == "direktur") {
                ?>
                <li>
                    <a <?php if ($module == "home")  ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=home&action=list"; ?>">Home</a>
                </li>

                <li>
                    <a>Master</a>
                </li>
                <ul>
                    <li>
                        <a class="submenu" <?php if ($module == "user")  ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=user&action=list"; ?>">Data User</a>
                    </li>

                </ul>


                <li>
                    <a> Laporan </a>
                </li>
                <ul>
                    <li>
                        <a class="submenu" <?php if ($module == "lap_pembelian")  ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=lap_pembelian&action=list"; ?>">Lap. Pembelian</a>
                    </li>

                    <li>
                        <a class="submenu" <?php if ($module == "lap_kas") ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=lap_kas&action=list"; ?>">Lap. Pengeluaran Kas</a>
                    </li>
                </ul>


            <?php
            }
            ?>

            <?php
            if ($level == "finance") {
                ?>
                <li>
                    <a <?php if ($module == "home")  ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=home&action=list"; ?>">Home</a>
                </li>

                <li>
                    <a>Master</a>
                </li>
                <ul>

                    <li>
                        <a class="submenu" <?php if ($module == "akun") ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=akun&action=list"; ?>">Akun</a>
                    </li>
                </ul>

                <li>
                    <a>Transaksi</a>
                </li>
                <ul>

                    <li>
                        <a class="submenu" <?php if ($module == "pembelian")  ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=pembelian&action=list"; ?>">Pembelian</a>
                    </li>
                    <li>
                        <a class="submenu" <?php if ($module == "pengeluaran_kas") ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=pengeluaran_kas&action=list"; ?>">Pengeluaran Kas</a>
                    </li>


                    <li>
                        <a class="submenu" <?php if ($module == "jurnal")  ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=jurnal&action=list"; ?>">Jurnal</a>
                    </li>
                </ul>


            <?php
            }
            ?>



        </ul>

    </div>
    <div id="profile-content">
        <?php
        $file   = "module/$module/$action.php";
        if (file_exists($file)) {
            include_once($file);
        } else {
            echo "<h3>Maaf, Halaman tidak ditemukan</h3>";
        }

        ?>
    </div>
</div>