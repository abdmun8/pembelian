<?php

$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : "";

$button = "Update";
$queryUser = mysqli_query($koneksi, "SELECT * FROM user WHERE user_id='$user_id'");

$row = mysqli_fetch_array($queryUser);

$nama = $row["nama"];
$email = $row["email"];
$phone = $row["phone"];
$alamat = $row["alamat"];
$status = $row["status"];
$level = $row["level"];
?>
<form action="<?php echo BASE_URL . "module/user/action.php?user_id=$user_id" ?>" method="POST">

	<div class="element-form">
		<label>Nama Lengkap</label>
		<span><input type="text" name="nama" value="<?php echo $nama; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Email</label>
		<span><input type="text" name="email" value="<?php echo $email; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Phone</label>
		<span><input type="text" name="phone" value="<?php echo $phone; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Password</label>
		<span><input type="password" name="password" /></span>
	</div>

	<div class="element-form">
		<label>Level</label>
		<span>
			<input type="radio" value="direktur" name="level" <?php if ($level == "direktur") {
																	echo "checked";
																} ?> /> Direktur
			<input type="radio" value="purchase" name="level" <?php if ($level == "purchase") {
																	echo "checked";
																} ?> /> Purchase

			<input type="radio" value="finance" name="level" <?php if ($level == "finance") {
																	echo "checked";
																} ?> /> Acc Finance
			<input type="radio" value="warehouse" name="level" <?php if ($level == "warehouse") {
																	echo "checked";
																} ?> /> Warehouse
		</span>
	</div>

	<div class="element-form">
		<label>Status</label>
		<span>
			<input type="radio" value="on" name="status" <?php if ($status == "on") {
																echo "checked";
															} ?> /> on
			<input type="radio" value="off" name="status" <?php if ($status == "off") {
																echo "checked";
															} ?> /> off
		</span>
	</div>

	<div class="element-form">
		<span><input type="submit" name="button" value="<?php echo $button; ?>" class="submit-my-profile" /></span>
	</div>
</form>