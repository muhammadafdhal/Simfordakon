<?php
include '../conn/koneksi.php';

$rmhId= $_GET['rmhId'];
$query = mysql_query("DELETE FROM rumah WHERE rmhId='$rmhId'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=rumah'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=rumah'>";
	}


?>