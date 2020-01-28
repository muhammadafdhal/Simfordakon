<?php
include '../conn/koneksi.php';

$bankId= $_GET['bankId'];
$query = mysql_query("DELETE FROM bank WHERE bankId='$bankId'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=bank'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=bank'>";
	}


?>