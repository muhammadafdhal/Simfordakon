<?php
include '../conn/koneksi.php';

$ksmId= $_GET['ksmId'];
$query = mysql_query("DELETE FROM konsumen WHERE ksmId='$ksmId'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=konsumen'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=konsumen'>";
	}


?>