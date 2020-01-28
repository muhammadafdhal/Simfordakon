<?php
include '../conn/koneksi.php';

$sumurId= $_GET['sumurId'];
$query = mysql_query("DELETE FROM sumur WHERE sumurId='$sumurId'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=sumur'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=sumur'>";
	}


?>