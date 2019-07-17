<?php

// define("BASE_URL", "http://localhost/pembelian/");
define("BASE_URL", $_REQUEST['HTTP_HOST'].$_REQUEST['REQUEST_URI']);


function rupiah($nilai = 0)
{
    $string = "Rp," . number_format($nilai);
    return $string;
}
