<?php
include '../conn/koneksi.php';

$pilihanId= $_GET['pilihanId'];
$query = mysql_query("DELETE FROM pilihan WHERE pilihanId='$pilihanId'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=pilihan'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=pilihan'>";
	}


?>