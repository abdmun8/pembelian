<?php

session_start();

include_once("function/koneksi.php");
include_once("function/helper.php");

$page = isset($_GET['page']) ? $_GET['page'] : false;

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
$level = isset($_SESSION['level']) ? $_SESSION['level'] : false;

?>

<!DOCTYPE html>
<html>

<head>
    <title>PT. Mandiri Panca Prima</title>

    <link href="<?php echo BASE_URL . "css/style.css"; ?>" type="text/css" rel="stylesheet" />
</head>

<body>
    <div id="container">
        <div id="header">
            <a href="<?php echo BASE_URL . "index.php?page=my_profile&module=home&action=list"; ?>">
                <img src="<?php echo BASE_URL . "images/logo1.png"; ?>">
            </a>

            <div id="menu">

                <a href=" <?php echo BASE_URL . "index.php?page=logout"; ?>" id="button-keranjang">Logout</a>
            </div>


            <div id="content">
                <?php
                $filename = "$page.php";
                $ppp = "login.php";
                if (isset($_SESSION['username'])) {
                    if (file_exists($filename)) {
                        include_once($filename);
                    }
                } else {
                    if (file_exists($ppp)) {
                        include_once($ppp);
                    }
                }

                ?>

                <div id="footer">
                    <p>Copyright PT.MPP 2018</p>
                </div>
            </div>
</body>

</html>