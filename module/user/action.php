<?php
include("../../function/koneksi.php");
include("../../function/helper.php");

$user_id = $_GET['user_id'];

$nama = $_POST['nama'];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST['password'];
$level = $_POST["level"];
$status = $_POST["status"];
$button = $_POST['button'];


if ($button == "Add") {
	mysqli_query($koneksi, "INSERT INTO user (nama, email, phone,password, level, status,) VALUES('$nama', '$email','$phone','$password', '$level', '$status')");
} else if ($button == "Update") {
	$user_id = $_GET['user_id'];

	mysqli_query($koneksi, "UPDATE user SET nama='$nama',
											   email='$email',
											   phone='$phone',
											   password='$password',
											   level='$level',
											   status='$status'
											   WHERE user_id='$user_id'");
}

header("location: " . BASE_URL . "index.php?page=my_profile&module=user&action=list");
