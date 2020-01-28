<?php
include '../conn/koneksi.php';

$tkgId= $_GET['tkgId'];
$query = mysql_query("DELETE FROM tukang WHERE tkgId='$tkgId'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=tukang'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=tukang'>";
	}


?>