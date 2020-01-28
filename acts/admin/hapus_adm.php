<?php
include '../conn/koneksi.php';

$loginId= $_GET['loginId'];
$query = mysql_query("DELETE FROM login WHERE loginId='$loginId'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=admin'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=admin'>";
	}


?>